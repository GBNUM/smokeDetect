<?php
$host = "b3qs3zkzvbl50kussb7f-mysql.services.clever-cloud.com";      // Hostname (or IP address)
$db_user = "u4gvktevx1b47iag";        // Database username
$db_password = "ciNmSHaVYMBZdHLz1rUF";        // Database password
$db_name = "b3qs3zkzvbl50kussb7f" ;  // Database name

// Create a connection
$conn = mysqli_connect($host, $db_user, $db_password, $db_name);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



?>