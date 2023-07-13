<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f4f4f4;
    }
    .container {
      max-width: 400px;
      margin: 0 auto;
      margin-top: 100px;
      padding: 40px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
  </style>
    <script src="https://unpkg.com/sweetalert2@7.8.2/dist/sweetalert2.all.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
  <div class="container">
    <h2 class="text-center">Login</h2>
    <form action="../api/loginAPI.php" method="post">
      <div class="form-group">
        <label for="username">NRP:</label> 
        <!-- Untuk memasukan nrp -->
        <input type="text" class="form-control" id="nrp" name="nrp" placeholder="Enter NRP" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <!-- Untuk memasukan password -->
        <input type="password" class="form-control" id="password" name = "password" placeholder="Enter password" required>
      </div>
      <button type="submit" class="btn btn-primary btn-block">Login</button>
    </form>
    <p class="text-center">Not registered? <a href="signup.php">Create an account</a></p>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <script>

    <?php 

    if (isset($_GET["status"])) {
      //Munculin modal kalo misalnya salah nrp / password
      if ($_GET["status"] == 0) {
        echo 'swal("NRP/Password yang dimasukan salah","Tolong masukan lagi!","error")';
      }
    }

    ?>

  </script>
</body>
</html>
