<?php
    require "../api/check.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title>Main Page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f4f4f4;
    }
    .container {
      max-width: 400px;
      margin: 0 auto;
      margin-top: 50px;
      padding: 40px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    /* .logout-button {
      position: absolute;
      top: 20px;
      right: 20px;
    } */
  </style>
    <script src="https://unpkg.com/sweetalert2@7.8.2/dist/sweetalert2.all.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head> 
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <form class="form-inline" action="../api/logoutAPI.php" method="post">
            <button class="btn btn-primary" type="submit">Logout</button>
          </form>
        </li>
      </ul>
    </div>
  </nav>

    <div class = "container">
    <form action="../api/getData.php" method ="post">
    <div class="form-group">
        <label for="username">NRP:</label> 
        <!-- Untuk memasukan nrp -->
        <input type="text" class="form-control" id="nrp" name="nrp" placeholder="Enter NRP" required>
    </div>

    <button type="submit" class="btn btn-primary btn-block">Cari</button>

    </form>
    </div>

    <?php
        //Ngecek sessionya udah diset atau belom di folder api file getData.php
        if (isset($_SESSION["nrpMahasiswa"])) {
            $nrpMahasiswa = $_SESSION["nrpMahasiswa"];
            //Diambil datanya dari database
            $query = "SELECT * FROM mahasiswa WHERE nrp = '$nrpMahasiswa'";
            $result = $conn -> query($query);
            if ($result ->num_rows > 0) {
                while ($row = $result -> fetch_assoc()) {
                    $nama = $row["nama"];
                    $nrp = $row["nrp"];
                    $jurusan = $row["jurusan"];
                    $fakultas = $row["fakultas"];
                    $gender = $row["jenis_kelamin"];
                    $ipk = $row["ipk"];

                    //Ditampilin hasil dari querynya

                    echo"<div class='container'>
                    <h2>Data mahasiswa</h2>
                    <h6>
                    Nama : $nama
                    </h6>
                    <h6>
                    NRP : $nrp
                    </h6>
                    <h6>
                    Jurusan : $jurusan
                    </h6>
                    <h6>
                    Fakultas : $fakultas
                    </h6>
                    <h6>
                    Gender : $gender
                    </h6>
                    <h6>
                    IPK : $ipk
                    </h6>
                    
                    <form action='../api/update_ipkAPI.php' method ='post'>
                    <div class='form-group'>
                        <label for='username'>Masukan IPK baru:</label> 
                        <!-- Untuk memasukan IPK -->
                        <input type='text' class='form-control' id='ipk' name='ipk' placeholder='Enter IPK' required>
                    </div>
                
                    <button type='submit' class='btn btn-primary btn-block'>Update</button>
                
                    </form>

                    </div>
                    ";
                    //Dibawah ini misal jika mau ganti value dari ipknya
                }
            }

        }
        
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script>

    <?php 
    if (isset($_GET["status"])) {
      //Munculin modal kalo misalnya salah nrp / password
      if ($_GET["status"] == 0) {
        echo 'swal("NRP tidak berhasil ditemukan","Tolong masukan lagi!","error")';
      }
      else if ($_GET["status"] == 1) {
        echo 'swal("NRP tidak berhasil ditemukan","Tolong masukan lagi!","error")';
      }
      else if ($_GET["status"] == 2) {
        echo 'swal("IPK tidak boleh lebih dari 4","Tolong masukan lagi!","error")';
      }
      else if ($_GET["status"] == 3) {
        echo 'swal("Berhasil diupdate","bisa dilihat lagi","success")';
      }
    }

    ?>

  </script>

</body>
</html>
