<?php
session_start();

include "koneksi.php";  

//check jika belum ada user yang login arahkan ke halaman login
if (!isset($_SESSION['username'])) { 
	header("location:login.php"); 
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Journal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" href="img/logo.png" />
    <link rel="stylesheet" href="style.css">

  </head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <!-- NAVIGATION -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container">
          <a class="navbar-brand" href="#">DAILY JOURNAL</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse text-dark" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text dark">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="admin.php?page=home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin.php?page=article">Article</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin.php?page=gallery">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin.php?page=schedule">Schedule</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin.php?page=profile">Profile</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle  fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?= $_SESSION['username']?>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li> 
                </ul>
            </li> 
            </ul>
          </div>
        </div>
      </nav>

      <!-- nav end -->
    <!-- content begin -->
    <!-- content begin -->
<section id="content" class="p-5">
    <div class="container">
        <?php
        if(isset($_GET['page'])){
        ?>
            <h4 class="lead display-6 pb-2 border-bottom border-danger-success"><?= ucfirst($_GET['page'])?></h4>
            <?php
            include($_GET['page'].".php");
        }else{
        ?>
            <h4 class="lead display-6 pb-2 border-bottom border-danger-subtle">Home</h4>
            <?php
            include("home.php");
        }
        ?>
    </div>
</section>
<!-- content end -->
    <!-- content end -->
    <!-- footer begin -->

<!-- FOOTER -->
  <footer class="text-center p-5 footer">
    <div>
        <div>
            <a href="https://www.twitter.com/cheewexx" target="_blank">
                <i class="bi bi-twitter-x h2 p-2 text-dark"></i>
            </a>

            <a href="https://www.instagram.com/aaeilru" target="_blank">
                <i class="bi bi-instagram h2 p-2 text-dark"></i>
            </a>
        
            <a href="https://youtube.com/@aureliadwi?si=0VnUfXwYgt6x3LuO" target="_blank">
                <i class="bi bi-youtube h2 p-2 text-dark"></i>
            </a>
    </div>
    <div>
        &copy; All Rights Reserved By Aurelia DW 2024
    </div>
  </footer>
</body>
</html> 