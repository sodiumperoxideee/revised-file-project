<?php

<<<<<<< HEAD
    // session_start();
    // if (!isset($_SESSION['user']) || $_SESSION['user'] != 'employee'){
    //     header('location: login.php');
    // }
=======
    session_start();
    if (!isset($_SESSION['user']) || $_SESSION['user'] != 'staff'){
        header('location: login.php');
    }
>>>>>>> 7aa4575a5175f6c710b14c7eca9d99c73486843e
