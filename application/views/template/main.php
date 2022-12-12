<!DOCTYPE html>
<html lang="id">

<head>
    <?php $this->load->view("tampilan/component/header/".$daerah['kode'])?>

    <link rel="icon" type="image/png" href="<?= base_url() ?>/assets/img/favicon.png" sizes="32x32" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>/assets/img/icon/192x192.png" />
    <!-- Share -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/assisfery/SocialShareJS@1.4/social-share.min.css">
    <!-- !Share -->
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css" />
    <link rel="manifest" href="__manifest.json" />
    <!-- Custom CSS -->
    <style>
        div.scrollmenu {
            overflow: auto;
            white-space: nowrap;
            height: 40px;
            margin: 0px;
            padding-bottom: 0pc;
            background-color: #185adb;
            text-align: center;
        }

        div.scrollmenu a {
            display: inline-block;
            color: white;
            text-align: center;
            padding-left: 12px;
            padding-right: 12px;
            padding-top: 5px;
            padding-bottom: 0px;
            text-decoration: none;
        }

        div.scrollmenu a:hover {
            background-color: #777;
        }

        .main-page {
            position: relative;
            max-width: 1200px;
            width: 100%;
            min-height: calc(100vh - 60px);
            margin: 0px auto;
        }

        .bg-times {
            background-color: #0a1931 !important;
        }

        .bg-times-dark {
            background-color: #6c0000 !important;
        }

        .bg-times-gradient {
            background: #0a1931;
            background: -moz-linear-gradient(left, #0a1931 0, #0a1931 42%, #185adb 86%);
            background: -webkit-gradient(left top,
                    right top,
                    color-stop(0, #0a1931),
                    color-stop(42%, #0a1931),
                    color-stop(86%, #185adb),
                    color-stop(91%, #f70),
                    color-stop(94%, #e66400),
                    color-stop(100%, #ffc947));
            background: -webkit-linear-gradient(left,
                    #0a1931 0,
                    #0a1931 42%,
                    #185adb 86%);
            background: -o-linear-gradient(left, #0a1931 0, #0a1931 42%, #185adb 86%);
            background: -ms-linear-gradient(left, #0a1931 0, #0a1931 42%, #185adb 86%);
            background: linear-gradient(to right, #0a1931 0, #0a1931 42%, #185adb 86%);
        }

        .fn60 {
            font-size: 60%;
        }

        .fn65 {
            font-size: 65% !important;
        }

        .fn80 {
            font-size: 80% !important;
        }

        .fn95 {
            font-size: 95% !important;
        }

        .fn100 {
            font-size: 100% !important;
        }

        .fn250 {
            font-size: 190% !important;
        }

        .image-listview>li .item .in2 {
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }

        .metaListDonation {
            margin-top: -5px;
            display: block;
            font-weight: 600;
        }

        .c_h10 {
            height: 10px;
        }

        .post-body p {
            font-size: 16px;
        }

        .tulisan {
            color: #0a1931;
        }
    </style>
    <!-- ! Custom CSS -->
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
            <a href="<?= base_url() ?>"><img src="<?= $daerah['logo']?>" alt="Jatim Times Network Logo" class="image" height="50px" /></a>
        </div>
        <div class="right">
            <font size="1" class="float-right"><?=date("d/m/Y")?></font>
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
                            <a href="<?=base_url()?>" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <div class="in">Beranda</div>
                            </a>
                        </li>
                    </ul>
                    <div class="listview-title mt-2 mb-1">
                        <span>Kanal Populer</span>
                    </div>
                    <ul class="listview flush transparent no-line image-listview mt-2">
                        <li>
                            <a href="<?=base_url()?>/kanal/hukum dan kriminalitas" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <div class="in">Hukum</div>
                            </a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>/kanal/pemerintahan" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <div class="in">Pemerintahan</div>
                            </a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>/kanal/pendidikan" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <div class="in">Pendidikan</div>
                            </a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>/kanal/gaya hidup" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <div class="in">Gaya</div>
                            </a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>/kanal/kuliner" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <div class="in">Kuliner</div>
                            </a>
                        </li>
                    </ul>
                    <div class="listview-title mt-2 mb-1">
                        <span>Halaman Penting</span>
                    </div>
                    <ul class="listview flush transparent no-line image-listview mt-2">
                        <li>
                            <a href="<?= base_url() ?>redaksi" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <div class="in">Redaksi</div>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>kontak" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <div class="in">Kontak Kami</div>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>pedoman" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <div class="in">Pedoman Media Siber</div>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url("disclaimer") ?>" class="item">
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
                    <a href="#" class="button">
                        <ion-icon name="logo-facebook" style="color: #0165e1"></ion-icon>
                    </a>
                    <a href="#" class="button">
                        <ion-icon name="logo-youtube" style="color: #ff0000"></ion-icon>
                    </a>
                    <a href="https://instagram.com/jatimtimescom" class="button">
                        <ion-icon name="logo-instagram" style="color: #ff0073"></ion-icon>
                    </a>
                    <a href="#" class="button">
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
                                <a href="https://instagram.com/jatimtimescom" comet="_blank" class="text-light">
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
                                <a href="<?= base_url() ?>/redaksi" class="text-light" title="Tentang Kami">Tentang Kami</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="<?= base_url() ?>/redaksi" class="text-light" title="Redaksi">Redaksi</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="<?= base_url() ?>/info-iklan" class="text-light" title="Info Iklan">Info Iklan</a>
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
                    <img src="https://risetcdn.jatimtimes.com/images/2021/10/22/Logo1-verif-jt-dp2x1bd16774bef5bb63.png" width="100px" alt="JatimTimes Media Terverifikasi Dewan Pers" loading="lazy" fetchpriority="high">
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
    <!-- Share -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/assisfery/SocialShareJS@1.4/social-share.min.js"></script>
    <!-- !Share -->
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