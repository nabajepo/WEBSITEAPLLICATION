<?php
$serveur="localhost";
$user="root";
$pass="";
$name="projet_2532";
try{
    $connect=mysqli_connect($serveur,$user,$pass,$name);
}
catch(mysqli_sql_exception){
    echo "<h1 style='color:green;margin-left:600px'>Erreur de connection !</h1>";
}
?>