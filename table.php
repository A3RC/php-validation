<?php
     include"sql.php";


$sql2 = "CREATE TABLE IF NOT EXISTS cat1 (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30),
    email VARCHAR(30),
    password VARCHAR(30),
    gender VARCHAR(49),
    happy VARCHAR(40)
)";

if (!mysqli_query($conn, $sql2)) {
    echo "Error in creating table: " . mysqli_error($conn);
} 


echo"hello";



?>