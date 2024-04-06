<?php
include("Header.html");
echo "<body style='background-color:aliceblue'>";
session_start();
if($_SESSION["type"]==1){
    echo "<h1 style='color:green;font-size:25px;margin-left:500px'>Votre reservation a été efectué avec succés</h1>";
echo"<div style='display:flex;align-items:center'>";
echo "<h1 style='color:green;font-size:25px;margin-left:500px'>Nom:</h1>";
echo "<h1 style='color:black;font-size:25px;margin-left:500px'>{$_SESSION["nomCl"]}</h1>";
echo "</div>";
echo"<div style='display:flex;align-items:center'>";
echo "<h1 style='color:green;font-size:25px;margin-left:500px'>NAS:</h1>";
echo "<h1 style='color:black;font-size:25px;margin-left:500px'>{$_SESSION["nasCl"]}</h1>";
echo "</div>";
echo"<div style='display:flex;align-items:center'>";
echo "<h1 style='color:green;font-size:25px;margin-left:500px'>Adresse:</h1>";
echo "<h1 style='color:black;font-size:25px;margin-left:500px'>{$_SESSION["adresseCl"]}</h1>";
echo "</div>";
echo"<div style='display:flex;align-items:center'>";
echo "<h1 style='color:green;font-size:25px;margin-left:500px'>Chaine Hoteliere:</h1>";
echo "<h1 style='color:black;font-size:25px;margin-left:500px'>{$_SESSION["idChaineCl"]}</h1>";
echo "</div>";
echo"<div style='display:flex;align-items:center'>";
echo "<h1 style='color:green;font-size:25px;margin-left:500px'>Hotel:</h1>";
echo "<h1 style='color:black;font-size:25px;margin-left:500px'>L'hotel{$_SESSION["idHotelCl"]}</h1>";
echo "</div>";
echo"<div style='display:flex;align-items:center'>";
echo "<h1 style='color:green;font-size:25px;margin-left:500px'>Chambre numero:</h1>";
echo "<h1 style='color:black;font-size:25px;margin-left:500px'>{$_SESSION["idChambreCl"]}</h1>";
echo "</div>";
echo"<div style='display:flex;align-items:center'>";
echo "<h1 style='color:green;font-size:25px;margin-left:500px'>Statut:</h1>";
echo "<h1 style='color:black;font-size:25px;margin-left:500px'>{$_SESSION["statut"]}</h1>";
echo "</div>";
echo"<div style='display:flex;align-items:center'>";
echo "<h1 style='color:green;font-size:25px;margin-left:500px'>Date d'entrée:</h1>";
echo "<h1 style='color:black;font-size:25px;margin-left:500px'>{$_SESSION["dateDCl"]}</h1>";
echo "</div>";
echo"<div style='display:flex;align-items:center'>";
echo "<h1 style='color:green;font-size:25px;margin-left:500px'>Date de sortie:</h1>";
echo "<h1 style='color:black;font-size:25px;margin-left:500px'>{$_SESSION["dateFCl"]}</h1>";
echo "</div>";
echo"<div style='display:flex;align-items:center'>";
echo "<h1 style='color:green;font-size:25px;margin-left:500px'>Mode de payment:</h1>";
echo "<h1 style='color:black;font-size:25px;margin-left:500px'>{$_SESSION["paymentCl"]}</h1>";
echo "</div>";
}
elseif($_SESSION["type"]==2){
    echo "<h1 style='color:green;font-size:25px;margin-left:500px'>La reservation a été accepté  pour :</h1>";
     echo"<div style='display:flex;align-items:center'>";
echo "<h1 style='color:green;font-size:25px;margin-left:500px'>Nom:</h1>";
echo "<h1 style='color:black;font-size:25px;margin-left:500px'>{$_SESSION["nomF"]}</h1>";
echo "</div>";
echo"<div style='display:flex;align-items:center'>";
echo "<h1 style='color:green;font-size:25px;margin-left:500px'>NAS:</h1>";
echo "<h1 style='color:black;font-size:25px;margin-left:500px'>{$_SESSION["nasF"]}</h1>";
echo "</div>";
echo"<div style='display:flex;align-items:center'>";
echo "<h1 style='color:green;font-size:25px;margin-left:500px'>Adresse:</h1>";
echo "<h1 style='color:black;font-size:25px;margin-left:500px'>{$_SESSION["adresseF"]}</h1>";
echo "</div>";

echo"<div style='display:flex;align-items:center'>";
echo "<h1 style='color:green;font-size:25px;margin-left:500px'>Hotel:</h1>";
echo "<h1 style='color:black;font-size:25px;margin-left:500px'>L'hotel{$_SESSION["idHF"]}</h1>";
echo "</div>";

echo"<div style='display:flex;align-items:center'>";
echo "<h1 style='color:green;font-size:25px;margin-left:500px'>Chambre numero:</h1>";
echo "<h1 style='color:black;font-size:25px;margin-left:500px'>{$_SESSION["idCF"]}</h1>";
echo "</div>";

}
elseif($_SESSION["type"]==3){
    echo "<h1 style='color:green;font-size:25px;margin-left:500px'>La reservation a été refusé  pour :</h1>";
    echo"<div style='display:flex;align-items:center'>";
echo "<h1 style='color:green;font-size:25px;margin-left:500px'>Nom:</h1>";
echo "<h1 style='color:black;font-size:25px;margin-left:500px'>{$_SESSION["nomF"]}</h1>";
echo "</div>";
echo"<div style='display:flex;align-items:center'>";
echo "<h1 style='color:green;font-size:25px;margin-left:500px'>NAS:</h1>";
echo "<h1 style='color:black;font-size:25px;margin-left:500px'>{$_SESSION["nasF"]}</h1>";
echo "</div>";
echo"<div style='display:flex;align-items:center'>";
echo "<h1 style='color:green;font-size:25px;margin-left:500px'>Adresse:</h1>";
echo "<h1 style='color:black;font-size:25px;margin-left:500px'>{$_SESSION["adresseF"]}</h1>";
echo "</div>";

echo"<div style='display:flex;align-items:center'>";
echo "<h1 style='color:green;font-size:25px;margin-left:500px'>Hotel:</h1>";
echo "<h1 style='color:black;font-size:25px;margin-left:500px'>L'hotel{$_SESSION["idHF"]}</h1>";
echo "</div>";

echo"<div style='display:flex;align-items:center'>";
echo "<h1 style='color:green;font-size:25px;margin-left:500px'>Chambre numero:</h1>";
echo "<h1 style='color:black;font-size:25px;margin-left:500px'>{$_SESSION["idCF"]}</h1>";
echo "</div>";
}
elseif($_SESSION["type"]==4){
    echo "<h1 style='color:green;font-size:25px;margin-left:500px'>La chambre n'est plus occupée par :</h1>";
    echo"<div style='display:flex;align-items:center'>";
echo "<h1 style='color:green;font-size:25px;margin-left:500px'>Nom:</h1>";
echo "<h1 style='color:black;font-size:25px;margin-left:500px'>{$_SESSION["nomF"]}</h1>";
echo "</div>";
echo"<div style='display:flex;align-items:center'>";
echo "<h1 style='color:green;font-size:25px;margin-left:500px'>NAS:</h1>";
echo "<h1 style='color:black;font-size:25px;margin-left:500px'>{$_SESSION["nasF"]}</h1>";
echo "</div>";
echo"<div style='display:flex;align-items:center'>";
echo "<h1 style='color:green;font-size:25px;margin-left:500px'>Adresse:</h1>";
echo "<h1 style='color:black;font-size:25px;margin-left:500px'>{$_SESSION["adresseF"]}</h1>";
echo "</div>";

echo"<div style='display:flex;align-items:center'>";
echo "<h1 style='color:green;font-size:25px;margin-left:500px'>Hotel:</h1>";
echo "<h1 style='color:black;font-size:25px;margin-left:500px'>L'hotel{$_SESSION["idHF"]}</h1>";
echo "</div>";

echo"<div style='display:flex;align-items:center'>";
echo "<h1 style='color:green;font-size:25px;margin-left:500px'>Chambre numero:</h1>";
echo "<h1 style='color:black;font-size:25px;margin-left:500px'>{$_SESSION["idCF"]}</h1>";
echo "</div>";
}
echo "<br> <hr>";
echo "&copy;Page de Confirmation ";      
echo "</body>";
?>