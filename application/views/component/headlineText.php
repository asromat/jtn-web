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