<?php
$link = mysqli_connect("localhost", "root", "root", "demo");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "UPDATE cars SET  = Year '2009', Budget = '$20000.00' WHERE Model = 'Trabant'";
if(mysqli_query($link, $sql))
    echo "The Record was successfully updated.";
else
    echo "ERROR: Was not able to execute $sql. " . mysqli_error($link);
    
mysqli_close($link);
?>