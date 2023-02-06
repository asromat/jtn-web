<?=
header("Content-Type: application/xml; charset=utf-8");
echo '<?xml version="1.0" encoding="utf-8"?>';
?>

<rss xmlns:atom="http://www.w3.org/2005/Atom" xmlns:googleplay="http://www.google.com/schemas/play-podcasts/1.0" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:dc="http://purl.org/dc/elements/1.1/" version="2.0">
    <channel>
        <title>Berita Terupdate dan Terpercaya Jawa Timur - <?= $daerah['site_title']?></title>
        <link><?= current_url() ?></link>
        <description><?= $daerah['site_title']?> - Berita terkini Jawa Timur. Dapatkan informasi terbaru dan terpercaya seputar politik, bisnis, teknologi dan hiburan.</description>
        <generator>https://jatimtimes.com</generator>
        <language>id</language>
        <webMaster>redaksijatimtimes@gmail.com</webMaster>
        <image>
            <title>Berita Terupdate dan Terpercaya Jawa Timur - <?= $daerah['site_title']?></title>
            <link>https://jatimtimes.com/</link>
            <url>https://cdnstatic.jatimtimes.com/logo/new/malang.png</url>
        </image>
        <pubDate><?php date_default_timezone_set("Asia/Jakarta"); echo date("D, d M Y H:i:s");?></pubDate>
        
        <?php foreach ($data as $key => $data) {; ?>
        <item>
            <title><?= xml_convert($data['news_title']) ?></title>
            <link><?= base_url() ?>baca/<?= $data['news_id'] ?>/<?= $this->fungsi->timeToStr("Ymd", $data['news_datepub']) ?>/<?= $this->fungsi->timeToStr("his", $data['news_datepub']) ?>/<?= $this->fungsi->convertToSlug($data['news_title']) ?></link>
            <pubDate><?= $this->fungsi->timeToStr("D, d M Y H:i:s", $data['news_datepub']) ?></pubDate>
            <description>
                <?= xml_convert(word_limiter($data['news_content'], 500)) ?>
            </description>
            <enclosure url="<?= $this->fungsi->imageThumbnail($data['news_image_new'], "th") ?>" length="10240" type="image/jpg"/>
            <author><?= $data['news_writer'] ?></author>
        </item>
        <?php } ?>
    </channel>
</rss>