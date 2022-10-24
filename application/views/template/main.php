<!DOCTYPE html>
<html lang="id">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="theme-color" content="#1E74FD" />
    <title>BERITA ONLINE MALANG | MALANGTIMES.COM</title>
    <meta name="description" content="MALANGTIMES" />
    <meta name="keywords" content="malang, berita, berita malang" />

    <link rel="icon" type="image/png" href="<?= base_url() ?>/assets/img/favicon.png" sizes="32x32" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>/assets/img/icon/192x192.png" />
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/jtn.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css" />
    <link rel="manifest" href="__manifest.json" />
</head>

<body>
    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader bg-secondary text-light">
        <div class="left">
            <a href="#" class="headerButton" data-toggle="modal" data-target="#sidebarPanel">
                <ion-icon name="menu-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            <a href="<?= base_url() ?>"><img src="https://cdnstatic.jatimtimes.com/logo/new/jatim.png" alt="Jatim Times Network Logo" class="image" height="50px" /></a>
        </div>
        <div class="right">
            <a href="javascript:;" class="headerButton toggle-searchbox">
                <ion-icon name="search-outline"></ion-icon>
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- Search Component -->
    <div id="search" class="appHeader">
        <form class="search-form">
            <div class="form-group searchbox">
                <input type="text" class="form-control" placeholder="Search..." />
                <i class="input-icon">
                    <ion-icon name="search-outline"></ion-icon>
                </i>
                <a href="javascript:;" class="ml-1 close toggle-searchbox">
                    <ion-icon name="close-circle"></ion-icon>
                </a>
            </div>
        </form>
    </div>
    <!-- * Search Component -->

    <?= $contents ?>

    <!-- App Sidebar -->
    <!-- App Sidebar -->
    <div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <!-- profile box -->
                    <div class="profileBox">
                        <div class="image-wrapper">
                            <img src="https://lh3.googleusercontent.com/_x0eP5LbSX9BWgkmwRHSJXe8lgn7FyrfyM5P0kNJyiTqcJFHn-WJzCo8P_bs5VnwZw=w300" alt="image" class="imaged b-0" />
                        </div>
                        <div class="in">
                            <strong>JATIM TIMES NETWORK</strong>
                            <div class="text-muted">
                                <ion-icon name="star-outline"></ion-icon>
                                PILIHAN TERBAIK
                            </div>
                        </div>
                        <a href="javascript:;" class="close-sidebar-button" data-dismiss="modal">
                            <ion-icon name="close"></ion-icon>
                        </a>
                    </div>
                    <!-- * profile box -->
                    <ul class="listview flush transparent no-line image-listview mt-2">
                        <li>
                            <a href="index.html" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <div class="in">Beranda</div>
                            </a>
                        </li>
                    </ul>
                    <div class="listview-title mt-2 mb-1">
                        <span>Kanal</span>
                    </div>
                    <ul class="listview flush transparent no-line image-listview mt-2">
                        <li>
                            <a href="index.html" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <div class="in">Hukum</div>
                            </a>
                        </li>
                        <li>
                            <a href="index.html" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <div class="in">Pemerintahan</div>
                            </a>
                        </li>
                        <li>
                            <a href="index.html" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <div class="in">Pendidikan</div>
                            </a>
                        </li>
                        <li>
                            <a href="index.html" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <div class="in">Gaya</div>
                            </a>
                        </li>
                        <li>
                            <a href="index.html" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <div class="in">Kuliner</div>
                            </a>
                        </li>
                    </ul>
                    <div class="listview-title mt-2 mb-1">
                        <span>Kanal Pilihan</span>
                    </div>
                    <ul class="listview flush transparent no-line image-listview mt-2">
                        <li>
                            <a href="<?= base_url("page/redaksi")?>" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <div class="in">Redaksi</div>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url("page/kontak")?>" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <div class="in">Kontak Kami</div>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url("page/pedoman")?>" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <div class="in">Pedoman Media Siber</div>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url("page/disclaimer")?>" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <div class="in">Disclaimer</div>
                            </a>
                        </li>
                        <li>
                            <a href="privacy" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <div class="in">Privacy Policy</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <br>
                <!-- sidebar buttons -->
                <div class="sidebar-buttons">
                    <a href="javascript:;" class="button">
                        <ion-icon name="logo-facebook" style="color: #0165e1"></ion-icon>
                    </a>
                    <a href="javascript:;" class="button">
                        <ion-icon name="logo-youtube" style="color: #ff0000"></ion-icon>
                    </a>
                    <a href="javascript:;" class="button">
                        <ion-icon name="logo-instagram" style="color: #ff0073"></ion-icon>
                    </a>
                    <a href="javascript:;" class="button">
                        <ion-icon name="logo-tiktok" style="color: #000040"></ion-icon>
                    </a>
                </div>
                <!-- * sidebar buttons -->
            </div>
        </div>
    </div>
    <!-- * App Sidebar -->
    <footer>
        <div class="bg-secondary">
            <div class="container text-light py-3">
                <div class="row mt-5">
                    <div class="col-lg-8 col-12 mb-3">
                        <div class="media">
                            <img src="https://lh3.googleusercontent.com/_x0eP5LbSX9BWgkmwRHSJXe8lgn7FyrfyM5P0kNJyiTqcJFHn-WJzCo8P_bs5VnwZw=w300" class="mr-3" alt="Jatim Times Network" width="100px">
                            <div class="media-body">
                                <h5 class="mt-0" style="color: #ffffff;">Tentang Jatim Times Network</h5>
                                Media Online Mainstream Pertama di Jawa Timur, menyajikan info berita Jawa Timur yang
                                membangun, menginspirasi, dan berpositif thinking berdasarkan jurnalisme positif.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <h4 class="mt-0" style="color: #ffffff;">Follow Jatim Times Network</h4>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#" comet="_blank" class="text-light">
                                    <ion-icon name="logo-instagram"></ion-icon> @jatimtimescom
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" target="_blank" class="text-light">
                                    <ion-icon name="logo-facebook"></ion-icon> jatimtimes.com
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" target="_blank" class="text-light">
                                    <ion-icon name="logo-twitter"></ion-icon> @jatimtimes
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" comet="_blank" class="text-light">
                                    <ion-icon name="logo-youtube"></ion-icon> @jatimtimes
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom bg-secondary">
            <div class="container py-3">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <ul class="list-inline text-uppercase" style="font-size: 12px;">
                            <li class="list-inline-item">
                                <a href="#" class="text-light" title="Tentang Kami">Tentang Kami</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="text-light" title="Redaksi">Redaksi</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="text-light" title="Jurnalisme Positif">Jurnalisme Positif</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="text-light" title="Info Iklan">Info Iklan</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="text-light" title="Kebijakan Data Pribadi">Kebijakan Data Pribadi</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="text-light" title="Pedoman Media Siber">PMC</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="text-light" title="Privacy Policy">Policy</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="text-light" target="Network">Network</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="text-light text-uppercase copyright">
                            <span>NEW DESIGN development by</span> <a href="https://jatimtimes.my.id" target="_blank" title="JTN DEV"> JTN DEV</a>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-2">
                    <p class="text-muted">&copy; 2016 - 2022 <a href="https://www.jatimtimes.com/" alt="Jatim Times Network">Jatim Times Network</a>.
                        <br>
                        <span class="font-weight-light">Load time: <strong>{elapsed_time}</strong> detik. Diakses melalui
                            <strong><?= $this->agent->platform() ?></strong></span>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Jquery -->
    <script src="<?= base_url() ?>/assets/js/lib/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap-->
    <script src="<?= base_url() ?>/assets/js/lib/popper.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/lib/bootstrap.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!-- Owl Carousel -->
    <script src="<?= base_url() ?>/assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
    <!-- jQuery Circle Progress -->
    <script src="<?= base_url() ?>/assets/js/plugins/jquery-circle-progress/circle-progress.min.js"></script>
    <!-- Base Js File -->
    <script src="<?= base_url() ?>/assets/js/base.js"></script>
    <?php isset($footer_script) ? $this->load->view("script/" . $footer_script) : '' ?>
</body>

</html>