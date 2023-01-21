<link rel="canonical" href="{{ url('/')}}{{$_SERVER['REQUEST_URI'] }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta property="og:title" content="<?= $data['news_title'] ?>" />
<meta property="og:description" content="<?= $data['news_title'] ?>" />
<meta property="og:url" content="<?= $daerah['domain']?>" />
<meta property="og:site_name" content="Jatim TIMES" />
<meta property="og:image" itemprop="image" content="<?= $this->fungsi->imageThumbnail($data['news_image_new'], "th") ?>" />
<meta property="og:image:secure_url" itemprop="image" content="<?= $this->fungsi->imageThumbnail($data['news_image_new'], "th") ?>" />
<meta property="og:image:width" content="600" />
<meta property="og:image:height" content="315" />


<script type="application/ld+json">
    {
        "@context": "http://schema.org/",
        "@type": "ImageObject",
        "contentUrl": "<?= $this->fungsi->imageThumbnail($data['news_image_new'], "th") ?>",
"license": "https://www.jatimtimes.com/Redaksi",
      "acquireLicensePage": "https://www.jatimtimes.com/Redaksi",
      "creditText": "PT Jatim Times Network",
"creator": {
        "@type": "Person",
        "name": "Redaksi JTN"
       },
      "copyrightNotice": "jatimtimes.com"
    }
</script>

<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "WebPage",
        "headline": "<?= $data['news_title'] ?>",
        "url": "<?php echo "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>",
        "datePublished": "<?= $this->fungsi->timeToStr("d - M - Y, h:i",$data['news_datepub']) ?>",
        "image": "<?= $this->fungsi->imageThumbnail($data['news_image_new'], "th") ?>",
        "thumbnailUrl": "<?= $this->fungsi->imageThumbnail($data['news_image_new'], "th") ?>"
    }
</script>

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "NewsArticle",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "<?php echo "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>"
        },
        "headline": "<?= $data['news_title'] ?>",
        "image": [
            "<?= $this->fungsi->imageThumbnail($data['news_image_new'], "th") ?>"
        ],
        "datePublished": "<?= $this->fungsi->timeToStr("Y-m-d",$data['news_datepub']) ?>",
        "dateModified": "<?= $this->fungsi->timeToStr("Y-m-d",$data['news_datepub']) ?>",
        "author": {
            "@type": "Person",
            "name": "<?= $data['news_writer'] ?>",
            "url": "https://jatimtimes.com"
        },
        "publisher": {
            "@type": "Organization",
            "name": "Jatim Times Network",
            "logo": {
                "@type": "ImageObject",
                "url": "https://cdnstatic.jatimtimes.com/logo/new/jatim.png"
            }
        }, 
"description": "Berita Terkini Jatimtimes -  <?= $data['news_title'] ?>. Berita Jawa Timur Terbaru."
    }
</script>
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [{
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "https://jatimtimes.com"
        }, {
            "@type": "ListItem",
            "position": 2,
            "name": "Hukum dan Kriminalitas",
            "item": "https://jatimtimes.com/kanal/hukum%20dan%20kriminalitas"
        }, {
            "@type": "ListItem",
            "position": 3,
            "name": "Ekonomi",
            "item": "https://jatimtimes.com/kanal/ekonomi"
        }]
    }
</script>

<style>
.main-page{
    padding-left:10px;
    padding-right:10px;
}
    .post-body p {
    font-size: 18px;
}
    
</style>

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
                        <li class="breadcrumb-item"><a href="<?=base_url()?>">
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
                    <a href="<?= base_url()?>/kanal/<?= $kategori ?>"><span class="badge badge-primary bg-tia50000 text-uppercase mb-1"><?= $kategori ?></span></a>
                    <!-- <a href="#" class="d-block text-primary fn-poppins font-italic mt-1">OTT KPK di MA</a> -->
                    <h1><?= $data['news_title'] ?></h1>
                    <div>
                        <p font-size="15px">
                            <b>Penulis</b> : <?= $data['news_writer'] ?> - <b>Editor :</b> <?= $editor?>
                            <small class="float-right text-muted"><?= $this->fungsi->timeToStr("d - M - Y, h:i",$data['news_datepub']) ?></small>
                        </p>
                    </div>                    
                    <div class="ss-box ss-circle" data-ss-content="false" data-ss-social="facebook, whatsapp,twitter,telegram,instagram,email" style="size: 10px;"></div>
                </div>
                <div class="bg-white mt-2">
                    <figure class="figure shadow-sm" style="width: 100%; height:auto;" align="center">
                        <img loading="lazy" src="<?= $this->fungsi->imageThumbnail($data['news_image_new'], "th") ?>" class="rounded-top img-fluid" alt="<?= $data['news_caption'] ?>" style="width: auto; height:auto">
                        <figcaption class="figure-caption bg-times text-light text-center p-1 rounded-bottom"><?= $data['news_caption'] ?></figcaption>
                    </figure>
                </div>
                <div class="blog-post mt-1" style="width: 100%;">
                    <div class="post-body">
                    <?= $data['news_content'] ?>
                </div>
                <div class="adbox adbox-responsive mt-4">
                    <!-- Iklan <?= $daerah['site_title']?> -->
                    <script src="https://pasangiklan.jatimtimes.com/amb/ser.php?f=<?=$daerah['ads6']?>"></script>
                </div>
                <div class="adbox adbox-responsive mt-4">
                    <!-- Iklan <?= $daerah['site_title']?> -->
                    <script src="https://pasangiklan.jatimtimes.com/amb/ser.php?f=<?=$daerah['ads7']?>"></script>
                </div>
                <hr>
                    <!-- <h3>Topik</h3> -->
                    <!-- <p>
                        <span class="badge badge-primary">Tag 1</span> <span class="badge badge-primary">Tag
                            2</span> <span class="badge badge-primary">Tag 3</span>
                    </p> -->
                    <div class="row">
                        <!-- <div class="col-2">
                            <img loading="lazy" src="https://lh3.googleusercontent.com/_x0eP5LbSX9BWgkmwRHSJXe8lgn7FyrfyM5P0kNJyiTqcJFHn-WJzCo8P_bs5VnwZw=w300" class="mr-3" alt="Jatim Times Network" width="100px">
                        </div> -->
                        <div class="col-10">
                            <h3>JOIN JATIM TIMES NETWORK</h3>
                            Dapatkan update berita pilihan dan breaking news setiap hari dari JatimTIMES.com. Mari bergabung di Grup Telegram , caranya klik link Telegram JatimTIMES, kemudian join. Anda harus install aplikasi Telegram terlebih dulu di ponsel anda.
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
                <!-- Iklan Bawah Berita -->
                <!--<div class="adbox adbox-responsive mt-4">
                    <img src="https://risetcdn.jatimtimes.com/images/2022/10/11/WhatsApp-Image-2022-10-10-at-20.32.10e16df517bd10d9be.jpg" alt="image">
                </div> -->
                <!-- ! Iklan Bawah Berita -->
                
                <div class="col-12 col-lg-8 pl-2 pr-2 mt-2">
                <!-- Slider Headline -->
                <div class="carousel carousel-full owl-carousel owl-theme">
                    <?php foreach ($headline as $key => $data) {; ?>
                        <div class="item">
                            <div class="card position-relative p-1">
                                <img loading="lazy" src="<?= $this->fungsi->imageThumbnail($data['news_image_new'], "th") ?>" class="card-img-top img-fluid" alt="$data['news_title']" style="max-height: 1200px; width:100%">
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
                
                
                <!-- Berita Terkait -->
                <?php if(!isset($similar['status'])) { ?>
                <!-- <div class="row mt-2 mb-3">
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
                </div> -->
                <?php } ?>
                <!-- * Berita Terkait -->
            </div>
            <div class="col-12 col-lg-4">
                <?php if (!isset($satukanal['status'])) { ?>                
                <!-- Satu Kanal -->
                <div class="header-large-title">
                    <h1 class="title"><?=$kategori?></h1>
                    <h4 class="subtitle">Artikel terkait di <?= $kategori ?></h4>
                </div>
                <div class="card mt-1">
                    <ul class="listview image-listview media">
                        <?php foreach ($satukanal as $key => $data) {; ?>
                            <li>
                                <a href="<?=base_url()?>baca/<?=$data['news_id']?>/<?=$this->fungsi->timeToStr("Ymd",$data['news_datepub'])?>/<?=$this->fungsi->timeToStr("his",$data['news_datepub'])?>/<?= $this->fungsi->convertToSlug($data['news_title'])?>">
                                <div class="item">
                                    <div class="imageWrapper">
                                        <img loading="lazy" src="<?= $this->fungsi->imageThumbnail($data['news_image_new'], "th") ?>" alt="image" class="imaged w100">
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
                    <div class="header-large-title">
                        <h1 class="title">Headline Berita</h1>
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
                    <!-- Iklan <?= $daerah['site_title']?> -->
                </div>
                <!-- * Iklan -->
            </div>
        </div>
    </div>
    <!-- ! Content -->
</div>
<!-- * App Sidebar -->