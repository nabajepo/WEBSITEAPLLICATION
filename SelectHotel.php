<?php
session_start();
include("Header.html");
echo "<body style='background-color:aliceblue'>";
if($_SESSION["zone"]=="chaine1"){
    $hotels=array(1,2,3,4,5,6,7,8);
    echo "<h1 style='color:green;font-size:35px;margin-left:500px'>Veuillez choisir une hotel</h1>";
    echo "<form action='SelectHotel.php' method='post' display='inline-block' style='margin-left:300px;'>
    <button name=1  style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 1</button> 
    <button name=2   style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 2</button>
    <button name=3   style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 3</button>
    <button name=4   style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 4</button>
    <button name=5   style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 5</button>
    <button name=6   style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 6</button>
    <button name=7  style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 7</button>
    <button name=8   style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 8</button>
    </form>";
    foreach($hotels as $h){
        if(isset($_POST[$h])){
            $_SESSION["ID"]=$h;
            $_SESSION["rech"]="false";
            header("Location:TableCh.php");
        }
    }
    echo "<br>" ;
}
elseif($_SESSION["zone"]=="chaine2"){
    $hotels=array(9,10,11,12,13,14,15,16);
    echo "<h1 style='color:green;font-size:35px;margin-left:500px'>Veuillez choisir une hotel</h1>";
    echo "<form action='SelectHotel.php' method='post' display='inline-block' style='margin-left:300px;'>
    <button name=9  style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 9</button> 
    <button name=10   style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 10</button>
    <button name=11   style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 11</button>
    <button name=12   style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 12</button>
    <button name=13   style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 13</button>
    <button name=14   style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 14</button>
    <button name=15   style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 15</button>
    <button name=16   style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 16</button>
    </form>";
    foreach($hotels as $h){
        if(isset($_POST[$h])){
            
            $_SESSION["ID"]=$h;
            $_SESSION["rech"]="false";
            header("Location:TableCh.php");
        }
    }
    echo "<br>" ;
}
elseif($_SESSION["zone"]=="chaine3"){
    $hotels=array(17,18,19,20,21,22,23,24);
    echo "<h1 style='color:green;font-size:35px;margin-left:500px'>Veuillez choisir une hotel</h1>";
    echo "<form action='SelectHotel.php' method='post' display='inline-block' style='margin-left:300px;'>
    <button name=17  style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 17</button> 
    <button name=18   style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 18</button>
    <button name=19   style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 19</button>
    <button name=20   style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 20</button>
    <button name=21   style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 21</button>
    <button name=22   style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 22</button>
    <button name=23   style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 23</button>
    <button name=24   style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 24</button>
    </form>";
    foreach($hotels as $h){
        if(isset($_POST[$h])){
            $_SESSION["ID"]=$h;
            $_SESSION["rech"]="false";
            header("Location:TableCh.php");
        }
    }
    echo "<br>" ;
}
elseif($_SESSION["zone"]=="chaine4"){
    $hotels=array(25,26,27,28,29,30,31,32);
    echo "<h1 style='color:green;font-size:35px;margin-left:500px'>Veuillez choisir une hotel</h1>";
    echo "<form action='SelectHotel.php' method='post' display='inline-block' style='margin-left:300px;'>
    <button name=25  style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 25</button> 
    <button name=26   style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 26</button>
    <button name=27   style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 27</button>
    <button name=28   style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 28</button>
    <button name=29   style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 29</button>
    <button name=30   style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 30</button>
    <button name=31  style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 31</button>
    <button name=32   style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 32</button>
    </form>";
    foreach($hotels as $h){
        if(isset($_POST[$h])){
            $_SESSION["ID"]=$h;
            $_SESSION["rech"]="false";
            header("Location:TableCh.php");
        }
    }
    echo "<br>" ;
}
elseif($_SESSION["zone"]=="chaine5"){
    $hotels=array(33,34,35,36,37,38,39,40);
    echo "<h1 style='color:green;font-size:35px;margin-left:500px'>Veuillez choisir une hotel</h1>";
    echo "<form action='SelectHotel.php' method='post' display='inline-block' style='margin-left:300px;'>
    <button name=33  style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 33</button> 
    <button name=34   style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 34</button>
    <button name=35   style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 35</button>
    <button name=36   style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 36</button>
    <button name=37   style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 37</button>
    <button name=38   style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 38</button>
    <button name=39   style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 39</button>
    <button name=40   style='color:white;font-size:25px;border-radius:25px;background-color:gray'>
    Hotel 40</button>
    </form>";
    foreach($hotels as $h){
        if(isset($_POST[$h])){
            $_SESSION["ID"]=$h;
            $_SESSION["rech"]="false";
            header("Location:TableCh.php");
        }
    }
    echo "<br>" ;
}

echo "<br> <hr>";
echo "&copy;Page de selection d'hotel";      
echo "</body>";
?>