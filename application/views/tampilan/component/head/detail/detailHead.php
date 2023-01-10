<link rel="canonical" href="{{ url('/')}}{{$_SERVER['REQUEST_URI'] }}">

<title><?= $data['news_title'] ?> - Jatimtimes</title>
<meta property="og:title" content="<?= $data['news_title'] ?>" />
<meta property="og:description" content="Berita terkini tentang <?= $data['news_title'] ?> - Jatimtimes" />
<meta property="og:url" content=" https://surabaya.jatimtimes.com " />
<meta property="og:site_name" content="Jatim TIMES" />
<meta property="og:image" itemprop="image" content="<?= $this->fungsi->imageThumbnail($data['news_image_new'], "th") ?>" />
<meta property="og:image:secure_url" itemprop="image" content="<?= $this->fungsi->imageThumbnail($data['news_image_new'], "th") ?>" />
<meta property="og:image:width" content="600" />
<meta property="og:image:height" content="315" />
<meta itemprop="name" content="<?= $data['news_title'] ?>">
<meta itemprop="description" content="Berita terkini tentang <?= $data['news_title'] ?> - Jatimtimes">
<meta itemprop="image" content="<?= $this->fungsi->imageThumbnail($data['news_image_new'], "th") ?>">

<meta name="copyright" content="Jatim TIMES">
<meta name="robots" content="index,follow">
<meta name="googlebot-news" content="index,follow" />
<meta name="googlebot" content="index,follow" />
<meta name="city" content="Jawa Timur">
<meta name="country" content="Indonesia">
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@JatimTIMES">
<meta name="twitter:title" content="<?= $data['news_title'] ?>">
<meta name="twitter:description" content="Berita terkini tentang <?= $data['news_title'] ?> - Jatimtimes">
<meta name="twitter:creator" content="@JatimTIMES">
<meta name="twitter:image" content="<?= $this->fungsi->imageThumbnail($data['news_image_new'], "th") ?>">


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