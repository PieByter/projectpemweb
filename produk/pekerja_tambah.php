<?php  include "../koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Insert Worker's Data | Pertamina</title>
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
    <main id="main" class="main text-center py-5">
        <br><br>
        <h2 class="judul">Tambah Pekerja</h2>
        <form action="pekerja_insert.php" method="post" enctype="multipart/form-data">
            <div class="form-group pb-4">
                <label for="foto">Foto</label>
                <div class="input">
                    <input type="file" id="foto" name="foto">
                </div>
            </div>
            <div class="form-group col-md-6 pb-4 mx-auto">
                <label for="nama">Nama</label>
                <div class="input">
                    <input type="text" id="nama" name="nama">
                </div>
            </div>

            <div class="form-group  col-md-6 pb-4 mx-auto">
                <label for="jk">Jenis Kelamin</label>
                <input type="radio" id="jk" name="jk" value="Laki-laki">Laki-laki
                <input type="radio" id="jk" name="jk" value="Perempuan">Perempuan
            </div>

            <div class="form-group  col-md-6 pb-4 mx-auto">
                <label for="umur">Umur</label>
                <div class="input">
                    <input type="text" id="umur" name="umur">
                </div>
            </div>

            <div class="form-group d-flex justify-content-center">
                <label for="tanggal">Tanggal Lahir</label>
                <div class="input">
                    <input type="date" id="tanggal" name="tanggal">
                </div>

                <label for="jabatan" class="ms-5">Jabatan</label>
                <div class="input">
                    <select name="jabatan" id="jabatan">
                        <option>-- Pilih Jabatan --</option>
                        <?php
                $queryjabatan = mysqli_query($connection, "SELECT * FROM jabatan");
                while ($j = mysqli_fetch_array($queryjabatan)) {
                    echo "<option value='$j[nama_jabatan]'";
                    echo ">$j[nama_jabatan]</option>";
                }
                ?>
                    </select>
                </div>
            </div>

            <div class="form-group col-md-6 pb-4 mx-auto">
                <label for="keterangan">Keterangan</label>
                <div class="input">
                    <textarea style="width:100%;" name="keterangan" id="keterangan" rows="5"></textarea>
                </div>
            </div>
            <div class="form-group py-3">
                <input type="submit" value="Simpan" class="tombol_simpan">
                <input type="reset" value="Batal" class="tombol_reset">
                <a href="pekerja.php"><input type="button" value="Kembali" class="tombol_kembali"></a>
            </div>
        </form>
    </main>

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