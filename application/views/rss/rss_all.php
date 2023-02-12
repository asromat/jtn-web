<?=
header("Content-Type: application/xml; charset=utf-8");
echo '<?xml version="1.0" encoding="utf-8"?>';
?>

<rss xmlns:atom="http://www.w3.org/2005/Atom" xmlns:media="http://search.yahoo.com/mrss/" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:dc="http://purl.org/dc/elements/1.1/" version="2.0">
    <channel>
        <title>Berita Terupdate dan Terpercaya Jawa Timur - <?= $daerah['site_title']?></title>
        <link>https://<?= $daerah['domain']?></link>
        <description><?= $daerah['site_title']?> - Berita terkini Jawa Timur. Dapatkan informasi terbaru dan terpercaya seputar politik, bisnis, teknologi dan hiburan.</description>
        <generator>https://<?= $daerah['domain']?></generator>
        <language>id</language>
        <webMaster>redaksijatimtimes@gmail.com (jtn webmaster)</webMaster>
        <image>
            <title>Berita Terupdate dan Terpercaya Jawa Timur - <?= $daerah['site_title']?></title>
            <link>https://<?= $daerah['domain']?></link>
            <url>https://cdnstatic.jatimtimes.com/logo/new/malang.png</url>
        </image>
        <pubDate><?php date_default_timezone_set("Asia/Jakarta"); echo date("r");?></pubDate>
        <atom:link href="<?php echo "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" rel="self" type="application/rss+xml" />
        <?php foreach ($data as $key => $data) {; ?>
        <item>
            <title><?= xml_convert($data['news_title']) ?> <?= $daerah['site_title']?></title>
            <link><?= base_url() ?>baca/<?= $data['news_id'] ?>/<?= $this->fungsi->timeToStr("Ymd", $data['news_datepub']) ?>/<?= $this->fungsi->timeToStr("his", $data['news_datepub']) ?>/<?= $this->fungsi->convertToSlug($data['news_title']) ?></link>
            <pubDate><?= $this->fungsi->timeToStr("r", $data['news_datepub']) ?></pubDate>
            <description><![CDATA[ <img src="<?= $this->fungsi->imageThumbnail($data['news_image_new'], "th") ?>"/><?= xml_convert($data['news_title']) ?>]]></description>
            <content:encoded><![CDATA[ <img src="<?= $this->fungsi->imageThumbnail($data['news_image_new'], "th") ?>"/><?= xml_convert($data['news_title']) ?>]]></content:encoded>
            <enclosure url="<?= $this->fungsi->imageThumbnail($data['news_image_new'], "th") ?>" length="0" type="image/jpg"/>
            <guid><?= base_url() ?>baca/<?= $data['news_id'] ?>/<?= $this->fungsi->timeToStr("Ymd", $data['news_datepub']) ?>/<?= $this->fungsi->timeToStr("his", $data['news_datepub']) ?>/<?= $this->fungsi->convertToSlug($data['news_title']) ?></guid>
            
        </item>
        <?php } ?>
        
    </channel>
</rss>