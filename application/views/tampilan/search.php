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
                        <li class="breadcrumb-item"><a href="<?=base_url()?>">
                                <ion-icon name="home-outline"></ion-icon>
                            </a></li>
                        <li class="breadcrumb-item active text-uppercase" aria-current="page"><a href="<?=base_url($this->uri->segment("1"))?>"><?= $this->uri->segment("1")?></a></li>
                        <li class="breadcrumb-item active text-uppercase" aria-current="page"><?= urldecode($kanal)?></li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-8">
                <!-- Hasil Pencarian -->
                <div class="header-large-title bg-times-gradient">
                    <h1 class="title text-uppercase ">#<?= urldecode($kanal)?></h1>
                    <h4 class="subtitle text-uppercase">Berita Seputar <?= urldecode($kanal)?></h4>
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
                <!-- Berita Populer -->
                <div class="card">
                <div class="header-large-title bg-times-gradient">
                        <h1 class="title">#Headline Berita</h1>
                        <h4 class="subtitle">Wajib Kamu Baca</h4>
                    </div>
                    <div class="card-body text-left">
                        <ul class="listview image-listview media">
                            <li>
                                <?php $no=1; foreach ($headline as $key => $data) {; ?>
                                <a href="<?=base_url()?>baca/<?=$data['news_id']?>/<?=$this->fungsi->timeToStr("Ymd",$data['news_datepub'])?>/<?=$this->fungsi->timeToStr("his",$data['news_datepub'])?>/<?= $this->fungsi->convertToSlug($data['news_title'])?>">
                                <div class="item">
                                    <div class="imageWrapper">
                                        <h1 class="top-text-align" style="font-size: 20px;"><?= $no++?></h1>
                                    </div>
                                    <div class="in">
                                        <div>
                                            <h3><?=$data['news_title']?></h3>
                                        </div>
                                    </div>
                                </div>
                                </a>
                                <?php } ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- * Berita Populer -->
                <!-- Iklan -->
                <div class="adbox adbox-responsive mt-4">
                    <img src="https://risetcdn.jatimtimes.com/images/2022/10/02/dprd-kab-malang.psd1a0416a9d7b679b3.md.png" alt="image">
                </div>
                <div class="adbox adbox-responsive mt-4">
                    <img src="https://risetcdn.jatimtimes.com/images/2022/10/11/WhatsApp-Image-2022-10-10-at-20.32.10e16df517bd10d9be.jpg" alt="image">
                </div>
                <!-- ! Iklan -->
            </div>
        </div>
    </div>

</div>
<!-- * App Sidebar -->