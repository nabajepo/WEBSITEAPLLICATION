<?php
session_start();
include("Header.html");
echo "<body style='background-color:aliceblue'>";
if($_SESSION["zone"]=="chaine"){
    echo "<h1 style='color:green;font-size:35px;margin-left:550px'>Veuillez choisir une chaine</h1>";
    $chaine=array("chaine1","chaine2","chaine3","chaine4","chaine5");
echo "<form action='SelectionZone.php' method='post' display='inline-block' style='margin-left:260px;'>
<button type='submit' name='chaine1' value='1' style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
Chaine Hotelière 1</button> 
<button name='chaine2' value='2' style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
Chaine Hotelière 2</button>
<button name='chaine3' value='3' style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
Chaine Hotelière 3</button>
<button name='chaine4' value='4' style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
Chaine Hotelière 4</button>
<button name='chaine5' value='5' style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
Chaine Hotelière 5</button>
</form>";
foreach($chaine as $ch){
    if(isset($_POST[$ch])){
        $_SESSION["zone"]=$ch;
        header("Location:SelectHotel.php");
    }
}
echo "<br>" ;
}
elseif($_SESSION["zone"]=="ville"){
    $ville=array("ottawa","toronto","montreal","vancouver");
    echo "<h1 style='color:green;font-size:35px;margin-left:680px'>Veuillez choisir une ville</h1>";
    echo "<form action='SelectionZone.php' method='post' display='inline-block' style='margin-left:630px;'>
    <button name='ottawa'  style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Ottawa</button> 
    <button name='toronto'   style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Toronto</button>
    <button name='montreal'   style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Montreal</button>
    <button name='vancouver'   style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Vancouver</button>
    </form>";
    foreach($ville as $v){
        if(isset($_POST[$v])){
            $_SESSION["ville"]=$v;
            header("Location:Table.php");
        }
    }
    echo "<br>" ;
}

echo "<br> <hr>";
echo "&copy;Page de selection de {$_SESSION["zone"]}";      
echo "</body>";
?>