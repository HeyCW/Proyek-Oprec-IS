<?php  
    require "connect.php";
    require "check.php";

    print_r($_POST);
    $nrp = strtolower($_POST["nrp"]);
    $password = $_POST["password"];
    $sama = false;

    //Buat diperikasa dari database sama gak ama yang dimasukin lewat textfield
    $query = "SELECT * FROM mahasiswa";
    $result = $conn -> query($query);
    if ($result ->num_rows > 0) {
        while ($row = $result -> fetch_assoc()) {
            $nrpDB = $row["nrp"];
            $passwordDB = $row["password"];

            if ($nrp === $nrpDB && $password === $passwordDB) {
                $sama = true;
            }

        }
    }

    //Kalo sama dipindah ke main
    if ($sama) {
        $_SESSION["nrp"] = $nrp;
        header('Location: ../dashboard/main.php');
    }
    //Kalo beda dipindah ke login dengan $_GET["status"] = 0 agar dapat ngeluarin modal
    else{
        header("Location: ../dashboard/login.php?status=0");
    }
    

?>