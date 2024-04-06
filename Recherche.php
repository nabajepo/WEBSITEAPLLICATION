<?php
include("Header.html");
session_start();
echo "<body style='background-color:aliceblue'>";
$entrer="<h4 style='color:green;font-size:35px;margin-left:10px'>Date d'entrée :</h4>";
$sortie="<h4 style='color:green;font-size:35px;margin-left:10px'>Date de sortie :</h4>";
$capacite="<h4 style='color:green;font-size:35px;margin-left:10px'>Capacité :</h4>";
$superficie="<h4 style='color:green;font-size:35px;margin-left:10px'>Superficie :</h4>";
$chaine="<h4 style='color:green;font-size:35px;margin-left:10px'>Chaine Hoteliere:</h4>";
$nbreChambre="<h4 style='color:green;font-size:35px;margin-left:10px'>Nombre de chambre :</h4>";
$categorie="<h4 style='color:green;font-size:35px;margin-left:10px'>Categorie :</h4>";
$prix="<h4 style='color:green;font-size:35px;margin-left:10px'>Prix :</h4>";

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
echo "<h1 style='color:green;font-size:25px;margin-left:350px'>Veuillez inserer les informations de la chambre que vous cherchez</h1>";
echo "<form action='Recherche.php' method='post'  style='margin-left:200px;'>
     <div style='display:flex; align-items:center;'>
      $entrer<input type='date' name='dateDebut' style='font-size:25px;border-radius:10px;margin-left:10px;padding:10px'>
      $sortie<input type='date' name='dateFin'  style='font-size:25px;border-radius:10px;margin-left:10px;padding:10px'>
      </div>
      <div style='display:flex; align-items:center;'>
          $capacite<select name='capacite' style='font-size:25px;border-radius:10px;margin-left:10px;padding:10px'>
              <option value='simple'>Simple</option>
              <option value='double'>Double</option>
          </select>
          $superficie<input type='text' name='superficie' placeholder='Superficie en m^2 min' style='font-size:25px;border-radius:10px;margin-left:10px;padding:15px'>
      </div>
      <div  style='display:flex; align-items:center;'>
          $chaine<select name='chaine' style='font-size:25px;border-radius:10px;margin-left:10px;padding:10px'>
              <option >1</option>
              <option >2</option>
              <option >3</option>
              <option >4</option>
              <option >5</option>
          </select>
          $categorie<select name='categorie' style='font-size:25px;border-radius:10px;margin-left:10px;padding:10px'>
              <option >1</option>
              <option >2</option>
              <option >3</option>
              <option >4</option>
              <option >5</option>
          </select>
      </div>
      <div style='display:flex; align-items:center;'>
      $nbreChambre<input type='text' name='maxColonneAffiche' placeholder='Nombre total de chambre' style='font-size:25px;border-radius:10px;margin-left:10px;padding:10px'>
      $prix<input type='text' name='prix' placeholder='prix des chambres max' style='font-size:25px;border-radius:10px;margin-left:10px;padding:10px'>
      </div>
      <button name='recherche' style='color:white;font-size:35px;margin-right:180px;border-radius:25px;background-color:green;margin-left:10px;'>Chercher la chambre</button><br>
      </form>";
      if(isset($_POST["recherche"])){
          if(empty($_POST["dateDebut"]&&$_POST["dateFin"]&&$_POST["superficie"]&&$_POST["maxColonneAffiche"]&&$_POST["prix"])){
            echo "<h1 style='color:green;font-size:25px;margin-left:200px'>Veuillez remplir tous les champs </h1>";
          }
          else{
            if(isDateValid($_POST["dateDebut"],$_POST["dateFin"])==false){
                echo "<h1 style='color:green;font-size:25px;margin-left:200px'>Veuillez entrer des dates valides</h1>";
            }
            else{
                $valSup=filter_input(INPUT_POST,"superficie",FILTER_VALIDATE_INT);
                 $valnbr=filter_input(INPUT_POST,"maxColonneAffiche",FILTER_VALIDATE_INT);
                $valprix=filter_input(INPUT_POST,"prix",FILTER_VALIDATE_INT);
               if(empty($valSup&&$valnbr&&$valprix)){
                echo "<h1 style='color:green;font-size:25px;margin-left:200px'>Veuillez entrer une superficie,prix,nombres de chambre valides</h1>";
               }
               else{
                   
                   $_SESSION["rech"]="true";
                    ////////////////////////
                    $_SESSION["dateDT"]=$_POST["dateDebut"];
                    $_SESSION["dateFT"]=$_POST["dateFin"];
                    $_SESSION["capaciteT"]=$_POST["capacite"];
                    $_SESSION["superficieT"]=$_POST["superficie"];
                    $_SESSION["chaineHT"]=$_POST["chaine"];
                    $_SESSION["categorieT"]=$_POST["categorie"];
                    $_SESSION["nbrLignT"]=$_POST["maxColonneAffiche"];
                    $_SESSION["prixMT"]=$_POST["prix"];
                    //////////////////////////////////
                    header("Location:TableCh.php");
                    
               }

            }
            
          }
      }
echo "<br>" ;   
echo "<br> <hr>";
echo "&copy;Page de recherche de chambre specifique";      
echo "</body>" ; 
?>
