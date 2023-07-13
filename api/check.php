<?php 
    require "connect.php";

    // Ini buat kalo misalnya belom login maka gak bisa masuk
    if (!isset($_SESSION["nrp"])) {
        header("Location: ../dashboard/login.php");
    }

?>