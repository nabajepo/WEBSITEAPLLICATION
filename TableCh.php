<?php
include("Header.html");
include("ConnectionToDatabase.php");
echo "<body style='background-color:aliceblue'>";
session_start();
function getLoc($key){
    $arr=explode("_",$key);
    $arrT=array($arr[0],$arr[2]);
    return $arrT;
 }
 function arriere($entreNew,$sortieOld){
    $new=explode("-",$entreNew);
    $old=explode("-",$sortieOld);
    if($new[0]>$old[0]){
         return true;
    }
    elseif(($new[0]==$old[0])&&($new[1]>$old[1])){
        return true;
    }
    elseif(($new[0]==$old[0])&&($new[1]==$old[1])&&($new[2]>$old[2])){
        return true;
    }
    else{
        return false;
    }
 }
 function avant($sortieNew,$entreOld){
    $new=explode("-",$sortieNew);
    $old=explode("-",$entreOld);
    if($new[0]<$old[0]){
         return true;
    }
    elseif(($new[0]==$old[0])&&($new[1]<$old[1])){
        return true;
    }
    elseif(($new[0]==$old[0])&&($new[1]==$old[1])&&($new[2]<$old[2])){
        return true;
    }
    else{
        return false;
    }
 }
 function isAdec($ListDateArr,$ListDateDep,$dateNewArr,$dateDepartNew,$ListIdHotel,$ListIdCham){
    
      $index=0;
      foreach($ListDateArr as $l){
         if(avant($dateDepartNew,$l)||arriere($dateNewArr,$ListDateDep[$index])){
            return true; 
         }
         $index++;
      }
      return false;
 }
if($_SESSION["rech"]=="false"){
    echo "<h1 style='color:green;font-size:35px;margin-left:400px'>Les chambres  disponibles pour l'hotel{$_SESSION["ID"]}</h1>";

$chambreAv=array();
    $hId=$_SESSION["ID"];
    
    $sql="SELECT * FROM Chambre WHERE idHotel = $hId AND libre = 'vrai'";
    try{
        $result=mysqli_query($connect,$sql);
        if(mysqli_num_rows($result)>0){
           while($column=mysqli_fetch_assoc($result)){
              array_push($chambreAv,$column["numCh"]);
           }
            
        }
        foreach($chambreAv as $ins){
            if(isset($_POST[$ins])){
                $_SESSION["hotelId"]=$_SESSION["ID"];
                $_SESSION["IDChambres"]=$ins;
                header("Location:Reservation.php");
            }
           }
        echo "<form action='TableCh.php' method='post' style='margin-left:240px;'>";
        echo "<table border='3' style='background-color:back'>";
        echo "<tr align='center' style='background-color:green;color:white'>";
        echo "<th width='100' height='50'>Numero de chambre</th>";
        echo "<th width='100' height='50'>Capacité</th>";
        echo "<th width='100' height='50'>Vue</th>";
        echo "<th width='100' height='50'>Superficie(m^2)</th>";
        echo "<th width='100' height='50'>Statut</th>";
        echo "<th width='100' height='50'>HotelId</th>";
        echo "<th width='100' height='50'>Prix($)</th>";
        echo "<th width='100' height='50'>Selectionner</th>";
        echo "</tr>";
        $index = 0;
        $resul=mysqli_query($connect,$sql);
        if(mysqli_num_rows($resul) > 0){
            while($colum = mysqli_fetch_assoc($resul)){
                echo "<tr align='center' style='background-color:gray;color:white'>";
                echo "<th width='100' height='50'>".$colum["numCh"]."</th>";
                echo "<th width='100' height='50'>".$colum["capacite"]."</th>";
                echo "<th width='100' height='50'>".$colum["vue"]."</th>";
                echo "<th width='100' height='50'>".$colum["superficie"]."</th>";
                echo "<th width='100' height='50'>Libre</th>";
                echo "<th width='100' height='50'>".$colum["idHotel"]."</th>";
                echo "<th width='100' height='50'>".$colum["prix"]."</th>";
                echo "<th width='100' height='50'> <button name=$chambreAv[$index] style='background-color:green;color:white;border-radius:15px'>Choisir la chambre</button> </th>";
                echo "</tr>";
                $index++;
            }
            echo "</table>";
        echo "</form>";
        mysqli_close($connect);
        
        }
        
    }
        catch(mysqli_sql_exception){
            echo "<h1 style='color:green;font-size:35px;margin-left:300px'>Error durant le chargement des pages</h1>";
        }    

    }
    elseif($_SESSION["rech"]=="true") {
        $datesA=array();
        $datesD=array();
        $iDH=array();
        $iDCh=array();
        $entr=null;
        $dep=null;
        echo "<h1 style='color:green;font-size:35px;margin-left:400px'>Les chambres  disponibles pour les informations rentrées</h1>";
        $chambID=array();
        $sql="SELECT chambre.numCh,  chambre.vue,chambre.capacite,chambre.superficie,
        chambre.prix,chambre.idHotel,hotel.categorie,chhotel.id
        FROM chambre
        JOIN  hotel ON chambre.idHotel = hotel.id
        JOIN chhotel ON hotel.idCh = chhotel.id 
        WHERE chambre.capacite='{$_SESSION["capaciteT"]}' AND 
        chambre.superficie>='{$_SESSION["superficieT"]}'AND 
        chhotel.id='{$_SESSION["chaineHT"]}' 
        AND hotel.categorie='{$_SESSION["categorieT"]}'
        AND chambre.prix<='{$_SESSION["prixMT"]}'AND 
        chambre.libre='vrai'";
        

         try{
            $result=mysqli_query($connect,$sql);
        if(mysqli_num_rows($result)>0){
           while($column=mysqli_fetch_assoc($result)){
            array_push($chambID,"{$column["numCh"]}_H_{$column["idHotel"]}");
           }
            
        }
        foreach($chambID as $ins){
            if(isset($_POST[$ins])){
                $tarT= getLoc($ins);
                $_SESSION["hotelId"]=$tarT[1];
                $_SESSION["IDChambres"]=$tarT[0];
                header("Location:Reservation.php");

            }
           }
           
           
           
           echo "<form action='TableCh.php' method='post' style='margin-left:240px;'>";
           echo "<table border='3' style='background-color:back'>";
           echo "<tr align='center' style='background-color:green;color:white'>";
           echo "<th width='100' height='50'>Numero de chambre</th>";
           echo "<th width='100' height='50'>Capacité</th>";
           echo "<th width='100' height='50'>Vue</th>";
           echo "<th width='100' height='50'>Superficie(m^2)</th>";
           echo "<th width='100' height='50'>Prix($)</th>";
           echo "<th width='100' height='50'>Hotel</th>";
           echo "<th width='100' height='50'>Categorie</th>";
           echo "<th width='100' height='50'>Chaine Hoteliere </th>";
           echo "<th width='100' height='50'>Selectionner </th>";
           echo "</tr>";
           $index = 0;
           $nbrCX=$_SESSION["nbrLignT"];
           $nbrIndex=0;
    $resul=mysqli_query($connect,$sql);
    if(mysqli_num_rows($resul) > 0){
        while($colum = mysqli_fetch_assoc($resul)){
            if($nbrIndex>=$nbrCX){break;}
            echo "<tr align='center' style='background-color:gray;color:white'>";
            echo "<th width='100' height='50'>".$colum["numCh"]."</th>";
            echo "<th width='100' height='50'>".$colum["capacite"]."</th>";
            echo "<th width='100' height='50'>".$colum["vue"]."</th>";
            echo "<th width='100' height='50'>".$colum["superficie"]."</th>";
            echo "<th width='100' height='50'>".$colum["prix"]."</th>";
            echo "<th width='100' height='50'>".$colum["idHotel"]."</th>";
            echo "<th width='100' height='50'>".$colum["categorie"]."</th>";
            echo "<th width='100' height='50'>".$colum["id"]."</th>";
            echo "<th width='100' height='50'> <button name=$chambID[$index] style='background-color:green;color:white;border-radius:15px'>Choisir la chambre</button> </th>";
            echo "</tr>";
            $index++;
            $nbrIndex++;
        }
        echo "</table>";
    echo "</form>";
    }
            
        
        

         }
         catch(mysqli_sql_exception){
            echo "<h1 style='color:green;font-size:35px;margin-left:300px'>Error durant le chargement des pages</h1>";
         }
}

       
            echo "<br> <hr>";
            echo "&copy;Page de recherche de chambre";  

echo "</body>"
       
?>




