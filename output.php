<?php
	$link = mysqli_connect("localhost", "root", "root", "demo");
	if($link === false){
	    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	$sql = "SELECT * FROM cars";
	if($result = mysqli_query($link, $sql)){
	    if(mysqli_num_rows($result) > 0){
	        echo "<table>";
	            echo "<tr>";
	                echo "<th>Maker</th>";
	                echo "<th>Model</th>";
	                echo "<th>Year</th>";
                  echo "<th>Budget</th>";
	            echo "</tr>";
	        while($row = mysqli_fetch_array($result)){
	            echo "<tr>";
	                echo "<td>" . $row['Maker'] . "</td>";
	                echo "<td>" . $row['Model'] . "</td>";
	                echo "<td>" . $row['Year'] . "</td>";
                  echo "<td>" . $row['Budget'] . "</td>";
	            echo "</tr>";
	        }
	        echo "</table>";
	        mysqli_free_result($result);
	    } else{
	        echo "No records matching your query were found.";
	    }
	} else{
	    echo "ERROR: Not able to execute $sql. " . mysqli_error($link);
	}
	mysqli_close($link);
	?>