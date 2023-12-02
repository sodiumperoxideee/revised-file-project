<?php
include 'connect.php';
if(isset($_GET['vetID'])){
    $del_id = $_GET['vetID'];
    $delete = mysqli_query($con,"DELETE FROM vets WHERE vetID = $del_id");
    echo "<script>alert('Delete Record');window.location.href='services.php'</script>";
}
?>