<?php
$_Name = $_POST["firstname"];

$_date = $_POST['Age'];
    
$currentDate = date("d-m-Y");


$_age = date_diff(date_create($_date), date_create($currentDate));

if(!$_Name=="" && !$_date==null)
{
    echo "Name: $_Name";
    echo "<br>";
    echo "Birthdate: $_date";
    echo "<br>";
    echo "Current age is ".$_age->format("%y");
}
else{
    echo"Fill the form correctly";
}



