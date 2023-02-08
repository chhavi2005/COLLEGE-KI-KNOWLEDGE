<?php
require '../config.php';
if (!empty($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
} else {
    header("Location: ../login.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>College ki Knowledge</title>
    <!-- CSS For Bootstrap -->
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <style>
        body {
            background-image: url('../img/main-backgound-img.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }

        * {
            margin: 0px;
            padding: 0px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand h2" href="../index.php">College ki Knowledge</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link " aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Aboutus.php">AboutUs</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Courses
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="../courses/bca.php">BCA</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="../courses/btec.php">B.tech</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="../courses/bba.php">BBA</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="../courses/bcom.php">B.Com</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="../courses/bsc.php">B.Sc</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Cities</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="../cities/bhopal.php">Bhopal</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="../cities/indore.php">Indore</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="../cities/ratlam.php">Ratlam</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="../cities/delhi.php">Delhi</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="../cities/mumbai.php">Mumbai</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../logout.php">LogOut |
                            <?php echo $row["name"]; ?>
                        </a>
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


        <div class="row container ">
            <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777"
                        dy=".3em">140x140</text>
                </svg>

                <h2>Heading</h2>
                <p>Some representative placeholder content for the three columns of text below the carousel. This is the
                    first column.</p>
                <p><a class="btn btn-secondary" href="#">View details »</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777"
                        dy=".3em">140x140</text>
                </svg>

                <h2>Heading</h2>
                <p>Some representative placeholder content for the three columns of text below the carousel. This is the
                    first column.</p>
                <p><a class="btn btn-secondary" href="#">View details »</a></p>
            </div><!-- /.col-lg-4 -->
            
            <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777"
                        dy=".3em">140x140</text>
                </svg>

                <h2>Heading</h2>
                <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second
                    column.</p>
                <p><a class="btn btn-secondary" href="#">View details »</a></p>
            </div><!-- /.col-lg-4 -->

        </div>

    </main>


    <footer class="text-center text-lg-start text-white" style="background-color: #1c2331">

        <!-- Copyright -->
        <div class="text-left p-3 text-center" style="background-color: rgba(73, 66, 66, 0.504)"> © 2022-23 Copyright :
            &emsp;&emsp;
            <a class="text-white" href="../index.php"><img src="../img/img-web-icon.png" alt="" height="20"
                    class="d-inline-block align-text-top active">College ki Knowledge</a>

        </div>
    </footer>
    <!-- JavaScript For Bootstrap -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../javascript.js"></script>
</body>

</html>