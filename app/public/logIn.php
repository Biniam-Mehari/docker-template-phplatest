<?php

$_userName = $_POST["username"];
$_password = $_POST["password"];

if ($_userName=="Biniam" && $_password=="Biniam123") {
    echo "Welcome Biniam";
}
elseif ($_userName=="Amrish" && $_password=="Amrish123") {
    echo "Welcome Amrish";
}
elseif ($_userName=="Musavir" && $_password=="Musavir123") {
    echo "Welcome Musavir";
}
else {
    echo"Account dont exist";
}