<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h2 class="mt-4">Sign Up</h2>
    <form action="../api/signupAPI.php" method="post">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>

      <div class="form-group">
        <label for="nrp">NRP:</label>
        <input type="text" class="form-control" id="nrp" name="nrp" required>
      </div>

      <div class="form-group">
        <label for="jurusan">Jurusan:</label>
        <input type="text" class="form-control" id="jurusan" name="jurusan" required>
      </div>

      <div class="form-group">
        <label for="fakultas">Fakultas:</label>
        <input type="text" class="form-control" id="fakultas" name="fakultas" required>
      </div>

      <div class="form-group">
        <label for="ipk">IPK:</label>
        <input type="text" class="form-control" id="ipk" name="ipk" required>
      </div>

      <div class="form-group">
        <label for="gender">Gender:</label>
        <select class="form-control" id="gender" name="gender" required>
          <option value="">Select Gender</option>
          <option value="laki-laki">Male</option>
          <option value="perempuan">Female</option>
        </select>
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>

      <button type="submit" class="btn btn-primary">Sign Up</button>
    </form>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>