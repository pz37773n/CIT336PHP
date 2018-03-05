<?php
$link = mysqli_connect("localhost", "root", "root", "demo");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "INSERT INTO cars (Maker, Model, Year, Budget) VALUES ('HQM Sachsenring GmbH', 'Trabant', '2009', '$2000.00')";
if(mysqli_query($link, $sql))
    echo "Records added successfully.";
 else
    echo "ERROR: Was not able to execute $sql. " . mysqli_error($link);
mysqli_close($link);
?>