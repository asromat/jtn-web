<!-- App Capsule -->
<div id="appCapsule">
    <?php $this->view("element/main-nav-bar") ?>
    <!-- Section 1 -->
    <!-- Revive Adserver Asynchronous JS Tag - Generated with Revive Adserver v5.4.1 -->
<ins data-revive-zoneid="6" data-revive-id="117baf6d729856b93b4ce4545fb3968c"></ins>
<script async src="//pasangiklan.jatimtimes.com/adserver/www/delivery/asyncjs.php"></script>
<style>
.centerimg {
  display: block;
  margin-left: auto;
  margin-right: auto;

}
.owl-carousel .owl-item img {
    display: block;
    width: auto;
}

@media only screen and (min-width: 500px) {
/* For tablets: */
.imgthumb{height: 310px; width: auto;}
}

@media only screen and (min-width: 768px) {
  /* For desktop: */
.imgthumb{max-height: 400px; width: 100%;}
}

.wrapper2 {
  width: 0px;
  animation: fullView 0.5s forwards linear;
}

.br {
  border-radius: 8px;  
}

.w80 {
   width: 80%;
}

.card-box {
  border: 2px solid #fff;
  box-shadow:0px 0px 10px 0 #a9a9a9;
  padding: 30px 40px;
  width: 80%;
  margin: 50px auto;
}

.Pic {
  height: 65px;
  width: 65px;
  border-radius: 50%;
}

.comment {
  height: 10px;
  background: #777;
  margin-top: 20px;
}

.animate {
   animation : shimmer 2s infinite;
   background: linear-gradient
   (to right, #eff1f3 4%, #e2e2e2 25%, #eff1f3 36%);
   background-size: 1000px 100%;
}

@keyframes fullView {
  100% {
    width: 100%;
  }
}

@keyframes shimmer {
  0% {
    background-position: -1000px 0;
  }
  100% {
    background-position: 1000px 0;
  }
}



</style>

    <div class="main-page">
        <div class="row">
            <!-- Colom ke 1 -->
            <div class="col-12 col-lg-8 pl-2 pr-2 mt-2">
                <!-- Slider Headline -->
                <div class="carousel carousel-full owl-carousel owl-theme">
                    <?php foreach ($headline as $key => $data) {; ?>
                        <div class="item">
                            <div class="card position-relative p-1">
                                <img class="centerimg imgthumb" loading="lazy" src="<?= $this->fungsi->imageThumbnail($data['news_image_new'], "th") ?>" class="card-img-top img-fluid" alt="$data['news_title']">
                                <div class="card-body p-1">
                                    <!-- <span class="text-warning fn80 text-uppercase font-weight-bold">Berita</span> -->
                                    <h2 class="mb-0" style="font-size: 18px;"><?= $data['news_title'] ?></h2>
                                    <span class="float-left fn80"><?= $this->fungsi->timeAgo($data['news_datepub']) ?></span>
                                    <!-- <span class="float-right fn80">
                                    <ion-icon name="eye-outline"></ion-icon></i> 5.70rb
                                </span> -->
                                </div>
                                <a href="<?=base_url()?>baca/<?=$data['news_id']?>/<?=$this->fungsi->timeToStr("Ymd",$data['news_datepub'])?>/<?=$this->fungsi->timeToStr("his",$data['news_datepub'])?>/<?= $this->fungsi->convertToSlug($data['news_title'])?>" class="stretched-link"></a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <!-- * Slider Headline -->
                <div  style="text-align:center;">
               <div class="adbox adbox-responsive mt-4" style="max-width:336px;">
                    <!-- Iklan <?= $daerah['site_title']?> -->
                    <script src="https://pasangiklan.jatimtimes.com/amb/ser.php?f=<?=$daerah['ads1']?>"></script>
                    </div>
                </div>
                <!-- Berita Terbaru -->
                <div class="header-large-title mt-5">
                    
                    <h1 class="title">Berita Terbaru</h1>
                    <h4 class="subtitle">Update Bacaanmu Hari Ini</h4>
                    
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
                    <a class="btn btn-primary mr-1 mb-1 font-weight-bold text-uppercase" id="load-more">LOAD MORE</a>
                </div>
                <!-- * Berita Terbaru -->
            </div>
            <!-- * Colom ke 1 -->
            <!-- Colom ke 2 -->
            <div class="col-12 col-lg-4 mt-2">
                <!-- Berita Populer -->
                <div class="card">
                    <!--<div class="carousel-full owl-carousel owl-theme owl-loaded owl-drag">-->
                    <!--    <div class="owl-stage-outer">-->
                    <!--        <div class="owl-stage" style="transform: translate3d(-1033px, 0px, 0px); transition: all 0s ease 0s; width: 3161px; padding-left: 30px; padding-right: 30px;">-->
                    <!--            <?php for ($x = 1; $x <= 15; $x++) {; ?>-->
                    <!--                <?php if ($daerah['ads'.$x] != null) { ?>-->
                    <!--                <div class="owl-item" style="width: 328.533px; margin-right: 16px;">-->
                    <!--                    <div class="item imaged w-100">-->
                    <!--                        <script src="https://pasangiklan.jatimtimes.com/amb/ser.php?f=<?= $daerah['ads'.$x] ?>"></script>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--                <?php } ?>-->
                    <!--            <?php } ?>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<hr>-->
                    <?php $this->load->view("tampilan/component/iklangeser")?><br><br>
                    <div class="header-large-title">
                        <h1 class="title">Headline Berita</h1>
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
                    <!-- Iklan <?= $daerah['site_title']?> -->
                    <script src="https://pasangiklan.jatimtimes.com/amb/ser.php?f=<?=$daerah['ads2']?>"></script>
                </div>
                
                <!-- * Iklan -->
                <!-- Fokus Berita -->
                <div class="card mt-3">
                    <div class="header-large-title">
                        <h1 class="title">Topik Khusus</h1>
                    </div>
                    <div class="card-body text-left">
                        <a href="<?= base_url()?>/tag/ferdy-sambo" class="btn btn-outline-primary mr-1 mb-1 font-weight-bold text-uppercase">#FERDY SAMBO</a>
                    </div>
                </div>
                <!-- * Fokus Berita -->
            </div>
            <!-- * Colom ke 2 -->
        </div>
        
        <br>
        <?php $this->load->view("tampilan/component/infografis")?>
        <div class="row" style="margin-top: -20;">
            
            <div class="col-12 col-lg-4">
                <div class="adbox adbox-responsive mt-4">
                    <!-- Iklan <?= $daerah['site_title']?> -->
                    <script src="https://pasangiklan.jatimtimes.com/amb/ser.php?f=<?=$daerah['ads3']?>"></script>
                </div>
                <div class="header-large-title">
                    <h1 class="title">Hukum dan Kriminalitas</h1>
                </div>
                <div class="card mt-1">
                    <ul class="listview image-listview media">
                        <?php foreach ($hukum as $key => $data) {; ?>
                            <li>
                                <a href="<?=base_url()?>baca/<?=$data['news_id']?>/<?=$this->fungsi->timeToStr("Ymd",$data['news_datepub'])?>/<?=$this->fungsi->timeToStr("his",$data['news_datepub'])?>/<?= $this->fungsi->convertToSlug($data['news_title'])?>">
                                <div class="item">
                                    <div class="imageWrapper">
                                        <img src="<?= $this->fungsi->imageThumbnail($data['news_image_new'], "th") ?>" alt="image" class="imaged w100">
                                    </div>
                                    <div class="in">
                                        <div>
                                            <header class="text-primary fn80 text-uppercase font-weight-bold">HUKUM DAN KRIMINALITAS
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
                <div class="card card-footer">
                    <a href="<?=base_url("kanal/hukum dan kriminalitas")?>" class="btn btn-outline-primary mr-1 mb-1 font-weight-bold text-uppercase">SELENGKAPNYA</a>
                </div>
                <!-- * Berita Terbaru -->
            </div>
            <div class="col-12 col-lg-4">
                <div class="adbox adbox-responsive mt-4">
                    <!-- Iklan <?= $daerah['site_title']?> -->
                    <script src="https://pasangiklan.jatimtimes.com/amb/ser.php?f=<?=$daerah['ads4']?>"></script>
                </div>
                <div class="header-large-title mt-5">
                    <h1 class="title">Pendidikan</h1>
                </div>
                <div class="card mt-1">
                    <ul class="listview image-listview media">
                        <?php foreach ($pendidikan as $key => $data) {; ?>
                            <li>
                                <a href="<?=base_url()?>baca/<?=$data['news_id']?>/<?=$this->fungsi->timeToStr("Ymd",$data['news_datepub'])?>/<?=$this->fungsi->timeToStr("his",$data['news_datepub'])?>/<?= $this->fungsi->convertToSlug($data['news_title'])?>">
                                <div class="item">
                                    <div class="imageWrapper">
                                        <img src="<?= $this->fungsi->imageThumbnail($data['news_image_new'], "th") ?>" alt="image" class="imaged w100">
                                    </div>
                                    <div class="in">
                                        <div>
                                            <header class="text-primary fn80 text-uppercase font-weight-bold">PENDIDIKAN
                                            </header>
                                            <h3><?= $data['news_title'] ?></h3>
                                            <div class="text-muted d-block fn60">
                                                <ion-icon name="time-outline"></ion-icon><?= $this->fungsi->timeAgo($data['news_datepub']) ?></span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>
                        </a>
                        <?php } ?>
                    </ul>
                </div>
                <div class="card card-footer">
                    <a href="<?=base_url("kanal/pendidikan")?>" class="btn btn-outline-primary mr-1 mb-1 font-weight-bold text-uppercase">SELENGKAPNYA</a>
                </div>
                <!-- * Berita Terbaru -->
            </div>
            <div class="col-12 col-lg-4">
                <div class="adbox adbox-responsive mt-4">
                    <!-- Iklan <?= $daerah['site_title']?> -->
                    <script src="https://pasangiklan.jatimtimes.com/amb/ser.php?f=<?=$daerah['ads5']?>"></script>
                </div>
                <!-- Olahraga -->
                <div class="header-large-title mt-5">
                    <h1 class="title">Olahraga</h1>
                </div>
                <div class="card mt-1">
                    <ul class="listview image-listview media">
                        <?php foreach ($olahraga as $key => $data) {; ?>
                            <li>
                                <a href="<?=base_url()?>baca/<?=$data['news_id']?>/<?=$this->fungsi->timeToStr("Ymd",$data['news_datepub'])?>/<?=$this->fungsi->timeToStr("his",$data['news_datepub'])?>/<?= $this->fungsi->convertToSlug($data['news_title'])?>">
                                <div class="item">
                                    <div class="imageWrapper">
                                        <img src="<?= $this->fungsi->imageThumbnail($data['news_image_new'], "th") ?>" alt="image" class="imaged w100">
                                    </div>
                                    <div class="in">
                                        <div>
                                            <header class="text-primary fn80 text-uppercase font-weight-bold">OLAHRAGA
                                            </header>
                                            <h3><?= $data['news_title'] ?></h3>
                                            <div class="text-muted d-block fn60">
                                                <ion-icon name="time-outline"></ion-icon><?= $this->fungsi->timeAgo($data['news_datepub']) ?></span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>
                        </a>
                        <?php } ?>
                    </ul>
                </div>
                <div class="card card-footer">
                    <a href="<?=base_url("kanal/olahraga")?>" class="btn btn-outline-primary mr-1 mb-1 font-weight-bold text-uppercase">SELENGKAPNYA</a>
                </div>
                <!-- * Olahraga -->
            </div>
        </div>
        <!-- TikTok -->
        <div class="row mt-2">
            <div class="col-12">
                <div class="header-large-title">
                    <h1 class="title">TikTok</h1>
                </div>
                <blockquote class="tiktok-embed p-0" cite="https://www.tiktok.com/@jatimtimes" data-unique-id="jatimtimes" data-embed-type="creator" style="max-width: 720px; min-width: 288px;">
                    <section> <a target="_blank" href="https://www.tiktok.com/@jatimtimes?refer=creator_embed">@jatimtimes</a> </section>
                </blockquote>
                <script async src="https://www.tiktok.com/embed.js"></script>
            </div>
        </div>
        <!-- * TikTok -->
        <!-- Row ke 3 -->
        <div class="row mt-2">
            <div class="col-12 col-lg-6">
                <!-- Pemerintahan -->
                <div class="header-large-title mt-5">
                    <h1 class="title">Pemerintahan</h1>
                </div>
                <div class="card mt-1">
                    <ul class="listview image-listview media">
                        <?php foreach ($pemerintahan as $key => $data) {; ?>
                            <li>
                                <a href="<?=base_url()?>baca/<?=$data['news_id']?>/<?=$this->fungsi->timeToStr("Ymd",$data['news_datepub'])?>/<?=$this->fungsi->timeToStr("his",$data['news_datepub'])?>/<?= $this->fungsi->convertToSlug($data['news_title'])?>">
                                <div class="item">
                                    <div class="imageWrapper">
                                        <img src="<?= $this->fungsi->imageThumbnail($data['news_image_new'], "th") ?>" alt="image" class="imaged w100">
                                    </div>
                                    <div class="in">
                                        <div>
                                            <header class="text-primary fn80 text-uppercase font-weight-bold">PEMERINTAHAN
                                            </header>
                                            <h3><?= $data['news_title'] ?></h3>
                                            <div class="text-muted d-block fn60">
                                                <ion-icon name="time-outline"></ion-icon><?= $this->fungsi->timeAgo($data['news_datepub']) ?></span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>
                        </a>
                        <?php } ?>
                    </ul>
                </div>
                <div class="card card-footer">
                    <a href="<?=base_url("kanal/pemerintahan")?>" class="btn btn-outline-primary mr-1 mb-1 font-weight-bold text-uppercase">SELENGKAPNYA</a>
                </div>
                <!-- * Pemerintahan -->
            </div>
            <div class="col-12 col-lg-6">
                <!-- Gaya -->
                <div class="header-large-title mt-5">
                    <h1 class="title">Gaya Hidup</h1>
                </div>
                <div class="card mt-1">
                    <ul class="listview image-listview media">
                        <?php foreach ($gaya as $key => $data) {; ?>
                            <li>
                                <a href="<?=base_url()?>baca/<?=$data['news_id']?>/<?=$this->fungsi->timeToStr("Ymd",$data['news_datepub'])?>/<?=$this->fungsi->timeToStr("his",$data['news_datepub'])?>/<?= $this->fungsi->convertToSlug($data['news_title'])?>">
                                <div class="item">
                                    <div class="imageWrapper">
                                        <img src="<?= $this->fungsi->imageThumbnail($data['news_image_new'], "th") ?>" alt="image" class="imaged w100">
                                    </div>
                                    <div class="in">
                                        <div>
                                            <header class="text-primary fn80 text-uppercase font-weight-bold">GAYA HIDUP
                                            </header>
                                            <h3><?= $data['news_title'] ?></h3>
                                            <div class="text-muted d-block fn60">
                                                <ion-icon name="time-outline"></ion-icon><?= $this->fungsi->timeAgo($data['news_datepub']) ?></span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>
                        </a>
                        <?php } ?>
                    </ul>
                </div>
                <div class="card card-footer">
                    <a href="<?=base_url("kanal/gaya hidup")?>" class="btn btn-outline-primary mr-1 mb-1 font-weight-bold text-uppercase">SELENGKAPNYA</a>
                </div>
                <!-- * Gaya -->
                
            </div>
        </div>
        <!-- *Row ke 3 -->
        <!-- Row Youtube -->
        <!-- <div class="row mt-2">
            <div class="col-12">
                <div class="header-large-title mt-5 bg-times-gradient">
                    <h1 class="title">#Youtube</h1>
                </div>
                <div class="carousel-multiple owl-carousel owl-theme owl-loaded owl-drag mt-3">
                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(-1029px, 0px, 0px); transition: all 0s ease 0s; width: 2896px; padding-left: 32px; padding-right: 32px;">
                            <div class="owl-item" style="width: 241.4px; margin-right: 16px;">
                                <div class="item">
                                    <img src="<?= base_url() ?>/assets/img/sample/photo/3.jpg" alt="alt" class="imaged w-100">
                                </div>
                            </div>
                            <div class="owl-item" style="width: 241.4px; margin-right: 16px;">
                                <div class="item">
                                    <img src="<?= base_url() ?>/assets/img/sample/photo/1.jpg" alt="alt" class="imaged w-100">
                                </div>
                            </div>
                            <div class="owl-item" style="width: 241.4px; margin-right: 16px;">
                                <div class="item">
                                    <img src="<?= base_url() ?>/assets/img/sample/photo/2.jpg" alt="alt" class="imaged w-100">
                                </div>
                            </div>
                            <div class="owl-item" style="width: 241.4px; margin-right: 16px;">
                                <div class="item">
                                    <img src="<?= base_url() ?>/assets/img/sample/photo/3.jpg" alt="alt" class="imaged w-100">
                                </div>
                            </div>
                            <div class="owl-item" style="width: 241.4px; margin-right: 16px;">
                                <div class="item">
                                    <img src="<?= base_url() ?>/assets/img/sample/photo/1.jpg" alt="alt" class="imaged w-100">
                                </div>
                            </div>
                            <div class="owl-item" style="width: 241.4px; margin-right: 16px;">
                                <div class="item">
                                    <img src="<?= base_url() ?>/assets/img/sample/photo/2.jpg" alt="alt" class="imaged w-100">
                                </div>
                            </div>
                            <div class="owl-item" style="width: 241.4px; margin-right: 16px;">
                                <div class="item">
                                    <img src="<?= base_url() ?>/assets/img/sample/photo/3.jpg" alt="alt" class="imaged w-100">
                                </div>
                            </div>
                            <div class="owl-item" style="width: 241.4px; margin-right: 16px;">
                                <div class="item">
                                    <img src="<?= base_url() ?>/assets/img/sample/photo/1.jpg" alt="alt" class="imaged w-100">
                                </div>
                            </div>
                            <div class="owl-item" style="width: 241.4px; margin-right: 16px;">
                                <div class="item">
                                    <img src="<?= base_url() ?>/assets/img/sample/photo/2.jpg" alt="alt" class="imaged w-100">
                                </div>
                            </div>
                            <div class="owl-item" style="width: 241.4px; margin-right: 16px;">
                                <div class="item">
                                    <img src="<?= base_url() ?>/assets/img/sample/photo/3.jpg" alt="alt" class="imaged w-100">
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 241.4px; margin-right: 16px;">
                                <div class="item">
                                    <img src="<?= base_url() ?>/assets/img/sample/photo/1.jpg" alt="alt" class="imaged w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous"></span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
                    <div class="owl-dots disabled"></div>
                </div>
            </div>
        </div> -->
        <!-- * Row Youtube -->
        <!-- Row Iklan Panjang -->
        <!-- <div class="row mt-2">
            <div class="col-12">
                <div class="adbox adbox-responsive">
                    <img src="https://wwwcdn.cincopa.com/blogres/wp-content/uploads/2019/07/bigstock-139534655.jpg" alt="image">
                </div>
            </div>
        </div> -->
        <!-- ! Row Iklan Panjang -->
    </div>
    <!-- * Section 1 -->
</div>
<!-- * App Capsule -->