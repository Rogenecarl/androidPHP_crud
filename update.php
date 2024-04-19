<?php
require "conn.php";

if(isset($_POST['id']) && isset($_POST['uname']) && isset($_POST['pword']) && isset($_POST['email'])) {
    
    $id = $_POST['id'];
    $uname = $_POST['uname'];
    $pword = $_POST['pword'];
    $email = $_POST['email'];

    $sql = "UPDATE tbl_users SET user_name = '$uname', user_pword = '$pword', user_email = '$email' WHERE user_id = '$id'";

    if(mysqli_query($connect, $sql)) {
        echo "Updated";
    } else {
        echo "Failed";
    }
} else {
    echo "Fields Required";
}
?>
