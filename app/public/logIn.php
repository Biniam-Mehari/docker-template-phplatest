<?php

$_userName = $_POST["username"];
$_password = $_POST["password"];

if ($_userName=="Biniam" && $_password=="Biniam123") {
    echo "Welcome Biniam\n";
}
elseif ($_userName=="Amrish" && $_password=="Amrish123") {
    echo "Welcome Amrish\n";
}
elseif ($_userName=="Musavir" && $_password=="Musavir123") {
    echo "Welcome Musavir\n";
}
else {
    echo"Account dont exist\n";
}

require_once("/app/db/dbconfig.php");
try {
    $connection = new PDO("mysql:host=$serverName;dbname=$databasename",$username,$password);
    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   
    echo"<br> connected successfully";
} catch (PDOException $e) {
    echo"<br>";
    echo"Connection failed: ".$e->getmessage();
}

$sql = "SELECT * FROM `posts`";

foreach($connection->query($sql) as $row){

    echo $row["id"]."<br>";

    echo $row["posted_at"]."<br>";

    echo $row["name"]."<br>";

    echo $row["email"]."<br>";

    echo $row["message"]."<br>";

}