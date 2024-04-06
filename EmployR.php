<?php
 include("Header.html");
 include("ConnectionToDatabase.php");
 session_start();
 echo "<body style='background-color:aliceblue'>";
 echo "<h1 style='color:green;font-size:35px;margin-left:500px'>Les reservations pour la chambre numero {$_SESSION["idCch"]}</h1>";
 $nasClient=array();
 $dClient=array();
 $lClient=array();
 function getLoc($key){
    $arr=explode("_",$key);
    return $arr[0];
 }
 
        $checkE="SELECT * FROM reservation WHERE numChambre='{$_SESSION["idCch"]}'";
        try{
            $resCl=mysqli_query($connect,$checkE);
             if(mysqli_num_rows($resCl)>0){
                while($column=mysqli_fetch_assoc($resCl)){
                    array_push($nasClient,"{$column["idRes"]}_a");
                    array_push($dClient,"{$column["idRes"]}_r");
                    array_push($lClient,"{$column["idRes"]}_q");
                 }
           }
           foreach($nasClient as $ta){
            if(isset($_POST[$ta])){
                $tar=getLoc($ta);
                $exist="SELECT * FROM client WHERE idRes='$tar'";
                try{
                $resu=mysqli_query($connect,$exist);
                if(mysqli_num_rows($resu) > 0){
                    echo "<h1 style='color:green;font-size:25px;margin-left:200px'>Le chambre est deja occupé</h1>";

                }
                else{
                    $_SESSION["type"]=2;
                    $check="SELECT * FROM reservation WHERE idRes='$tar'";
                $changeRes="UPDATE reservation set statut='occupé' WHERE idRes='$tar'";
                $changeCha="UPDATE Chambre set libre='faux' WHERE numCh={$_SESSION["idCF"]} AND idHotel='{$_SESSION["idHF"]}'";
                $inser="INSERT INTO client
                              (idRes,nas,nom,adresse) VALUES 
                              ('$tar','{$_SESSION["nasF"]}','{$_SESSION["nomF"]}','{$_SESSION["adresseF"]}')";
                              $res=mysqli_query($connect,$check);
                              if(mysqli_num_rows($res)>0){
                                $row=mysqli_fetch_assoc($res);
                                $_SESSION["idHF"] = $row["idHotel"];
                                 $_SESSION["idCF"]=$row["numChambre"];
                   $_SESSION["nasF"] = $row["nas"];
                   $_SESSION["nomF"]=$row["nomClient"];
                   $_SESSION["adresseF"] = $row["adresse"];
                              }
                    mysqli_query($connect,$changeRes);
                    mysqli_query($connect,$changeCha);
                    mysqli_query($connect,$inser);
                    mysqli_close($connect);
                    header("Location:Confirmation.php");
                    
                
                            }
        
            
        }
                catch(mysqli_sql_exception){
                    echo "<h1 style='color:green;font-size:25px;margin-left:200px'>Erreur durant l'ajout du client</h1>";
                }

                }
                    
                
            
           }
           foreach($dClient as $t){
            
            if(isset($_POST[$t])){
                $tar=getLoc($t);
                $exist="SELECT * FROM client WHERE idRes='$tar'";
                try{
                    $resu=mysqli_query($connect,$exist);
                    if(mysqli_num_rows($resu) > 0){
                        echo "<h1 style='color:green;font-size:25px;margin-left:200px'>Pour supprimer une reservation à chambre occupé il faut 
                        d'abord quitter la chambre </h1>";
    
                    }
                    else{
                        $_SESSION["type"]=3;
                    $check="SELECT * FROM reservation WHERE idRes='$tar'";
                    $changeCha="DELETE FROM reservation WHERE idRes = '$tar'";
                              $res=mysqli_query($connect,$check);
                              if(mysqli_num_rows($res)>0){
                                $row=mysqli_fetch_assoc($res);
                                $_SESSION["idHF"] = $row["idHotel"];
                                 $_SESSION["idCF"]=$row["numChambre"];
                   $_SESSION["nasF"] = $row["nas"];
                   $_SESSION["nomF"]=$row["nomClient"];
                   $_SESSION["adresseF"] = $row["adresse"];
                              }
                    mysqli_query($connect,$changeCha);
                    mysqli_close($connect);
                    header("Location:Confirmation.php");
                    }
                    
                }
                catch(mysqli_sql_exception){
                    echo "<h1 style='color:green;font-size:25px;margin-left:200px'>Erreur durant le refus de reservation</h1>";
                }
                
           }
        }
           foreach($lClient as $d){
           
            if(isset($_POST[$d])){
                $tar=getLoc($d);
                $exist="SELECT * FROM client WHERE idRes='$tar'";
                try{
                $resu=mysqli_query($connect,$exist);
                if(mysqli_num_rows($resu) > 0){
                    $_SESSION["type"]=4;
                    $check="SELECT * FROM reservation WHERE idRes='$tar'";
                $changeRes="UPDATE reservation set statut='libre' WHERE idRes='$tar'";
                $changeCha="UPDATE Chambre set libre='vrai' WHERE numCh={$_SESSION["idCF"]} AND idHotel='{$_SESSION["idHF"]}'";
                $del="DELETE FROM client WHERE idRes = '$tar'";
                              $res=mysqli_query($connect,$check);
                              if(mysqli_num_rows($res)>0){
                                $row=mysqli_fetch_assoc($res);
                                $_SESSION["idHF"] = $row["idHotel"];
                                 $_SESSION["idCF"]=$row["numChambre"];
                   $_SESSION["nasF"] = $row["nas"];
                   $_SESSION["nomF"]=$row["nomClient"];
                   $_SESSION["adresseF"] = $row["adresse"];
                              }
                              mysqli_query($connect,$changeRes);
                              mysqli_query($connect,$changeCha);
                              mysqli_query($connect,$del);
                              mysqli_close($connect);
                              header("Location:Confirmation.php");
                }
                else{
                    echo "<h1 style='color:green;font-size:25px;margin-left:200px'>Desolé pour quité la chambre doit etre occupé</h1>";
                }
                
            }
            catch(mysqli_sql_exception){
                echo "<h1 style='color:green;font-size:25px;margin-left:200px'>Erreur durant la sortie de la chambre</h1>";
            }
           }
        }
           
           echo "<form action='EmployR.php' method='post' style='margin-left:200px;'>";
           echo "<table border='3' style='background-color:back'>";
           echo "<tr align='center' style='background-color:green;color:white'>";
           echo "<th width='100' height='50'>NAS</th>";
           echo "<th width='100' height='50'>NOM DU CLIENT</th>";
           echo "<th width='100' height='50'>ADRESSE</th>";
           echo "<th width='100' height='50'>CHAINE HOTELIERE</th>";
           echo "<th width='100' height='50'>HOTEL</th>";
           echo "<th width='100' height='50'>NUMERO DE CHAMBRE</th>";
           echo "<th width='100' height='50'>STATUT</th>";
           echo "<th width='100' height='50'>MODE DE PAIEMENT</th>";
           echo "<th width='100' height='50'>DATE D'ENTREE</th>";
           echo "<th width='100' height='50'>DATE DE SORTIE</th>";
           echo "<th width='100' height='50'>ACCEPTATION RESERVATION</th>";
           echo "<th width='100' height='50'>REFUS RESERVATION</th>";
           echo "<th width='100' height='50'>SORTIE DE CHAMBRE</th>";
           echo "</tr>";
           $index = 0;
          
           $resul=mysqli_query($connect,$checkE);
           if(mysqli_num_rows($resul) > 0){
               while($colum = mysqli_fetch_assoc($resul)){
                   
                   echo "<tr align='center' style='background-color:gray;color:white'>";
                   echo "<th width='100' height='50'>".$colum["nas"]."</th>";
                   echo "<th width='100' height='50'>".$colum["nomClient"]."</th>";
                   echo "<th width='100' height='50'>".$colum["adresse"]."</th>";
                   echo "<th width='100' height='50'>".$colum["idCh"]."</th>";
                   echo "<th width='100' height='50'>".$colum["idHotel"]."</th>";
                   echo "<th width='100' height='50'>".$colum["numChambre"]."</th>";
                   echo "<th width='100' height='50'>".$colum["statut"]."</th>";
                   echo "<th width='100' height='50'>".$colum["paiement"]."</th>";
                   echo "<th width='100' height='50'>".$colum["dateD"]."</th>";
                   echo "<th width='100' height='50'>".$colum["dateF"]."</th>";
                   echo "<th width='100' height='50'> <button name=$nasClient[$index] style='background-color:green;color:white;border-radius:15px'>Accepter la reservation</button> </th>";
                   echo "<th width='100' height='50'> <button name=$dClient[$index] style='background-color:red;color:white;border-radius:15px'>Refuser la reservation</button> </th>";
                   echo "<th width='100' height='50'> <button name=$lClient[$index] style='background-color:blue;color:white;border-radius:15px'>Quitter la chambre</button> </th>";
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
        
    

 
 
 //echo "<br> <hr>";
//echo "&copy;Page d'affiche de reservation";
 echo "</body>";
?>