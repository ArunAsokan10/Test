<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM persons";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>NAME</th>";
                echo "<th>QTR</th>";
                echo "<th>MOBILE</th>";
                echo "<th>POTATO</th>";
                echo "<th>ONION</th>";
                echo "<th>TOMATO</th>";
                echo "<th>CARROT</th>";
                echo "<th>CAULI</th>";
                echo "<th>CABBAGE</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['qtr'] . "</td>";
                echo "<td>" . $row['mobile'] . "</td>";
                echo "<td>" . $row['potato'] . "</td>";
                echo "<td>" . $row['onion'] . "</td>";
                echo "<td>" . $row['tomato'] . "</td>";
                echo "<td>" . $row['carrot'] . "</td>";
                echo "<td>" . $row['cauli'] . "</td>";
                echo "<td>" . $row['cabbage'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>