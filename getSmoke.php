<?php
include "db.php";
//$smokeID = $_REQUEST['smokeID'];
$userID = $_REQUEST['userID'];
//      http://localhost/act1rev/getSmoke.php?smokeID=%221111%22

$sql = "SELECT Density FROM smokeDevices WHERE smokeID='" . $userID . "'";
$result = mysqli_query($conn, $sql);
 
$data = array();

// Check if there are any results
if (mysqli_num_rows($result) > 0) {
    // Fetch all rows and push into the $data array
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    // Send the result as a JSON response
    echo json_encode($data);
} else {
    // Return an empty JSON array if no results found
    echo json_encode([]);
}

?>


