<!-- App Capsule -->
<div id="appCapsule">
    <!-- Main Navbar -->
    <?php $this->view("element/main-nav-bar") ?>
    <!-- ! Main Navbar -->
    <!-- Content -->
    <div class="main-page">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb" class="mt-3">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">
                                <ion-icon name="home-outline"></ion-icon>
                            </a></li>
                        <li class="breadcrumb-item active" aria-current="page">Baca</li>
                        <li class="breadcrumb-item active" aria-current="page"><?=$kategori?></li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="p-2 bg-white rounded shadow-sm">
                    <a href="#"><span class="badge badge-primary bg-tia50000 text-uppercase mb-1"><?= $kategori ?></span></a>
                    <!-- <a href="#" class="d-block text-primary fn-poppins font-italic mt-1">OTT KPK di MA</a> -->
                    <h1><?= $data['news_title'] ?></h1>
                    <div><small class="text-muted"><?= $this->fungsi->timeToStr("d-m-Y",$data['news_datepub']) ?></small></div>
                </div>
                <div class="bg-white mt-2">
                    <figure class="figure shadow-sm" style="width: 100%;">
                        <img src="<?= $data['news_image_new'] ?>" class="rounded-top img-fluid" alt="Aktivis JCW Apresiasi Keberhasilan KPK RI OTT Hakim Agung" style="width: 100%;">
                        <figcaption class="figure-caption bg-times text-light text-center p-1 rounded-bottom"><?= $data['news_caption'] ?></figcaption>
                    </figure>
                </div>
                <div class="blog-post mt-1 p-3" style="width: 100%;">
                    <div class="post-body">
                    <?= $data['news_content'] ?>
                        <h3>Topik</h3>
                    </div>
                    <hr>
                    <p>
                        <span class="badge badge-primary">Tag 1</span> <span class="badge badge-primary">Tag
                            2</span> <span class="badge badge-primary">Tag 3</span>
                    </p>
                    <div class="row">
                        <div class="col-2">
                            <img src="https://lh3.googleusercontent.com/_x0eP5LbSX9BWgkmwRHSJXe8lgn7FyrfyM5P0kNJyiTqcJFHn-WJzCo8P_bs5VnwZw=w300" class="mr-3" alt="Jatim Times Network" width="100px">
                        </div>
                        <div class="col-10">
                            <h3>JOIN JATIM TIMES NETWORK</h3>
                            Dapatkan update berita pilihan dan breaking news setiap hari dari JatimTIMES.com. Mari bergabung di Grup Telegram , caranya klik link Telegram JatimTIMES, kemudian join. Anda harus install aplikasi Telegram terlebih dulu di ponsel.
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">
                            <h3>Penulis</h3>
                            <h4><?= $data['news_writer'] ?></h4>
                        </div>
                        <div class="col-6 float-right">
                            <h3>Editor</h3>
                            <h4><?= $editor ?></h4>
                        </div>
                    </div>
                </div>
                <!-- Berita Terkait -->
                <?php if(!isset($similar['status'])) { ?>
                <div class="row mt-2 mb-3">
                    <div class="col-12">
                        <div class="header-large-title mt-5 bg-times-gradient">
                            <h1 class="title">#Berita Terkait</h1>
                        </div>
                        <div class="carousel carousel-multiple owl-carousel owl-theme">
                            <?php foreach ($similar as $key => $data) {; ?>
                            <div class="item">
                                <div class="card position-relative p-1">
                                <img src="<?= $data['news_image_new'] ?>" class="rounded-top img-fluid" alt="Aktivis JCW Apresiasi Keberhasilan KPK RI OTT Hakim Agung" style="width: 100%;">
                                    <div class="card-body p-1">
                                        <p><?= $data['news_title'] ?></p>
                                        <ion-icon name="time-outline"></ion-icon><?= $this->fungsi->timeAgo($data['news_datepub']) ?></span>
                                    </div>
                                    <a href="<?=base_url()?>baca/<?=$data['news_id']?>/<?=$this->fungsi->timeToStr("Ymd",$data['news_datepub'])?>/<?=$this->fungsi->timeToStr("his",$data['news_datepub'])?>/<?= $this->fungsi->convertToSlug($data['news_title'])?>" class="stretched-link"></a>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!-- * Berita Terkait -->
            </div>
            <div class="col-12 col-lg-4">
                <?php if (!isset($satukanal['status'])) { ?>                
                <!-- Satu Kanal -->
                <div class="header-large-title bg-times-gradient">
                    <h1 class="title">#<?=$kategori?></h1>
                    <h4 class="subtitle">Artikel bulan ini dari kanal <?= $kategori ?></h4>
                </div>
                <div class="card mt-1">
                    <ul class="listview image-listview media">
                        <?php foreach ($satukanal as $key => $data) {; ?>
                            <li>
                                <a href="<?=base_url()?>baca/<?=$data['news_id']?>/<?=$this->fungsi->timeToStr("Ymd",$data['news_datepub'])?>/<?=$this->fungsi->timeToStr("his",$data['news_datepub'])?>/<?= $this->fungsi->convertToSlug($data['news_title'])?>">
                                <div class="item">
                                    <div class="imageWrapper">
                                        <img src="<?= $this->fungsi->imageThumbnail($data['news_image_new'], "th") ?>" alt="image" class="imaged w100">
                                    </div>
                                    <div class="in">
                                        <div>
                                            <header class="text-primary fn80 text-uppercase font-weight-bold">
                                            </header>
                                            <h3><?= $data['news_title'] ?></h3>
                                            <div class="text-muted d-block fn60">
                                                <ion-icon name="time-outline"></ion-icon><?= $this->fungsi->timeAgo($data['news_datepub']) ?></span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <?php } ?>                
                <!-- * Satu Kanal -->
                <!-- Berita Populer -->
                <div class="card mt-2">
                    <div class="header-large-title bg-times-gradient">
                        <h1 class="title">#Headline Berita</h1>
                        <h4 class="subtitle">Wajib Kamu Baca</h4>
                    </div>
                    <div class="card-body text-left">
                        <ul class="listview image-listview media">
                            <li>
                                <?php $no = 1;
                                foreach ($headline as $key => $data) {; ?>
                                    <a href="<?= base_url() ?>baca/<?= $data['news_id'] ?>/<?= $this->fungsi->timeToStr("Ymd", $data['news_datepub']) ?>/<?= $this->fungsi->timeToStr("his", $data['news_datepub']) ?>/<?= $this->fungsi->convertToSlug($data['news_title']) ?>">
                                        <div class="item">
                                            <div class="imageWrapper">
                                                <h1 class="top-text-align" style="font-size: 20px;"><?= $no++ ?></h1>
                                            </div>
                                            <div class="in">
                                                <div>
                                                    <h3><?= $data['news_title'] ?></h3>
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
                <!-- * Iklan -->
            </div>
        </div>
    </div>
    <!-- ! Content -->
</div>
<!-- * App Sidebar -->