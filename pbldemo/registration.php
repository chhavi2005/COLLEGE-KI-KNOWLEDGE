<?php
require 'config.php';
if (!empty($_SESSION["id"])) {
  header("Location: index.php");
}
if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
  if (mysqli_num_rows($duplicate) > 0) {
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  } else {
    if ($password == $confirmpassword) {
      $query = "INSERT INTO tb_user VALUES('','$name','$username','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    } else {
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>



<!DOCTYPE html>
<html>

<head>
  <title>College ki Knowledge | LogIn</title>
  <!-- CSS For Bootstrap -->
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand h2" href="#">College ki Knowledge</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">AboutUs</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Courses
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdown-item" href="#">BCA</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">B.tech</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">BBA</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">B.Com</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">B.Sc</a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Cities</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdown-item" href="#">Bhopal</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Indore</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Ratlam</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Delhi</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Mumbai</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">LogIn</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <main>
    <h2>Registration</h2>
    <form class="" action="" method="post" autocomplete="off">
      <label for="name">Name : </label>
      <input type="text" name="name" id="name" required value=""> <br>
      <label for="username">Username : </label>
      <input type="text" name="username" id="username" required value=""> <br>
      <label for="email">Email : </label>
      <input type="email" name="email" id="email" required value=""> <br>
      <label for="password">Password : </label>
      <input type="password" name="password" id="password" required value=""> <br>
      <label for="confirmpassword">Confirm Password : </label>
      <input type="password" name="confirmpassword" id="confirmpassword" required value=""> <br>
      <button type="submit" name="submit">Register</button>
    </form>
  </main>

  <!-- JavaScript For Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <script src="javascript.js"></script>
</body>

</html>