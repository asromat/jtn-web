<!-- App Capsule -->
<div id="appCapsule">
    <!-- Main Navbar -->
    <?php $this->view("element/main-nav-bar") ?>
    <!-- ! Main Navbar -->
    <div class="main-page">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb" class="mt-3">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>">
                                <ion-icon name="home-outline"></ion-icon>
                            </a></li>
                        <li class="breadcrumb-item active text-uppercase" aria-current="page"><a href="<?= base_url($this->uri->segment("1")) ?>"><?= $this->uri->segment("1") ?></a></li>
                        <li class="breadcrumb-item active text-uppercase" aria-current="page"><?= urldecode($kanal) ?></li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-8">
                <!-- Hasil Pencarian -->
                <div class="header-large-title">
                    <h1 class="title text-uppercase ">#<?= urldecode($kanal) ?></h1>
                    <h4 class="subtitle text-uppercase">Berita Seputar <?= urldecode($kanal) ?></h4>
                </div>
                <div class="card mt-1">
                    <ul class="listview image-listview media">
                        <!-- Load Berita Terbaru -->
                        <li id="load_data">

                        </li>
                        <!-- ! Load Berita Terbaru -->
                        <div id="load_data_message"></div>
                    </ul>
                </div>
                <div class="card card-footer">
                    <a class="btn btn-outline-primary mr-1 mb-1 font-weight-bold text-uppercase" id="load-more">SELENGKAPNYA</a>
                </div>
                <!-- ! Hasil Pencarian -->
            </div>
            <div class="col-12 col-lg-4">
                <!-- Headline -->
                <div class="card">
                    <div>
                        <?php $this->load->view("component/headlineText")?>
                    </div>
                </div>
                <!-- * Headline -->
                <!-- FOkus -->
                <div class="card mt-2">
                    <div>
                        <?php $this->load->view("component/fokus")?>
                    </div>
                </div>
                <!-- * FOkus -->
                <!-- Iklan -->
                <div class="adbox adbox-responsive mt-4">
                    <script src="https://pasangiklan.jatimtimes.com/amb/ser.php?f=<?= $daerah['ads1'] ?>"></script>
                </div>
                <div class="adbox adbox-responsive mt-4">
                    <script src="https://pasangiklan.jatimtimes.com/amb/ser.php?f=<?= $daerah['ads2'] ?>"></script>
                </div>
                <!-- ! Iklan -->
            </div>
        </div>
    </div>

</div>
<!-- * App Sidebar -->