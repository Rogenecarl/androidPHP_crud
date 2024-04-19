<?php
require "conn.php";

if(isset($_POST['id'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM tbl_users WHERE user_id = '$id'";

    if(mysqli_query($connect, $sql)) {
        echo "Deleted";
    } else {
        echo "Failed to delete";
    }
} else {
    echo "ID is required";
}
?>
