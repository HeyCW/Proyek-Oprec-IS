<?php  
    require "connect.php";

    print_r($_POST);

    $nama = $_POST["name"];
    $nrp = $_POST["nrp"];
    $jurusan = $_POST["jurusan"];
    $fakultas = $_POST["fakultas"];
    $kelamin = $_POST["gender"];
    $ipk = $_POST["ipk"];
    $password = $_POST["password"];

    // Diquery untuk memasukan data baru ke database
    $query = "INSERT INTO mahasiswa(nama, nrp, jurusan, fakultas, jenis_kelamin, ipk, password) VALUES('$nama', '$nrp', '$jurusan', '$fakultas', '$kelamin', '$ipk', '$password')";

    if ($conn -> query($query) === true) {
        header("Location: ../dashboard/main.php");
    }

?>