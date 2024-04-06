<?php
include("Header.html");
session_start();
echo "<body style='background-color:aliceblue'>";
echo "<h1 style='color:green;font-size:35px;margin-left:610px'>Veuillez choisir une zone</h1>";
echo "<form action='Hotel.php' method='post'>
      <button name='chaine'  style='color:white;font-size:25px;margin-left:600px;border-radius:25px;background-color:green'>
      choisir une chaine</button> 
      <button name='ville'   style='color:white;font-size:25px;margin-right:180px;border-radius:25px;background-color:green'>
      choisir une ville</button>
      </form>";
echo "<br>" ;     
if(isset($_POST["chaine"])){
     $_SESSION["zone"]="chaine";
     header("Location:SelectionZone.php");
}
if(isset($_POST["ville"])){
    $_SESSION["zone"]="ville";
     header("Location:SelectionZone.php");
}
echo "<br> <hr>";
echo "&copy;Page de selection de zone";      
echo "</body>" ;     
?>
