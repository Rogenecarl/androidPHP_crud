<?php
$data = array();
require "conn.php";


if(!empty($_POST['id'])) {
    $id = $_POST['id'];

    $sql = "SELECT * FROM tbl_users WHERE user_id = ".$id;
    $result = mysqli_query($connect, $sql);

    if(mysqli_num_rows($result) != 0) {
        $i = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $data[$i] = $row;
            $i++;
        }
        echo json_encode($data, JSON_PRETTY_PRINT);
    } else {
        echo "No data found for the provided ID";
    }
} else {
    echo "ID is required";
}
?>
