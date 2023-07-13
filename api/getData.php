<?php  
    require "connect.php";
    require "check.php";

    print_r($_POST);
    $nrpMahasiswa = strtolower($_POST["nrp"]);
    $sama = false;

    //Ini buat dicek di database apakah ada nrp yang mau diambil di database
    $query = "SELECT * FROM mahasiswa WHERE nrp = '$nrpMahasiswa'";
    $result = $conn -> query($query);
    if ($result ->num_rows > 0) {
        while ($row = $result -> fetch_assoc()) {
            $nrpDB = $row["nrp"];
            if ($nrpMahasiswa === $nrpDB) {
                $sama = true;
            }
        }
    }

    //Jika ada maka kita set session agar bisa digunakan di main.php
    if ($sama) {
        $_SESSION["nrpMahasiswa"] = $nrpMahasiswa;
        header('Location: ../dashboard/main.php');
    }
    //Kalo tidak ada set $_GET['status'] biar bisa munculin modal bahwa nrp tidak bisa ditemukan
    else{
        $_SESSION["nrpMahasiswa"] = "";
        header('Location: ../dashboard/main.php?status=0');
    }

    

?>    