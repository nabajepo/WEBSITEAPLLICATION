<?php
include("Header.html");
include("ConnectionToDatabase.php");
echo "<body style='background-color:aliceblue'>";
session_start();


    $hotels=array();
    $ville=$_SESSION["ville"];
    echo "<h1 style='color:green;font-size:35px;margin-left:400px'>Les hotels pour la ville {$_SESSION["ville"]}</h1>";
    $sql="SELECT * FROM hotel WHERE ville='$ville'";

    try{
        $result=mysqli_query($connect,$sql);
        if(mysqli_num_rows($result)>0){
           while($column=mysqli_fetch_assoc($result)){
              array_push($hotels,$column["id"]);
           }
          
        }
        foreach($hotels as $ta){
            if(isset($_POST[$ta])){
                $_SESSION["ID"]=$ta;
                $_SESSION["rech"]="false";
                header("Location:TableCh.php");
            }
           }
        
        echo "<form action='Table.php' method='post' style='margin-left:100px;'>";
        echo "<table border='3' style='background-color:back'>";
        echo "<tr align='center' style='background-color:green;color:white'>";
        echo "<th width='100' height='50'>ID</th>";
        echo "<th width='100' height='50'>EMAIL</th>";
        echo "<th width='100' height='50'>CATEGORIE</th>";
        echo "<th width='100' height='50'>NOMBRE DE CHAMBRE</th>";
        echo "<th width='100' height='50'>NUMERO DE TELEPHONE</th>";
        echo "<th width='100' height='50'>ADRESSE</th>";
        echo "<th width='100' height='50'>VILLE</th>";
        echo "<th width='100' height='50'>CHAINE HOTELIERE</th>";
        echo "<th width='100' height='50'>NOM D'HOTEL</th>";
        echo "<th width='100' height='50'>SELECTIONNER</th>";
        echo "</tr>";
        $index = 0;
        $resul=mysqli_query($connect,$sql);
        if(mysqli_num_rows($resul) > 0){
            while($colum = mysqli_fetch_assoc($resul)){
                echo "<tr align='center' style='background-color:gray;color:white'>";
                echo "<th width='100' height='50'>".$colum["id"]."</th>";
                echo "<th width='100' height='50'>".$colum["email"]."</th>";
                echo "<th width='100' height='50'>".$colum["categorie"]."</th>";
                echo "<th width='100' height='50'>".$colum["nbreCh"]."</th>";
                echo "<th width='100' height='50'>".$colum["numTel"]."</th>";
                echo "<th width='100' height='50'>".$colum["adresse"]."</th>";
                echo "<th width='100' height='50'>".$colum["ville"]."</th>";
                echo "<th width='100' height='50'>".$colum["idCh"]."</th>";
                echo "<th width='100' height='50'>".$colum["nom"]."</th>";
                echo "<th width='100' height='50'> <button name=$hotels[$index] style='background-color:green;color:white;border-radius:15px'>Choisir l'hotel</button> </th>";
                echo "</tr>";
                $index++;
            }
            echo "</table>";
        echo "</form>";
        }
        
        
    }
        catch(mysqli_sql_exception){
            echo "<h1 style='color:green;font-size:35px;margin-left:300px'>Error durant le chargement des pages</h1>";
        }   
        
        
            echo "<br> <hr>";
        echo "&copy;Page de recherche d'hotels";  

echo "</body>";
 
?>