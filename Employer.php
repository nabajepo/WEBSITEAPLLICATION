<?php
 include("Header.html");
 session_start();
 echo "<body style='background-color:aliceblue'>";
 echo "<h1 style='color:green;font-size:35px;margin-left:500px'>Recherche pour reservation</h1>";
 echo "<h3 style='color:black;font-size:25px;margin-left:500px'>Inserer le numero de la chambre</h3>";
 echo "<form action='Employer.php' method='post'  style='margin-left:500px;'>
 <input type='text' name='idReservation' placeholder='Numero_Chambre' style='font-size:15px;border-radius:15px;padding:20px;'>
 <button name='search'  style='color:white;font-size:25px;border-radius:25px;background-color:green'>
 Recherche les reservations</button>
 </form>";
 echo "<br>";
 $nasClient=array();
 $dClient=array();
 $lClient=array();
 if(isset($_POST["search"])){
    $nId=filter_input(INPUT_POST,"idReservation",FILTER_VALIDATE_INT);
    if(empty($nId)){
        echo "<h1 style='color:green;font-size:25px;margin-left:500px'>Veuillez entre un id valide</h1>";
    }
    else{
        $_SESSION["idCch"]=$nId;
        header("Location:EmployR.php");
    }}
 echo "<br> <hr>";
echo "&copy;Page de l'employer";
 echo "</body>";
?>