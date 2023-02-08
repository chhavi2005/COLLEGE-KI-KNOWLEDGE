<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>College ki Knowledge</title>
        <!-- CSS For Bootstrap -->
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <style>
		body {
			background-image: url('img/backgroundimg.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: 100% 100%;
		}

		*{
			margin: 0px;
			padding: 0px;
		}
		
	</style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand h2" href="#">College ki Knowledge</a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div
                    class="collapse navbar-collapse"
                    id="navbarSupportedContent"
                >
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a
                                class="nav-link "
                                aria-current="page"
                                href="#"
                                >Home</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="assets/Aboutus.php">AboutUs</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="index.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Courses
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="courses/bca.php">BCA</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="courses/btec.php">B.tech</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="courses/bba.php">BBA</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="courses/bcom.php">B.Com</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="bsc.php">B.Sc</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="index.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Cities</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="cities/bhopal.php">Bhopal</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="cities/indore.php">Indore</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="cities/ratlam.php">Ratlam</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="cities/delhi.php">Delhi</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="cities/mumbai.php">Mumbai</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">LogOut | <?php echo $row["name"]; ?></a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <main>
            <p class="h1 text-center my-5">With College ki knowledge you'll have no more worries about your future !</p>


            <div class="container">
            <div class="wrapper">
                <div class="row justify-content-center ">


                    <div class="col-12 col-md-12 m-auto col-lg-6">
                        <div class="text-wrapper align-left">                           
                            <h1 class="mbr-section-title mbr-fonts-style pt-5 pb-3 mb-5 display-1"><strong style="color: white;">COLLEGE KI KNOWLEDGE</strong></h1>
                            <p class="mbr-text align-left pt-5 mt-5 mbr-fonts-style display-7">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis dolor eget
                                imperdiet velit.<br></p>
                                
                            <div class="align-left mbr-section-btn mt-3"><a class="btn btn-lg btn-primary display-4" href="cities/indore.php">Get Started</a></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6 image-wrapper">
                        <img class="w-100" src="img/sageuniversity.jpg" alt="Mobirise Website Builder">
                    </div>
                </div>
            </div>
        </div>
            


            <section data-bs-version="5.1" class=" my-5 features5 cid-t6WvWvzuZL" id="features05-2">


        <div class="container">
            <div class="mbr-section-head mb-5">
                <h4 class="mbr-section-title mbr-fonts-style align-left mb-3 display-2"><strong>Courses</strong></h4>

            </div>
            <div class="row justify-content-center ">
                <div class="сol-12 mb-4 col-md-6 col-lg-4">
                    <div class="item-wrapper">

                        <div class="item-content">
                            <div class="title-wrap">
                                <h5 class="item-title m-0 mbr-fonts-style display-5"><strong>Engineering</strong></h5>
                                <div class="d-flex">
                                    <span class="mbr-iconfont mobi-mbri-responsive mobi-mbri"></span>
                                    <h5 class="item-subtitle mbr-fonts-style display-7"><strong></strong></h5>
                                </div>
                            </div>

                            <p class="mbr-text align-left mbr-fonts-style mt-3 display-5">Lorem ipsum
                                dolor amet consectetur elit.</p>
                            <p class="mbr-link align-left mbr-fonts-style mt-4 display-7"><a href="#" class="text-black text-primary">Read More</a></p>

                        </div>
                        <div class="item-img mt-3">
                            <img src="img/engineering.jpg" alt="Mobirise Website Builder">
                        </div>
                    </div>
                </div>

                <div class="сol-12 mb-4 col-md-6 col-lg-4">
                    <div class="item-wrapper">

                        <div class="item-content">
                            <div class="title-wrap">
                                <h5 class="item-title m-0 mbr-fonts-style display-5"><strong>Commerce & Management</strong></h5>
                                <div class="d-flex">
                                    <span class="mbr-iconfont mobi-mbri-globe-2 mobi-mbri"></span>
                                    <h5 class="item-subtitle mbr-fonts-style display-7"><strong></strong></h5>
                                </div>
                            </div>

                            <p class="mbr-text align-left mbr-fonts-style mt-3 display-5">Lorem ipsum
                                dolor amet consectetur elit. </p>
                            <p class="mbr-link align-left mbr-fonts-style mt-4 display-7"><a href="#" class="text-black text-primary">Read More &gt;</a></p>

                        </div>
                        <div class="item-img mt-3">
                            <img src="img/commerce.jpg" alt="Mobirise Website Builder">
                        </div>
                    </div>
                </div>

                <div class="сol-12 mb-4 col-md-6 col-lg-4">
                    <div class="item-wrapper">

                        <div class="item-content">
                            <div class="title-wrap">
                                <h5 class="item-title m-0 mbr-fonts-style display-5"><strong>Medical</strong></h5>
                                <div class="d-flex">
                                    <span class="mbr-iconfont mobi-mbri-growing-chart mobi-mbri"></span>
                                    <h5 class="item-subtitle mbr-fonts-style display-7"><strong></strong></h5>
                                </div>
                            </div>

                            <p class="mbr-text align-left mbr-fonts-style mt-3 display-5">Lorem ipsum
                                dolor amet consectetur elit. </p>
                            <p class="mbr-link align-left mbr-fonts-style mt-4 display-7"><a href="#" class="text-black text-primary">Read More &gt;</a></p>

                        </div>
                        <div class="item-img mt-3">
                            <img src="img/medical.jpg" alt="Mobirise Website Builder">
                        </div>
                    </div>
                </div>
             </div>
        </div>
        
    </section>
    <section data-bs-version="5.1" class=" my-5 features5 cid-t6WvWvzuZL" id="features05-2">


        <div class="container">
            <div class="mbr-section-head mb-5">
                <h4 class="mbr-section-title mbr-fonts-style align-left mb-3 display-2"><strong>Cities?</strong></h4>

            </div>
            <div class="row justify-content-center ">
                <div class="сol-12 mb-4 col-md-6 col-lg-4">
                    <div class="item-wrapper">

                        <div class="item-content">
                            <div class="title-wrap">
                                <h5 class="item-title m-0 mbr-fonts-style display-5"><strong>Level 1</strong></h5>
                                <div class="d-flex">
                                    <span class="mbr-iconfont mobi-mbri-responsive mobi-mbri"></span>
                                    <h5 class="item-subtitle mbr-fonts-style display-7"><strong>4 weeks</strong></h5>
                                </div>
                            </div>

                            <p class="mbr-text align-left mbr-fonts-style mt-3 display-5">Lorem ipsum
                                dolor amet consectetur elit.&nbsp;</p>
                            <p class="mbr-link align-left mbr-fonts-style mt-4 display-7"><a href="#" class="text-black text-primary">Read More &gt;</a></p>

                        </div>
                        <div class="item-img mt-3">
                            <img src="img/iit-khg.jpg" alt="Mobirise Website Builder">
                        </div>
                    </div>
                </div>

                <div class="сol-12 mb-4 col-md-6 col-lg-4">
                    <div class="item-wrapper">

                        <div class="item-content">
                            <div class="title-wrap">
                                <h5 class="item-title m-0 mbr-fonts-style display-5"><strong>Level 2</strong></h5>
                                <div class="d-flex">
                                    <span class="mbr-iconfont mobi-mbri-globe-2 mobi-mbri"></span>
                                    <h5 class="item-subtitle mbr-fonts-style display-7"><strong>6 weeks</strong></h5>
                                </div>
                            </div>

                            <p class="mbr-text align-left mbr-fonts-style mt-3 display-5">Lorem ipsum
                                dolor amet consectetur elit. </p>
                            <p class="mbr-link align-left mbr-fonts-style mt-4 display-7"><a href="#" class="text-black text-primary">Read More &gt;</a></p>

                        </div>
                        <div class="item-img mt-3">
                            <img src="img/iit-khg.jpg" alt="Mobirise Website Builder">
                        </div>
                    </div>
                </div>

                <div class="сol-12 mb-4 col-md-6 col-lg-4">
                    <div class="item-wrapper">

                        <div class="item-content">
                            <div class="title-wrap">
                                <h5 class="item-title m-0 mbr-fonts-style display-5"><strong>Level 3</strong></h5>
                                <div class="d-flex">
                                    <span class="mbr-iconfont mobi-mbri-growing-chart mobi-mbri"></span>
                                    <h5 class="item-subtitle mbr-fonts-style display-7"><strong>8 weeks</strong></h5>
                                </div>
                            </div>

                            <p class="mbr-text align-left mbr-fonts-style mt-3 display-5">Lorem ipsum
                                dolor amet consectetur elit. </p>
                            <p class="mbr-link align-left mbr-fonts-style mt-4 display-7"><a href="#" class="text-black text-primary">Read More &gt;</a></p>

                        </div>
                        <div class="item-img mt-3">
                            <img src="img/iit-khg.jpg" alt="Mobirise Website Builder">
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>
        </main>


        <footer class="text-center text-lg-start text-white" style="background-color: #1c2331">

		<!-- Copyright -->
		<div class="text-left p-3 text-center" style="background-color: rgba(73, 66, 66, 0.504)"> © 2022-23 Copyright : &emsp;&emsp;
			<a class="text-white" href="index.php"><img src="img/img-web-icon.png" alt="" height="20" class="d-inline-block align-text-top active">College ki Knowledge</a>
			
		</div>
	</footer>
        <!-- JavaScript For Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <script src="javascript.js"></script>
    </body>
</html>
