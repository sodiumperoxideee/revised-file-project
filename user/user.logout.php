<?php

session_start();
session_destroy();
echo "<script>alert('Logging out');window.location.href='login.php'</script>";