<?php
include("Header.html");
include("ConnectionToDatabase.php");
session_start();
$entrer="<h4 style='color:green;font-size:35px;margin-left:10px'>Date d'entrée :</h4>";
$sortie="<h4 style='color:green;font-size:35px;margin-left:10px'>Date de sortie :</h4>";
$nom="<h4 style='color:green;font-size:35px;margin-left:10px'>Nom :</h4>";
$adresse="<h4 style='color:green;font-size:35px;margin-left:10px'>Adresse :</h4>";
$nas="<h4 style='color:green;font-size:35px;margin-left:10px'>NAS:</h4>";
$moyenPaymt="<h4 style='color:green;font-size:35px;margin-left:10px'>Mode de payement :</h4>";
echo "<body style='background-color:aliceblue'>";
$chaineH=null;
$adresseH=null;
$villeH=null;
$emailH=null;
function getIndexNext($connect){
      $indexNext=0;
      $checkE="SELECT * FROM reservation ORDER BY idRes DESC LIMIT 1;";
      $resCl=mysqli_query($connect,$checkE);
      if(mysqli_num_rows($resCl)>0){
            $rowCl=mysqli_fetch_array($resCl);
            $indexNext=$rowCl["idRes"]+1;
      }
      return $indexNext;
}
function isDateValid($dA,$dP){
     $dateA=explode("-",$dA);
     $dateB=explode("-",$dP);
     if($dateB[0]>$dateA[0]){
      return true;
     }
     elseif($dateB[0]==$dateA[0]){
      if($dateB[1]>$dateA[1]){
            return true;
           }
           if($dateB[1]==$dateA[1]){
            if($dateB[2]>$dateA[2]){
                  return true;
                 }
           }
           else{
            return false;
           }
     }
     else{
      return false;
     }
}
echo "<h1 style='color:green;font-size:25px;margin-left:200px'>Reservation à l'hotel{$_SESSION["hotelId"]}</h1>";
$sql="SELECT *FROM hotel WHERE id='{$_SESSION["hotelId"]}'";
try{
      $HotelInfo=mysqli_query($connect,$sql);
if(mysqli_num_rows($HotelInfo)>0){
      $row=mysqli_fetch_assoc($HotelInfo);
      $chaineH=$row["idCh"];
      $adresseH=$row["adresse"];
      $emailH=$row["email"];
      $villeH=$row["ville"];}
}
catch(mysqli_sql_exception){}

echo "<h1 style='color:green;font-size:25px;margin-left:200px'>Veuillez inserer vos informations personels pour la reservation de la chambre numero {$_SESSION["IDChambres"]}</h1>";
echo "<form action='Reservation.php' method='post'  style='margin-left:200px;'>
<div style='display:flex; align-items:center;'>
$nom<input type='text' name='nom' placeholder='Entrez votre nom' style='font-size:25px;border-radius:10px;margin-left:10px;padding:10px'>
</div>
      <div style='display:flex; align-items:center;'>
      $adresse<input type='text' name='adresse' placeholder='Entrez votre adresse' style='font-size:25px;border-radius:10px;margin-left:10px;padding:10px'>
      $nas<input type='text' name='nas' placeholder='Entrez votre NAS' style='font-size:25px;border-radius:10px;margin-left:10px;padding:10px'>
      </div>
      <div style='display:flex; align-items:center;'>
      $entrer<input type='date' name='dateDebut'  style='font-size:25px;border-radius:10px;margin-left:10px;padding:10px'>
      $sortie<input type='date' name='dateFin'  style='font-size:25px;border-radius:10px;margin-left:10px;padding:10px'>
      </div>
      <div style='display:flex; align-items:center;'>
      $moyenPaymt<select name='payment' style='font-size:25px;border-radius:10px;margin-left:10px;padding:10px'>
      <option value='CASH'>CASH</option>
      <option value='CARD'>CARD</option>
      </select></div>
      <button name='reservation'   style='color:white;font-size:35px;margin-right:180px;border-radius:25px;background-color:green;margin-left:10px;'>Faire la reservation</button><br>
      </form>";
      if(isset($_POST["reservation"])){
               if(empty($_POST["nom"]&&$_POST["adresse"]&&$_POST["nas"]&&$_POST["dateDebut"]&&$_POST["dateFin"]&&$_POST["payment"])){
                  echo "<h1 style='color:green;font-size:25px;margin-left:200px'>Veuillez remplir tous les champs </h1>";
                  
               }
               else{
                  $nasCl=filter_input(INPUT_POST,"nas",FILTER_VALIDATE_INT);
                 
                              
                  if(empty($nasCl)){
                        echo "<h1 style='color:green;font-size:25px;margin-left:200px'>Veuillez entre un nas valide </h1>";
                  }
                  else{
                        if(isDateValid($_POST["dateDebut"],$_POST["dateFin"])==false){
                              echo "<h1 style='color:green;font-size:25px;margin-left:200px'>Veuillez entre une date valide </h1>";
                        }
                        else{  
                              $_SESSION["type"]=1;
                              $_SESSION["nomCl"]=$_POST["nom"];
                              $_SESSION["adresseCl"]=$_POST["adresse"];
                              $_SESSION["nasCl"]=$_POST["nas"];
                              $_SESSION["dateDCl"]=$_POST["dateDebut"];
                              $_SESSION["dateFCl"]=$_POST["dateFin"];
                              $_SESSION["paymentCl"]=$_POST["payment"];
                              ////////////////////////////////////////:
                              $_SESSION["statut"]="libre";
                              $_SESSION["idHotelCl"]=$_SESSION["hotelId"];
                              $_SESSION["idChambreCl"]=$_SESSION["IDChambres"];
                              $_SESSION["idChaineCl"]=$chaineH;
                              $_SESSION["indexT"]=getIndexNext($connect);
                              //$inserT="INSERT INTO reservation (nas,nomClient,dateD,dateF,paiement,statut,numChambre,idHotel,idCh,adresse)VALUES ('$nasCl','{$_POST["nom"]}','{$_POST["dateDebut"]},'{$_POST["dateFin"]}','{$_POST["payment"]}','libre','{$_SESSION["IDChambres"]}','{$_SESSION["hotelId"]}','$chaineH','{$_POST["adresse"]}')";
                              $inserT="INSERT INTO reservation 
                              (nas,nomClient,dateD,dateF,paiement,statut,numChambre,idHotel,idCh,adresse,idRes)
                              VALUES ('$nasCl','{$_SESSION["nomCl"]}','{$_SESSION["dateDCl"]}',
                              '{$_SESSION["dateFCl"]}','{$_SESSION["paymentCl"]}','libre',
                              '{$_SESSION["IDChambres"]}','{$_SESSION["hotelId"]}','$chaineH',
                              '{$_SESSION["adresseCl"]}','{$_SESSION["indexT"]}')";
                               
                              try{
                                    $checkE="SELECT * FROM reservation WHERE nas='$nasCl'";
                                    $resCl=mysqli_query($connect,$checkE);
                                    if(mysqli_num_rows($resCl)>0){
                                          $rowCl=mysqli_fetch_array($resCl);
                                          if(
                                              ($rowCl["nomClient"]==$_SESSION["nomCl"])&&
                                              ($rowCl["dateD"]==$_SESSION["dateDCl"])&&
                                              ($rowCl["dateF"]==$_SESSION["dateFCl"])&&
                                              ($rowCl["numChambre"]==$_SESSION["IDChambres"])&&
                                              ($rowCl["idHotel"]==$_SESSION["hotelId"])){
                                                    throw new mysqli_sql_exception;
                                              }
                                              
                                    }
                                    mysqli_query($connect,$inserT);
                                    mysqli_close($connect);
                                    header("Location:Confirmation.php");
                                    
                                       
                                        
                                  
                               
                              }
                              catch(mysqli_sql_exception){
                                echo "<h1 style='color:green;font-size:25px;margin-left:200px'>Desolé vous etes deja enregistré pour cette chambre </h1>";
                              }
                              
                        }
                              
                              
                              
                          
                        }
                  }
      }
echo "<br>" ;   
echo "<br> <hr>";
echo "<h4>L'hotel{$_SESSION["hotelId"]} appartient à la chaine hoteliere numero $chaineH </h4>";
echo "<h4>L'hotel{$_SESSION["hotelId"]} est dans la ville :$villeH </h4>";
echo "<h4>L'hotel{$_SESSION["hotelId"]} est à l'adresse :$adresseH </h4>";
echo "<h4>L'hotel{$_SESSION["hotelId"]} est a pour email :$emailH </h4><br>";
echo "&copy;Page de reservation de chambre"; 
echo "</body>" ; 
?>
