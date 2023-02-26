<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- App Capsule -->
<style>
    .main-page {
        padding-left: 10px;
        padding-right: 10px;
    }

    .post-body p {
        font-size: 18px;
        line-height: 29px;
        margin: 0 0 32px 0;
        font-weight: 400;
        color: #424242;
    }
</style>
<div id="appCapsule">
    <!-- Main Navbar -->
    <?php $this->view("element/main-nav-bar") ?>
    <!-- ! Main Navbar -->
    <!-- Content -->
    <div class="main-page">
        <!-- adsense Atas -->
        <div>
            <div id="google-ads-1"></div>
            <script type="text/javascript">
                /* Calculate the width of available ad space */
                ad = document.getElementById('google-ads-1');

                if (ad.getBoundingClientRect().width) {
                    adWidth = ad.getBoundingClientRect().width; // for modern browsers
                } else {
                    adWidth = ad.offsetWidth; // for old IE
                }

                /* Replace ca-pub-XXX with your AdSense Publisher ID */
                google_ad_client = "ca-pub-9791561448547714";

                /* Replace 1234567890 with the AdSense Ad Slot ID */
                google_ad_slot = "5345222021";

                /* Do not change anything after this line */
                if (adWidth >= 728)
                    google_ad_size = ["728", "90"]; /* Leaderboard 728x90 */
                else if (adWidth >= 468)
                    google_ad_size = ["320", "100"]; /* Banner (468 x 60) */
                else if (adWidth >= 336)
                    google_ad_size = ["336", "280"]; /* Large Rectangle (336 x 280) */
                else if (adWidth >= 300)
                    google_ad_size = ["300", "250"]; /* Medium Rectangle (300 x 250) */
                else if (adWidth >= 250)
                    google_ad_size = ["250", "250"]; /* Square (250 x 250) */
                else if (adWidth >= 200)
                    google_ad_size = ["200", "200"]; /* Small Square (200 x 200) */
                else if (adWidth >= 180)
                    google_ad_size = ["180", "150"]; /* Small Rectangle (180 x 150) */
                else
                    google_ad_size = ["125", "125"]; /* Button (125 x 125) */

                document.write(
                    '<ins class="adsbygoogle" style="display:inline-block;width:' +
                    google_ad_size[0] + 'px;height:' +
                    google_ad_size[1] + 'px" data-ad-client="' +
                    google_ad_client + '" data-ad-slot="' +
                    google_ad_slot + '"></ins>'
                );

                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            <script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js">
            </script>
            <!-- adsense atas -->

        </div>
        <!-- Tutup Adsense Atas -->
        <div class="row">
            <div class="col-12" style="color:#000;">
                <nav aria-label="breadcrumb" class="mt-3">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="<?= base_url() ?>"><ion-icon name="home-outline"></ion-icon></a> / Baca / <?= $kategori ?>
                        </li>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <!-- Sisi kiri -->
            <div class="col-12 col-lg-8">
                <div class="p-2 bg-white rounded shadow-sm">
                    <a href="<?= base_url() ?>/kanal/<?= $kategori ?>"><span class="badge badge-primary bg-tia50000 text-uppercase mb-1 kater" id="kater"><?= $kategori ?></span></a>
                    <span class="badge badge-warning bg-tia50000 text-uppercase mb-1 kater" id="kater"><?= $data['news_subtitle'] ?></span>
                    <!-- <a href="#" class="d-block text-primary fn-poppins font-italic mt-1">OTT KPK di MA</a> -->
                    <h1><?= $data['news_title'] ?></h1>
                    <div>
                        <p font-size="15px">
                            <b>Penulis</b> : <?= $data['news_writer'] ?> - <b>Editor :</b> <?= $editor ?>
                        </p>
                    </div>
                    <p class="float-right text-muted"><?= $this->fungsi->timeToStr("d - M - Y, h:i", $data['news_datepub']) ?></p>
                    <div class="ss-box ss-circle" data-ss-content="false" data-ss-social="facebook, whatsapp, twitter, telegram"></div>
                </div>
                <div class="bg-white mt-2">
                    <figure class="figure shadow-sm" style="width: 100%; height:auto;" align="center">
                        <img loading="lazy" src="<?= $this->fungsi->imageThumbnail($data['news_image_new'], "md") ?>" class="rounded-top img-fluid" alt="<?= $data['news_caption'] ?>" style="width: auto; height:auto" onerror="this.onerror=null;this.src='https://cdnstatic.jatimtimes.com/noimg.webp';">
                        <figcaption class="figure-caption bg-times text-light text-center p-1 rounded-bottom"><?= $data['news_caption'] ?></figcaption>
                    </figure>
                </div>
                <div class="blog-post mt-1" style="width: 100%;">
                    <div class="post-body">
                        <?= $data['news_content'] ?>
                    </div>
                    <hr>
                    <h3>Topik</h3>
                    <p>
                        <a href="<?= base_url("kanal") ?>/<?= $kategori ?>"><span class="badge badge-primary"><?= $kategori ?></span></a>
                        <?php foreach ($this->fungsi->showTag($data['news_tags']) as $tag) {; ?>
                            <a href="<?= base_url("tag") ?>/<?= $tag ?>"><span class="badge badge-warning"><?= $tag ?></span></a>
                        <?php } ?>
                    </p>
                    <hr>
                    <div class="row">
                        <!-- <div class="col-2">
                            <img loading="lazy" src="https://lh3.googleusercontent.com/_x0eP5LbSX9BWgkmwRHSJXe8lgn7FyrfyM5P0kNJyiTqcJFHn-WJzCo8P_bs5VnwZw=w300" class="mr-3" alt="Jatim Times Network" width="100px">
                        </div> -->
                        <div class="col-10">
                            <img src="https://risetcdn.jatimtimes.com/images/2021/10/22/Logo1-verif-jt-dp2x1bd16774bef5bb63.png" width="200px" alt="JatimTimes Media Terverifikasi Dewan Pers" loading="lazy" fetchpriority="high">
                            <br>
                            <h3 style="font-size: 20px;">UPDATE BERITA JATIM TIMES NETWORK</h3>
                            <p>
                                Dapatkan update berita pilihan dan breaking news setiap hari dari JatimTIMES.com dengan klik <strong><a href="https://news.google.com/publications/CAAqBwgKMPO4nQswhMO1Aw?hl=id&gl=ID&ceid=ID%3Aid" target="_blank">Langganan Google News Jatimtimes</a></strong> atau bisa menginstall aplikasi <?= $daerah['site_title'] ?> News melalui Tombol Berikut :
                            </p>
                            <button id="installApp" class="btn btn-info btn-block"><ion-icon name="logo-android"></ion-icon>Install Aplikasi <?= $daerah['site_title'] ?> News</button>
                            <p id="ketInstallApp" style="display: none" class="alert alert-success">
                                Silahkan tekan Install. Jika tidak muncul pesan pop up, artinya aplikasi <?= $daerah['site_title'] ?> News sudah terinstall pada perangkat anda. Silahkan buka di menu utama hp atau desktop anda
                            </p>
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
                <script>
                    $(function() {
                        $('.samEmbed').each(function() {
                            $(this).attr('src', $(this).data('src')).removeAttr('data-src');
                        });
                    });
                </script>
            </div>
            <!-- ! Sisi Kiri -->
            <!-- Sisi kiri -->
            <div class="col-12 col-lg-4">
                <!-- Satu Kanal -->
                <?php $this->load->view("component/satukanal") ?>
                <!-- * Satu Kanal -->
                <!-- Fokus Berita -->
                <div class="card mt-3">
                    <?php $this->load->view("component/fokus") ?>
                </div>
                <!-- * Fokus Berita -->
                <!-- Berita Populer -->
                <div class="card mt-2">
                    <?php $this->load->view("component/headlineText") ?>
                </div>
                <!-- * Berita Populer -->
                <!-- Iklan -->
                <!--<div class="adbox adbox-responsive mt-4">-->
                <!--    <script src="https://pasangiklan.jatimtimes.com/amb/ser.php?f=<?= $daerah['ads6'] ?>"></script>-->
                <!--</div>-->
                <!-- * Iklan -->
            </div>
            <!-- ! Sisi Kiri -->
        </div>
        <!-- ! Content -->
    </div>
    <!-- * App Sidebar -->
</div>