<?php  
    require "connect.php";
    require "check.php";

    

    $ipk = $_POST["ipk"];
    $nrp = $_SESSION["nrpMahasiswa"];

    //Dicek dulu merupakan angka atau bukan kalau bukan $_GET['status'] bakal di set utk munculin bahwa yg dimasukan hrs angka
    if (!is_numeric($ipk)) {
        header('Location: ../dashboard/main.php?status=1');
    }
    //Dicek dulu lbh besar dri 4 atau tidak kalau tidak $_GET['status'] bakal di set utk munculin bahwa angka yg dimasukan terlalu besar
    else if ($ipk > 4) {
        header('Location: ../dashboard/main.php?status=2');
    }
    //Kalau berupa angka maka diquery untuk mengupdate valuenya di database
    else {
        $query = "UPDATE mahasiswa SET ipk = '$ipk' WHERE nrp = '$nrp'";

        if ($conn -> query($query) == true) {
            header('Location: ../dashboard/main.php?status=3');
        }
    }

?>