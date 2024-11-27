<?php

include "connect.php";



$sql1 = "CREATE DATABASE IF NOT EXISTS meow";


if (!mysqli_query($conn, $sql1)) {
    echo "Error in creating database: " . mysqli_error($conn);
}


mysqli_select_db($conn, "meow");




?>
