<!-- Slider Headline -->
<div class="carousel carousel-full owl-carousel owl-theme">
    <?php for ($x = 1; $x <= 15; $x++) {; ?>
        <?php if ($daerah['ads'.$x] != null  and strpos(file_get_contents("https://pasangiklan.jatimtimes.com/amb/ser.php?f=".$daerah['ads'.$x]),"pasangiklan.jatimtimes.com") !== false) {?>
        <div class="item">
            <div class="card position-relative p-1">
                <!-- <img class="centerimg imgthumb" loading="lazy" src="<?= $this->fungsi->imageThumbnail($data['news_image_new'], "th") ?>" class="card-img-top img-fluid" alt="$data['news_title']"> -->
                <script src="https://pasangiklan.jatimtimes.com/amb/ser.php?f=<?=$daerah['ads'.$x]?>"></script>
            </div>
        </div>
        <?php } ?>
    <?php } ?>
</div>
<!-- * Slider Headline -->