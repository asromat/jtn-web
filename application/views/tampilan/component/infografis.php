<div class="row mt-2">
    <div class="col-12">
        <div class="header-large-title">
            <h1 class="title">#Infografis</h1>
            <h4 class="subtitle">Nikmati Baca Berita dengan Visual</h4>
        </div>
        <div class="card-body">
            <div class="carousel-single owl-carousel owl-theme owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(-1033px, 0px, 0px); transition: all 0s ease 0s; width: 3161px; padding-left: 30px; padding-right: 30px;">
                        <?php foreach ($infografis as $key => $data) {; ?>
                        <div class="owl-item" style="width: 328.533px; margin-right: 16px;">
                            <div class="item">
                                <a href="<?= $data['url']?>">
                                <img src="<?= $data['infografis_url']?>" alt="<?= $data['news_caption']?>" class="imaged w-100">
                                </a>
                            </div>
                        </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>