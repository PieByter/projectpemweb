<?php
include "../koneksi.php";
session_start();
ob_start();
$temp = $_SESSION['username'];
$nama_user = mysqli_query($connection, "SELECT username FROM user WHERE username = '$temp'");
$d = mysqli_fetch_array($nama_user);
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Worker's Data | Pertamina</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Title Icons -->
    <link rel="icon" href="../assets/logo.png">
    <link href="../assets/logo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-inner-pages">
        <div class="container d-flex align-items-center justify-content-lg-between">

            <!-- <h1 class="logo me-auto me-lg-0"><a href="index.html">Gp<span>.</span></a></h1> -->
            <a href="#" class="logo me-auto me-lg-0"><img src="../assets/navbar_icon.png" alt="" class="img-fluid"></a>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="../index_logout.php">Home</a></li>
                    <li><a class="nav-link scrollto active" href="../index_logout.php#about">About</a></li>
                    <li><a class="nav-link scrollto active" href="../index_logout.php#services">Services</a></li>
                    <li><a class="nav-link scrollto active" href="../index_logout.php#portfolio">Portfolio</a></li>
                    <li><a class="nav-link scrollto active" href="../index_logout.php#team">Team</a></li>
                    <li><a class="nav-link scrollto active" href="../index_logout.php#contact">Contact</a></li>
                    <li class="dropdown"><a href="#" class="navbar active"><span>Else</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="../logout.php">Logout</a></li>
                            <li><a href="pekerja.php?username=<?php echo $d['username']; ?>">Worker's Data</a>
                            </li>
                            <li><a href="jabatan.php?username=<?php echo $d['username']; ?>">Position's
                                    Data</a>
                            </li>
                            <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li> -->
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            <a href="#" class="get-started-btn scrollto">Welcome, <?php echo $_SESSION['username']; ?> </a>

        </div>
    </header><!-- End Header -->

    <main id="main" class="">

        <div class="container mt-5">
            <div class="row text-center mb-2">
                <div class="col mt-3">
                    <div class="section-headline text-center">
                        <br>
                        <h2>Data Pekerja</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-evenly fs-5 text-center align-items-center">
                <div class="col-md-12">
                    <a href="pekerja_tambah.php" class="tombol">Tambah</a>

                    <table class="table table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Umur</th>
                                <th>Tanggal Lahir</th>
                                <th>Jabatan</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include "../koneksi.php";
                            $query = mysqli_query($connection, "SELECT * FROM pekerja LEFT JOIN jabatan ON pekerja.jabatan = jabatan.nama_jabatan ORDER BY pekerja.id_pekerja DESC");
                            $no = 0;
                            while ($data = mysqli_fetch_array($query)) {
                                $no++;
                            ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><img src="../images/<?php echo $data['foto']; ?>" width="100px" height="133px"></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['jenis_kelamin']; ?></td>
                                <td><?php echo $data['umur']; ?></td>
                                <td><?php echo $data['tanggal_lahir']; ?></td>
                                <td><?php echo $data['jabatan']; ?></td>
                                <td><?php echo $data['keterangan']; ?></td>
                                <td>
                                    <a class="tombol_edit"
                                        href="pekerja_edit.php?id=<?php echo $data['id_pekerja'];?>">Edit</a>
                                    <a class="tombol_hapus"
                                        href="pekerja_hapus.php?id=<?php echo $data['id_pekerja'];?>&foto=<?php echo $data['foto'];?>">Hapus</a>
                                </td>
                            </tr>
                            <?php 
                        } 
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-evenly text-center align-items-center py-5">
                <div class="row justify-content-center align-items-center">
                    <div class="edit-data">
                        <a href="../index_logout.php"><button class="back">Back To Homepage</button></a>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>PT Pertamina (Persero)<span>.</span></h3>
                            <p>
                                A108 Adam Street <br>
                                NY 535022, USA<br><br>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>2022 PT Pertamina (Persero)</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
                Designed by <a href="#">Pieter & Nova</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>

</body>

</html>