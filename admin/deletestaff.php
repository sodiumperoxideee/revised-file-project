<?php
include 'connect.php';
if(isset($_GET['user_id'])){
    $del_id = $_GET['user_id'];
    $delete = mysqli_query($con,"DELETE FROM staff WHERE user_id = $del_id");
    echo "<script>alert('Delete Record');window.location.href='staff.php'</script>";
}
?>