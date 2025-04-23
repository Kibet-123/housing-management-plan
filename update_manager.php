<?php
require 'includes/config.inc.php';

$new_username = "your_new_username";
$new_password = password_hash("your_new_password", PASSWORD_DEFAULT);
$manager_id = $_SESSION['hostel_man_id'];

$sql = "UPDATE Hostel_Manager 
        SET Username = '$new_username', 
            Pwd = '$new_password'
        WHERE Hostel_man_id = '$manager_id'";

if(mysqli_query($conn, $sql)) {
    header("Location: profile.php?update=success");
} else {
    header("Location: profile.php?update=failed");
}
?>
