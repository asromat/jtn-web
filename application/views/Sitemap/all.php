<?php echo'<?xml version="1.0" encoding="UTF-8" ?>' ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:news="http://www.google.com/schemas/sitemap-news/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
        
        <?php foreach ($data as $key => $data) {; ?>
  <url>
   <loc><?= base_url() ?>baca/<?= $data['news_id'] ?>/<?= $this->fungsi->timeToStr("Ymd", $data['news_datepub']) ?>/<?= $this->fungsi->timeToStr("his", $data['news_datepub']) ?>/<?= $this->fungsi->convertToSlug($data['news_title']) ?></loc>
   <news:news>
   <news:publication>
     <news:name><![CDATA[ <?= $daerah['site_title']?> ]]></news:name>
     <news:language>id</news:language>
   </news:publication>
   <news:publication_date><?= $this->fungsi->timeToStr("Y-m-d", $data['news_datepub']) ?></news:publication_date>
     <news:title><?= $data['news_title'] ?></news:title>
    </news:news>
    <?php } ?>
  </url>
</urlset>

