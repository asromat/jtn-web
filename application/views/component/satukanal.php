<?php if (!isset($satukanal['status'])) { ?>
    <div class="header-large-title">
        <h1 class="title"><?= $kategori ?></h1>
        <h4 class="subtitle">Artikel terkait di <?= $kategori ?></h4>
    </div>
    <div class="card mt-1">
        <ul class="listview image-listview media">
            <?php foreach ($satukanal as $key => $data) {; ?>
                <li>
                    <a href="<?= base_url() ?>baca/<?= $data['news_id'] ?>/<?= $this->fungsi->timeToStr("Ymd", $data['news_datepub']) ?>/<?= $this->fungsi->timeToStr("his", $data['news_datepub']) ?>/<?= $this->fungsi->convertToSlug($data['news_title']) ?>">
                        <div class="item">
                            <div class="imageWrapper">
                                <img loading="lazy" src="<?= $this->fungsi->imageThumbnail($data['news_image_new'], "th") ?>" alt="image" class="imaged w100" onerror="this.onerror=null;this.src='https://cdnstatic.jatimtimes.com/noimg.webp';">
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