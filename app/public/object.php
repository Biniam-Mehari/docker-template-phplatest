<?php

$myObj { name = "John";}
$myObj -> age = 30;
$myObj -> city ="Rotterdam";

$myJSON = json_encode($myObj);

echo $myJSON;