<?php
include "admin.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM `schedule1` WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        header("Location: schedulea.php?msg=Record deleted successfully");
        exit;
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
} else {
    echo "Failed: ID not found";
}
?>
