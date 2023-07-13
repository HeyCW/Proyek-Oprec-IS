<?php  
    require "connect.php";
    require "check.php";


    session_start(); //untuk memastikan menggunakan session yang sama
    session_destroy(); //hancurkan sessiom
    header("location: ../dashboard/login.php"); //Diredirect ke login.php
?>    