<?php

$con = mysqli_connect('localhost','root','','vetclinic');


// Check connection
if (!$con) {
    die(mysqli_error("Error"+$con));
}
  
?>