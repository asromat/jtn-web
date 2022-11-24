<!-- App Capsule -->
<div id="appCapsule">
    <?php $this->view("element/main-nav-bar") ?>
    <!-- Section 1 -->
    <div class="main-page">
        <div class="row" style="margin-top: -20;">
            <div class="col-12 col-lg-4">
                <div class="header-large-title mt-5 bg-times-gradient">
                    <h1 class="title">#Hukum dan Kriminalitas</h1>
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
                <div class="header-large-title mt-5 bg-times-gradient">
                    <h1 class="title">#Pendidikan</h1>
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
                <!-- Olahraga -->
                <div class="header-large-title mt-5 bg-times-gradient">
                    <h1 class="title">#Olahraga</h1>
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
                <div class="header-large-title bg-times-gradient">
                    <h1 class="title">#TikTok</h1>
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
                <div class="header-large-title mt-5 bg-times-gradient">
                    <h1 class="title">#Pemerintahan</h1>
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
                <div class="header-large-title mt-5 bg-times-gradient">
                    <h1 class="title">#Gaya Hidup</h1>
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
    </div>
    <!-- * Section 1 -->
</div>
<!-- * App Capsule -->