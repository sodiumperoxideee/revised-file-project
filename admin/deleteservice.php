<?php
include 'connect.php';
if(isset($_GET['service_id'])){
    $del_id = $_GET['service_id'];
    $delete = mysqli_query($con,"DELETE FROM services WHERE service_id = $del_id");
    echo "<script>alert('Delete Record');window.location.href='services.php'</script>";
}
?>