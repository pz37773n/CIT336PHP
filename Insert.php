<?php
$link = mysqli_connect("localhost", "root", "root", "demo");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$Maker = mysqli_real_escape_string($link, $_GET['Maker']);
$Model = mysqli_real_escape_string($link, $_GET['Model']);
$Year = mysqli_real_escape_string($link, $_GET['Year']);
$Budget = mysqli_real_escape_string($link, $_GET['Budget']);
$sql = "INSERT INTO cars (Maker, Model, Year, Budget) VALUES ('$Maker', '$Model', '$Year', '$Budget')";


if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
mysqli_close($link);
?>