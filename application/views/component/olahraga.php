<div class="header-large-title mt-5">
    <h1 class="title">Olahraga</h1>
</div>
<div class="card mt-1">
    <ul class="listview image-listview media">
        <?php foreach ($olahraga as $key => $data) {; ?>
            <li>
                <a href="<?= base_url() ?>baca/<?= $data['news_id'] ?>/<?= $this->fungsi->timeToStr("Ymd", $data['news_datepub']) ?>/<?= $this->fungsi->timeToStr("his", $data['news_datepub']) ?>/<?= $this->fungsi->convertToSlug($data['news_title']) ?>">
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