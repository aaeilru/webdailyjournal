<?php
include "koneksi.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Daily Journal</title>
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
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#article">Article</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#gallery">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#schedule">Schedule</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#profile">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <!-- HERO -->
     <section class="text-center p-5 custom-background text-sm-start" id="hero">
        <div class="container">
            <div class="d-sm-flex flex-sm-row-reverse align-items-center ">
                <img class="img-fluid" width="400" src="asset/gambar13.jpeg">
                <div>
                    <h1 class="fw-bold display">HAI</h1>
                    <h4 class="lead display-8">
                    <p>
                        Selamat datang di buku catatan online milik <b>Aurelia Dwi Wijayanti</b>, seorang mahasiswa yang tengah meniti
                        <br>perjalanan akademik untuk meraih gelar Sarjana di program studi <b>Teknik Informatika</b> di Universitas Dian Nuswantoro, Semarang. 
                    </p>
                    <p>
                        Di sini, Aurelia berbagi catatan perjalanan kuliahnya, dari tugas-tugas menantang hingga pengalaman belajar yang berharga.
                    </p>
                    </h4>
                </div>
            </div>
        </div>
     </section>

    <!-- ARTICLE -->
    <section class="text-center p-5" id="article">
        <div class="container">
            <div>
                <h1 class="fw-bold display-4 pb-3">ARTICLE</h1>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
            <?php
            $sql = "SELECT * FROM article ORDER BY tanggal DESC";
            $hasil = $conn->query($sql); 

            while($row = $hasil->fetch_assoc()){
            ?>
              <div class="col">
                <div class="card h-100 shadow-lg card-custom card-animated">
                  <img src="asset/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
                  <div class="card-body">
                    <h5 class="card-title"><?= $row["judul"]?></h5>
                    <p class="card-text">
                      <?= $row["isi"]?>
                    </p>
                  </div>
                  <div class="card-footer">
                    <small class="text-body-secondary">
                      <?= $row["tanggal"]?>
                    </small>
                  </div>
                </div>
              </div>
              <?php
            }
            ?> 
                
                </div>
            </div>
        </div>
     </section>

     
    <!-- GALLERY -->
    <section class="text-center p-5 custom-background" id="gallery">
        <div class="container">
            <div>
                <h1 class="fw-bold display-4 pb-3">GALLERY</h1>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                <?php
                $sql = "SELECT * FROM gallery ORDER BY tanggal DESC";
                $hasil = $conn->query($sql);

                while ($row = $hasil->fetch_assoc()) {
                ?>
                  <div class="col">
                    <img src="asset/<?= $row["gambar"] ?>" class="img-fluid shadow-lg rounded w-75" alt="Gallery Image" />
                  </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>



     <!-- SCHEDULE -->
     <section class="text-center p-5" id="schedule">
      <div class="container">
          <div>
              <h1 class="fw-bold display-4 pb-3">SCHEDULE</h1>
          </div>
          <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
              <div class="col">
                <div class="card h-100 shadow-lg card-custom card-animated">
                  <div class="card-body">
                      <h5 class="card-title">Senin</h5>
                      <p class="card-text">
                        <b>10.20 - 12.00</b>
                        <br>
                        Basis Data
                        <br>
                        Ruang Lab D.3.J
                      </p>
                      <br>
                      <b>12.30 - 15.00</b>
                      <br>
                      Sistem Informasi
                      <br>
                      Ruang H.4.5
                  </div>
                  <div class="card-footer">
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 shadow-lg card-custom card-animated">
                  <div class="card-body">
                      <h5 class="card-title">Selasa</h5>
                      <p class="card-text">
                        <b>12.30 - 14.00</b>
                        <br>
                        Pemrograman Berbasis Web
                        <br>
                        Ruang Lab D.2.J
                      </p>
                      <br>
                      <b>14.10 - 15.50</b>
                      <br>
                      Pendidikan Kewarganegaraan
                      <br>
                      Ruang H.7
                  </div>
                  <div class="card-footer">
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 shadow-lg card-custom card-animated">
                  <div class="card-body">
                      <h5 class="card-title">Rabu</h5>
                      <p class="card-text">
                        <b>12.30 - 15.00</b>
                        <br>
                        Sistem Operasi
                        <br>
                        Ruang H.4.9
                      </p>
                      <br>
                      <b>15.30 - 18.00</b>
                      <br>
                      Logika Informatika
                      <br>
                      Ruang H.4.10
                  </div>
                  <div class="card-footer">
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 shadow-lg card-custom card-animated">
                  <div class="card-body">
                      <h5 class="card-title">Kamis</h5>
                      <p class="card-text">
                        <b>08.40 - 10.20</b>
                        <br>
                        Basis Data
                        <br>
                        Ruang H.4.6
                      </p>
                  </div>
                  <div class="card-footer">
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 shadow-lg card-custom card-animated">
                  <div class="card-body">
                      <h5 class="card-title">Jumat</h5>
                      <p class="card-text">
                        <b>12.30 - 15.00</b>
                        <br>
                        Rekayasa Perangkat Lunak
                        <br>
                        Ruang H.5.9
                      </p>
                      <br>
                      <b>15.30 - 18.00</b>
                      <br>
                      Probabilitas Statitistika
                      <br>
                      Ruang H.4.9
                  </div>
                  <div class="card-footer">
                  </div>
                </div>
              </div>
          </div>
      </div>
   </section>

<!-- PROFILE -->
<section id="profile" class="py-5">
  <div class="profile-container">
    <div class="profile-card">
        <div class="profile-image">
            <img src="asset/gambar15.jpg" alt="Aurelia Dwi W">
        </div>
        <div class="profile-info">
            <h1>Aurelia Dwi W</h1>
            <small>Mahasiswa Teknik Informatika</small>

            <table>
                <tbody>
                    <tr>
                        <th>NIM</th>
                        <th>:</th>
                        <td>A11.2023.15263</td>
                    </tr>
                    <tr>
                        <th>Program Studi</th>
                        <th>:</th>
                        <td>Teknik Informatika</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <th>:</th>
                        <td>111202315263@mhs.dinus.ac.id</td>
                    </tr>
                    <tr>
                        <th>Telepon</th>
                        <th>:</th>
                        <td>085156502510</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <th>:</th>
                        <td>Indraprasta No.44</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</section>

  <!-- FOOTER -->
  <footer class="text-center p-5">
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