<?php
include 'connect.php';
if(isset($_GET['facilitiesID'])){
    $del_id = $_GET['facilitiesID'];
    $delete = mysqli_query($con,"DELETE FROM facilities WHERE facilitiesID = $del_id");
    echo "<script>alert('Delete Record');window.location.href='facilities.php'</script>";
}
?>