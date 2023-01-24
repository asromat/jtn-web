<!doctype html>
<html amp lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title><?= $data['news_title'] ?> - <?= $daerah['domain'] ?></title>
    <meta name="title" content="<?= $data['news_title'] ?> - <?= $daerah['domain'] ?>" itemprop="name" />
    <meta name="description" content="<?= $data['news_title'] ?>" itemprop="description" />
    <meta name="news_keywords" content="<?= str_replace([' ',',,'],[',',','],$data['news_title'])?>" />
    <meta name="Content-language" content="id" />
    <meta name="author" content="<?= $data['news_writer'] ?>" />
    <meta name="language" content="id" />
    <meta name="geo.country" content="id" />
    <meta name="geo.placename" content="Indonesia" />
    <meta http-equiv="content-language" content="In-Id" />
    <meta name="standout" content="<?= current_url();?>" />
    <meta name="content_category" content="<?= $kategori ?>" />
    <meta name="content_author" content="<?= $data['news_writer'] ?>" />
    <meta name="googlebot-news" content="index,follow" />
    <meta name="googlebot" content="index,follow" />
    <meta name="robots" content="index, follow">
    <meta name="google-site-verification" content="{{ config('global.GA_ANLYCT_ID') }}" />

    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-user-notification" src="https://cdn.ampproject.org/v0/amp-user-notification-0.1.js"></script>


    <link rel="shortcut icon" href="https://www.jatimtimes.com/assetsss/favicon.ico" type="image/x-icon" />
    <link rel="canonical" href="<?= current_url();?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black">


    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "NewsArticle",
            "headline": "<?= $data['news_title'] ?>",
            "datePublished": "<?= $data['news_datepub'] ?>",
            "dateModified": "<?= $data['news_datepub'] ?>",
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "<?= current_url();?>"
            },
            "description": "<?= $data['news_title'] ?>",
            "image": {
                "@type": "ImageObject",
                "url": "{{ $detail[0]->news_image_new }}",
                "width": 620,
                "height": 400
            },
            "author": {
                "@type": "Person",
                "name": "<?= $data['news_writer'] ?>",
                "url": "https://jatimtimes.com"
            },
            "publisher": {
                "@type": "Organization",
                "name": "<?= $daerah['site_title'] ?>",
                "url": "https://jatimtimes.com",
                "logo": {
                    "@type": "ImageObject",
                    "url": "<?= $daerah['logo'] ?>"

                }
            }
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "NewsArticle",
            "mainEntityOfPage": "<?= current_url();?>",
            "headline": "<?= $data['news_title'] ?>",
            "alternativeHeadline": "<?= $data['news_title'] ?>",
            "image": "{{ $detail[0]->news_image_new}}",
            "author": {
                "@type": "Person",
                "name": "<?= $data['news_writer'] ?>",
                "url": "https://jatimtimes.com"
            },
            "editor": "<?= $editor?>",
            "genre": "<?= $kategori?>",
            "keywords": "<?= str_replace([' ',',,'],[',',','],$data['news_title'])?>",
            "publisher": {
                "@type": "Organization",
                "name": "Media Online <?= $daerah['site_title'] ?>",
                "logo": {
                    "@type": "ImageObject",
                    "url": "<?= $daerah['logo'] ?>"
                }
            },
            "url": "<?= current_url();?>",
            "datePublished": "{{ $detail[0]->news_datepub }}",
            "dateCreated": "{{ $detail[0]->news_datepub }}",
            "dateModified": "{{ $detail[0]->news_datepub }}",
            "description": "{{$detail[0]->news_description }}"
        }
    </script>



    <style>
        ins.adsbygoogle[data-ad-status="unfilled"] {
            display: none !important;
        }

        .postBody p {
            color: #424242;
            font-size: 18px;
            line-height: 29px;
            margin: 0 0 32px 0;
            font-weight: 400;
        }

        .tgl {
            color: #2b2c2f
        }

        figure figcaption {
            color: #343a40
        }
    </style>

    <style amp-custom>
        body {
            font-family: 'Roboto', sans-serif;
            font-size: 14px;
            background-color: #FFFFFF;
        }

        .sidebar-open-btn {
            font-size: 2em;
            display: none;
        }

        @media (max-width: 500px) {
            #mega-menu {
                display: none;
            }

            .sidebar-open-btn {
                display: block;
            }
        }

        /*Color Schemes and Colors*/
        .navbar-first,
        .footer__app-store,
        .detail__newstag {
            display: flex
        }

        .list-content__item,
        .nav,
        .detail__body-tag .nav,
        .nav--center {
            display: flex;
            flex-flow: wrap
        }

        .flex-between,
        .box__header,
        .page__header,
        .page__breadcrumb,
        .page__header-amp {
            justify-content: space-between;
            display: flex;
            flex-flow: wrap;
            align-items: center
        }

        .text-center,
        .cb-mostpop .text-list__data,
        .detail__newstag,
        .icon-item {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .media__icon,
        .media--image-radius .media__image,
        .dropdown-menu__content,
        .detail__body-tag .nav__item,
        .copy_url .notif {
            border-radius: 4px
        }

        .media__author-image-avatar,
        .circle {
            border-radius: 50%
        }

        .header-tag,
        .header-tag .nav__item a {
            color: #FFF
        }

        .color-blue-base {
            color: #21409A
        }

        .header-tag .nav__item--active a:before {
            background: #FFF
        }

        .header-tag {
            background: #21409A
        }

        .menu-open .menu-button span {
            background: red
        }

        .dropdown {
            position: relative
        }

        .dropdown-wrap {
            display: inline-block;
            position: relative
        }

        .dropdown-menu {
            text-align: left;
            padding-top: 4px;
            display: none;
            min-width: 150px;
            position: absolute;
            top: 100%;
            left: -8px;
            visibility: hidden;
            z-index: 3
        }

        .dropdown-menu__content {
            min-width: 200px;
            position: relative;
            margin: 8px;
            background: #FFF;
            box-shadow: 0 0 8px 0 rgba(0, 0, 0, .15)
        }

        .dropdown-menu__content:after {
            content: "";
            position: absolute;
            left: 28px;
            width: 0;
            height: 0;
            top: 0;
            border: 6px solid #000;
            border-color: transparent transparent #FFF #FFF;
            transform-origin: 0 0;
            transform: rotate(135deg);
            box-shadow: -2px 2px 4px 0 rgba(0, 0, 0, .05)
        }

        .dropdown-menu__content-article {
            width: 300px;
            padding: 12px
        }

        .dropdown-menu--right .dropdown-menu__content:after {
            left: auto;
            right: 2px
        }

        .dropdown-menu--right {
            left: auto;
            right: -8px
        }

        .dropdown-menu--top {
            top: unset;
            bottom: 100%;
            margin-top: 0;
            margin-bottom: 4px
        }

        .dropdown-menu--top .dropdown-menu__content:after {
            transform: rotate(-45deg);
            top: 100%;
            right: 12px
        }

        .dropdown-aktif>.dropdown-menu {
            display: block;
            visibility: visible;
            -webkit-animation: dropdown-in 0.2s cubic-bezier(.39, .575, .565, 1) both;
            animation: dropdown-in 0.2s cubic-bezier(.39, .575, .565, 1) both
        }

        .dropdown-aktif .dropdown .icon-chevron-down,
        .dropdown-aktif .dropdown .icon-chevron-up {
            transform: rotate(180deg)
        }

        .dropdown>.icon {
            transition: all 0.25s ease-in-out 0s
        }

        @keyframes dropdown-in {
            0% {
                margin-top: 30px;
                opacity: 0
            }

            100% {
                margin-top: 0;
                opacity: 1
            }
        }

        .box,
        .detail__media,
        .detail__anchor,
        .detail__multiple-box,
        .detail__multiple-paging {
            margin-left: -18px;
            margin-right: -18px;
            padding-left: 18px;
            padding-right: 18px
        }

        .box {
            position: relative;
            word-wrap: break-word;
            padding-top: 8px;
            padding-bottom: 8px;
            border-top: 3px solid #f0f0f0;
            display: flex;
            flex-flow: column
        }

        .box__header {
            margin-top: 8px;
            margin-bottom: 8px;
            font-size: 23px
        }

        .box__title {
            margin: 0;
            color: var(--kuler-1);
            font-size: 18px
        }

        .box {
            margin-bottom: 24px
        }

        .box__header a {
            padding: 0
        }

        .page__header {
            margin-top: 12px
        }

        .page__breadcrumb {
            color: #999;
            font-size: 12px
        }

        .page__breadcrumb a {
            color: #999
        }

        .page__breadcrumb a {
            position: relative
        }

        .page__breadcrumb a:after {
            content: "/";
            padding: 0 4px
        }

        .page__breadcrumb a:last-child:after {
            content: ""
        }

        .page__breadcrumb a:hover {
            color: #333
        }

        .sticky {
            position: sticky;
            position: -webkit-sticky;
            top: 46px
        }

        .nav {
            position: relative;
            list-style: none;
            margin: 0;
            padding: 0;
            font-size: 14px
        }

        .nav a {
            display: block
        }

        .nav__item {
            position: relative;
            padding: 0
        }

        .nav__item a {
            padding: 4px 24px 4px 0
        }

        .footer .nav__item a {
            padding: 0 8px;
            position: relative;
            margin-bottom: 8px;
            color: #666
        }

        .footer .nav__item a:after {
            content: ".";
            position: absolute;
            top: -12px;
            right: -4px;
            font-size: 23px;
            font-weight: 400
        }

        .navbar-shadow .navbar--scroll .nav__item:first-child {
            padding-left: 16px
        }

        .navbar-shadow .navbar--scroll .nav__item:last-child {
            padding-right: 16px
        }

        .navbar-first .nav__item:last-child a {
            padding-right: 0
        }

        .navbar-first .nav__item {
            white-space: nowrap
        }

        .navbar-first .nav__item--active a {
            color: var(--kuler-1)
        }

        .footer .nav__item:last-child a:after {
            content: ""
        }

        .detail__body-tag .nav__item {
            background: #f0f0f0;
            margin: 4px;
            display: block;
            padding: 4px 16px;
            color: #000;
            font-size: 12px
        }

        .footer .nav {
            margin: 24px 0
        }

        .navbar--scroll .nav {
            padding-top: 4px;
            padding-bottom: 4px
        }

        .navbar-first .nav {
            height: 45px
        }

        .navbar-first .nav {
            overflow-x: auto;
            display: flex;
            flex-flow: nowrap
        }

        .detail__body-tag .nav {
            margin: 8px;
            margin-left: -4px;
            margin-right: -4px
        }

        .nav--center {
            justify-content: center
        }

        .navbar {
            position: relative
        }

        .header .navbar {
            height: 35px;
            overflow: hidden
        }

        .navbar--scroll {
            padding-top: 0;
            overflow-x: hidden;
            overflow-y: scroll;
            -webkit-overflow-scrolling: touch
        }

        .navbar-shadow {
            text-align: center;
            position: relative;
            margin-left: -10px;
            margin-right: -10px;
            background: #f5f5f5;
        }

        .navbar-shadow:before {
            content: "";
            width: 18px;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 1;
            background: #fff;
            background: linear-gradient(to right, white 25%, rgba(255, 255, 255, 0) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='$start_color', endColorstr='$end_color', GradientType=1);
            position: absolute
        }

        .navbar-shadow:after {
            content: "";
            width: 24px;
            height: 100%;
            top: 0;
            right: 0;
            z-index: 1;
            background: #fff;
            background: linear-gradient(to left, white 25%, rgba(255, 255, 255, 0) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='$start_color', endColorstr='$end_color', GradientType=1);
            position: absolute
        }

        .back-top {
            width: 40px;
            height: 40px;
            position: fixed;
            right: 8px;
            bottom: 60px;
            background: #ccc;
            background: rgba(204, 204, 204, .5);
            color: #FFF;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 22px;
            z-index: 10
        }

        .back-top a {
            display: inherit;
            color: #FFF
        }

        .list-content--column .list-content__item:last-child {
            margin-bottom: 12px
        }

        .dropdown-wrap .list-content__item:last-child {
            border-bottom: none
        }

        .list-content--column .list-content__item {
            padding-bottom: 12px;
            margin-bottom: 12px
        }

        .dropdown-wrap .list-content__item {
            border-bottom: 1px solid #f0f0f0
        }

        .list-content__title {
            font-size: 16px
        }

        .detail__media .media__image img {
            width: 100%;
            max-width: none
        }

        .media__title {
            font-size: 16px
        }

        .list-content--column .media__title {
            font-size: 14px
        }

        .media__subtitle,
        .detail__subtitle {
            color: var(--kuler-3);
            font-size: 14px
        }

        .media__subtitle a,
        .detail__subtitle a {
            color: var(--kuler-3)
        }

        .media__subtitle a:hover,
        .detail__subtitle a:hover {
            text-decoration: underline
        }

        .cb-mostpop .media__date {
            margin-left: 37px
        }

        .media--left .media__image {
            margin: 0 12px 0 0
        }

        .media--left .media__image {
            width: 100px
        }

        .cb-mostpop .text-list {
            align-items: normal
        }

        .cb-mostpop .text-list__data {
            margin-right: 12px;
            margin-top: -4px;
            font-size: 20px;
            color: #999
        }

        .btn--blue-base {
            background: #21409A;
            color: #FFF
        }

        .btn--blue-base:hover {
            color: #FFF
        }

        .btn--orange-light-1 {
            background: #ef672f;
            color: #FFF
        }

        .btn--orange-light-1:hover {
            color: #FFF
        }

        .footer {
            text-align: center;
            font-size: 14px;
            background: #e6e6e6;
            color: #666
        }

        .footer__logo {
            margin-top: 24px;
            display: inline-block
        }

        .footer__logo img {
            width: 160px
        }

        .footer__social {
            margin: 0 0 20px 0
        }

        .footer__copy {
            display: inline-block;
            margin-bottom: 64px
        }

        .footer__border {
            height: 4px;
            display: block
        }

        .footer-title {
            font-size: 12px
        }

        .footer-title__partof {
            margin-top: 8px;
            color: #666;
            padding: 4px 0
        }

        .footer-title__partof img {
            width: 80px;
            vertical-align: bottom;
            margin: 0 0 3px 3px
        }

        .footer__get-app {
            font-size: 12px
        }

        .footer__app-store {
            justify-content: center;
            align-items: center
        }

        .footer__app-store img {
            margin: 16px 2px;
            height: 34px
        }

        @media (max-width:359px) {
            .footer__app-store img {
                height: 28px
            }
        }

        .detail__header {
            text-align: center;
            padding: 16px 0;
            line-height: 1
        }

        .detail__title {
            font-size: 23px;
            color: var(--kuler-1);
            margin-bottom: 12px
        }

        .dropdown-wrap .detail__title {
            font-size: 14px;
            padding-bottom: 12px;
            margin: 0;
            color: var(--kuler-1)
        }

        .detail__date {
            display: inline-block;
            margin-top: 8px;
            color: #666;
            font-size: 12px
        }

        .detail__subtitle {
            font-size: 18px;
            margin-bottom: 0
        }

        .detail__author {
            margin-top: 8px;
            margin-bottom: 8px;
            font-size: 12px;
            color: #666
        }

        .detail__label {
            color: var(--kuler-3)
        }

        .detail__media {
            padding: 0;
            position: relative
        }

        .detail__media.no-strech {
            margin: 0
        }

        .detail__media-image>img {
            width: 100%;
            max-width: none;
            position: relative;
            z-index: 2
        }

        .detail__media-caption {
            display: inline-block;
            margin-top: 4px;
            color: #666;
            font-size: 12px;
            padding: 4px 18px
        }

        .no-strech .detail__media-caption {
            padding-left: 0;
            padding-right: 0
        }

        .detail__body {
            margin-top: 16px
        }

        .detail__body-text>a,
        .detail__body-text p>a {
            color: var(--kuler-1)
        }

        .detail__body-text img {
            max-width: 100%
        }

        .detail__body-text>p:nth-of-type(1) {
            display: inline
        }

        .detail__body-text>p:nth-of-type(2) {
            margin-top: 16px
        }

        .detail__body-text>h1 {
            font-size: 23px
        }

        .detail__body-text>h2 {
            font-size: 20px
        }

        .detail__body-text>h3 {
            font-size: 18px
        }

        .detail__body-text>h4 {
            font-size: 16px
        }

        .detail__body-text>h6 {
            font-size: 12px
        }

        .detail__share {
            display: flex;
            align-items: center;
            font-size: 14px;
            justify-content: center
        }

        .detail__anchor {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #f0f0f0;
            margin-bottom: 12px;
            margin-top: 12px
        }

        .detail__multiple .detail__anchor {
            font-size: 14px;
            text-align: left;
            display: inline-block;
            background: none
        }

        .detail__multiple-box .detail__anchor {
            padding-right: 0;
            padding-left: 0;
            margin-right: 0;
            margin-left: 0
        }

        .detail__anchor a {
            color: #fff
        }

        .detail__anchor-icon {
            border-radius: 50%;
            width: 30px;
            height: 30px;
            background: #999;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 8px 0
        }

        .detail__multiple .detail__anchor-icon {
            border-radius: 50%;
            width: 30px;
            height: 30px;
            background: #ccc;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 8px 2px;
            color: #FFF
        }

        .detail__anchor-icon.detail__anchor-icon--active {
            background: var(--kuler-1)
        }

        .detail__anchor-numb {
            color: #ef672f
        }

        .detail__multiple .detail__anchor-numb {
            border-radius: 50%;
            background: #ccc;
            color: #FFF;
            width: 25px;
            height: 25px;
            display: inline-block;
            margin: 0;
            text-align: center;
            line-height: 27px
        }

        .detail__multiple .detail__anchor-numb.detail__anchor-numb--active {
            color: #FFF;
            background: var(--kuler-1)
        }

        .detail__newstag {
            margin: 16px 0
        }

        .detail__newstag-title {
            font-size: 14px;
            flex: 1
        }

        .detail__newstag img {
            margin-left: 16px
        }

        .detail__multiple {
            margin: 32px 0
        }

        .detail__multiple a {
            color: #000
        }

        .detail__multiple-box {
            border-bottom: 1px solid #e6e6e6;
            border-top: 1px solid #e6e6e6;
            margin-top: 8px;
            margin-bottom: 8px
        }

        .detail__multiple-nav {
            margin: 0;
            padding: 12px 8px 12px 0
        }

        .detail__multiple-nav .media--left {
            align-items: center
        }

        .detail__multiple .btn--blue-base {
            color: #fff
        }

        .detail__multiple-paging {
            padding: 12px 18px 0;
            border-top: 1px solid #f0f0f0;
            color: #999;
            font-size: 14px
        }

        .linksisip {
            position: relative;
            margin: 8px 0;
            border-left: 5px solid #21409A
        }

        .linksisip td {
            border: none;
            padding: 0
        }

        .linksisip strong {
            font-size: 14px
        }

        .linksisip a {
            font-size: 16px;
            color: var(--kuler-1);
            display: block
        }

        .linksisip .lihatjg {
            padding-left: 20px
        }

        .linksisip .lihatjg strong {
            display: block;
            margin-bottom: 4px
        }

        .linksisip .lihatjg a {
            display: block
        }

        .pic_artikel_sisip_table {
            text-align: center;
            margin-bottom: 20px;
            color: #666;
            font-size: 12px;
            line-height: 120%;
            width: 100%;
            table-layout: fixed
        }

        .pic_artikel_sisip_table td {
            border: none;
            padding: 0
        }

        .pic_artikel_sisip {
            text-align: center;
            color: #999;
            font-size: 12px;
            line-height: 120%;
            width: 100%
        }

        .pic_artikel_sisip .pic {
            position: relative;
            display: inline-block;
            max-width: 100%;
            text-align: center
        }

        .pic_artikel_sisip .pic img {
            position: relative;
            max-width: 100%;
            max-height: 400px;
            height: auto;
            overflow: hidden;
            display: block;
            top: auto;
            left: auto;
            transform: none;
            margin-left: auto;
            margin-right: auto
        }

        .pic_artikel_sisip .pic>span {
            position: relative;
            display: block;
            z-index: 1;
            padding-top: 8px;
            padding-bottom: 8px;
            border-bottom: 1px solid #e6e6e6
        }

        .copy_url {
            position: relative
        }

        .copy_url .notif {
            display: inline-block;
            padding: 8px;
            position: absolute;
            bottom: 0%;
            left: 50%;
            width: auto;
            white-space: nowrap;
            z-index: 5;
            font-size: 14px;
            background: red;
            color: #FFF;
            opacity: 0;
            filter: alpha(opacity=0);
            transform: translateX(-50%) scale(0);
            transition: all 0.3s ease-in-out 0s
        }

        .copy_url .notif:before {
            position: absolute;
            content: "";
            border: 3px solid;
            right: 50%;
            margin: 0 -7px 0 0;
            top: 100%;
            border-top: 8px solid red;
            border-left: 7px solid transparent;
            border-right: 7px solid transparent;
            border-bottom: none
        }

        .copy_url .notif.url_copied {
            opacity: 1;
            filter: alpha(opacity=100);
            display: inline-block;
            bottom: 135%;
            transform: translateX(-50%) scale(1)
        }

        @keyframes live {
            0% {
                background: #fcc43f
            }

            50% {
                background: red
            }

            100% {
                background: #fcc43f
            }
        }

        .icon-item {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin: 5px 4px;
            width: 32px;
            height: 32px;
            vertical-align: middle;
            font-size: 20px;
            color: #FFF;
            border-radius: 100%
        }

        .icon-item:hover {
            color: #FFF
        }

        .detail .icon-item {
            width: 35px;
            height: 35px;
            padding: 2px
        }

        .icon-item__fb {
            background: #3C5A99
        }

        .icon-item__tw {
            background: #1DA1F2
        }

        .icon-item__ig {
            background: #5851DB;
            background: radial-gradient(ellipse at left bottom, #ffdc80 15%, #e1306c 55%, #5851db 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='$top_color', endColorstr='$bottom_color', GradientType=1)
        }

        .icon-item__in {
            background: #0077B5
        }

        .icon-item__yt {
            background: red
        }

        .icon-item__wa {
            color: #FFF;
            background: #25D366
        }

        .icon-item__tele {
            color: #FFF;
            background: #08C
        }

        .icon-item--light {
            color: #666;
            background: #e6e6e6
        }

        .icon-item--light.icon-item:hover {
            color: #000
        }

        .icon-item--light.icon-item__fb,
        .icon-item--light.icon-item__fb:hover {
            color: #3C5A99
        }

        .icon-item--light.icon-item__tw,
        .icon-item--light.icon-item__tw:hover {
            color: #1DA1F2
        }

        .icon-item--light.icon-item__in,
        .icon-item--light.icon-item__in:hover {
            color: #0077B5
        }

        .footer__border {
            background: #21409A;
            background: linear-gradient(135deg, #21409a 50%, #007cbd 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='$start_color', endColorstr='$end_color', GradientType=1)
        }

        .static {
            margin-bottom: 16px
        }

        .user-log__login,
        .user-log__name,
        .nav-framebar__title {
            font-weight: 600
        }

        .nav-framebar__title {
            font-family: Montserrat-FF, Arial, Tahoma, sans-serif
        }

        .box-overlay {
            border-radius: 4px
        }

        .box-overlay {
            position: fixed;
            overflow: visible;
            top: 53px;
            right: 0;
            bottom: 0;
            left: 0;
            margin: 12px;
            padding: 8px;
            z-index: 100;
            background: #FFF;
            box-shadow: 0 0 8px 0 rgba(0, 0, 0, .15)
        }

        .box-overlay__header {
            position: relative;
            justify-content: space-between;
            padding-bottom: 8px;
            border-bottom: 1px solid #f0f0f0;
            display: flex;
            flex-flow: wrap;
            align-items: center
        }

        .box-overlay__header-nav {
            position: absolute;
            right: 0;
            z-index: 3
        }

        .box-overlay__header-nav .icon {
            font-size: 24px
        }

        .box-overlay--arrow-logo:after {
            content: "";
            position: absolute;
            width: 0;
            height: 0;
            top: 0;
            left: 104px;
            border: 8px solid #000;
            border-color: transparent transparent #FFF #FFF;
            transform-origin: 0 0;
            transform: rotate(135deg);
            box-shadow: -3px 3px 3px 0 rgba(0, 0, 0, .05)
        }

        .box-overlay__body {
            position: absolute;
            top: 50px;
            right: 8px;
            bottom: 8px;
            left: 8px;
            overflow-x: scroll;
            overflow-y: scroll;
            -webkit-overflow-scrolling: touch
        }

        .box-menu {
            visibility: hidden;
            opacity: 0;
            filter: alpha(opacity=0);
            transition: all 0.3s ease-in-out 0s
        }

        .user-log .media__author {
            margin: 0
        }

        .user-log .media__author-image-avatar {
            width: 35px;
            height: 35px
        }

        .user-log__login {
            color: #21409A;
            font-size: 14px
        }

        .nav-framebar {
            padding: 8px 0;
            border-top: 1px solid #f0f0f0
        }

        .nav-framebar .nav {
            display: block;
            font-size: 12px
        }

        .nav-framebar .nav__item {
            display: inline-block;
            width: 100%;
            vertical-align: top;
            white-space: normal
        }

        .nav-framebar .nav__item a {
            padding: 4px;
            color: #666;
            display: flex;
            align-items: center
        }

        .nav-framebar .nav__item-new {
            display: inline-block;
            padding: 0 4px;
            font-size: 8px;
            margin-left: 4px;
            line-height: normal;
            background: red;
            color: #FFF
        }

        .nav-framebar .nav ul {
            margin: 0;
            padding-left: 8px;
            list-style: none
        }

        .nav-framebar .nav--two-col {
            columns: 2;
            -webkit-columns: 2;
            -moz-columns: 2;
            -moz-column-gap: 0;
            column-gap: 0
        }

        .nav-framebar .nav.pl15 {
            padding-left: 15px;
            -moz-column-gap: 5px;
            column-gap: 5px
        }

        .nav-framebar__title {
            padding: 4px;
            margin-bottom: 8px;
            font-size: 14px;
            color: #333
        }

        .js-overlay {
            position: fixed;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 25;
            background: #000;
            background: rgba(0, 0, 0, .6);
            opacity: 0;
            filter: alpha(opacity=0);
            transition: all 0.3s ease-in-out 0s
        }

        @keyframes loader-content-allo {
            0% {
                top: 0;
                height: 10px
            }

            50%,
            100% {
                top: 5px;
                height: 3px
            }
        }

        :root {
            --theme-oto: #a03031;
            --theme-inet: #562b77
        }

        .tableSpec {
            max-width: 100%;
            width: 100%;
            color: #727374;
            font-size: 13px;
            overflow: hidden
        }

        .tableSpec tr td {
            border: 1px solid #f1f2f3;
            padding: 7px 10px
        }

        .tableSpec tr td:first-child {
            background: #f7f8f9;
            font-weight: 700;
            width: 40%
        }

        .tableSpec tr td:nth-child(2) {
            display: none
        }

        .tableSpec tr td.title {
            padding: 5px 10px;
            font-size: 16px;
            line-height: 1.5;
            background: none;
            font-weight: 400;
            color: #000
        }

        .tableSpec tr:hover td {
            background: #ffffe6
        }

        .tableSpec tr:hover td.title {
            background: none
        }

        .tableSpec tr:hover td.title--alt {
            background: #f7f8f9
        }

        .tableSpec__caption {
            font-weight: 700;
            font-size: 16px;
            line-height: 24px;
            margin-bottom: 10px;
            background: none;
            color: #222
        }

        .tableSpec__caption tr td {
            border: 0;
            padding: 0
        }

        .tableSpec__caption tr td:first-child {
            background: none
        }

        .tableSpec__caption tr:hover td {
            background: none
        }

        .tableSpec2 {
            max-width: 100%;
            width: 100%;
            font-size: 13px;
            overflow: hidden
        }

        .tableSpec2 tr td {
            border: 0;
            border-bottom: 1px solid #e6e6e6;
            padding: 7px 10px 7px 0;
            font-weight: 400;
            font-size: 14px;
            line-height: 20px;
            color: #000
        }

        .tableSpec2 tr td:first-child {
            width: 40%
        }

        .tableSpec2 tr td.title {
            width: auto;
            color: #000;
            font-style: normal;
            font-weight: 700;
            font-size: 16px;
            line-height: 24px;
            border: 0;
            padding: 15px 0
        }

        .tableSpec2 tr td.title--alt {
            font-weight: 700;
            font-size: 16px;
            padding: 15px 0
        }

        .tableSpec2.oto tr td.title {
            border-bottom: 2px solid var(--theme-oto)
        }

        .tableSpec2.oto tr td.title--alt {
            color: var(--theme-oto)
        }

        .tableSpec2.inet tr td.title {
            border-bottom: 2px solid var(--theme-inet)
        }

        .tableSpec2.inet tr td.title--alt {
            color: var(--theme-inet)
        }

        .resep-tabel {
            width: 100%;
            overflow: hidden;
            margin: 12px 0
        }

        .resep-tabel tr th {
            border-top: 2px solid #000
        }

        .resep-tabel tr th:first-child {
            border-left: 0
        }

        .resep-tabel tr th:last-child {
            border-right: 0
        }

        .resep-tabel tr td {
            border-top: 0
        }

        .resep-tabel tr td:first-child {
            border-left: 0
        }

        .resep-tabel tr td:last-child {
            border-right: 0
        }

        .resep-tabel-transparent {
            border: none;
            padding: 0;
            width: 100%
        }

        .resep-tabel-transparent tr td {
            padding: 0;
            padding-top: 5px;
            border: none
        }

        .resep-tabel.ingredients td {
            padding: 0
        }

        .resep-tabel.ingredients ul {
            padding: 0 0 0 16px
        }

        .resep-tabel.ingredients ul li {
            list-style: none;
            padding: 5px 0
        }

        .resep-tabel.ingredients ul li:before {
            padding-right: 5px;
            content: "\2713"
        }

        .resep-list__title {
            padding: 12px;
            background: #e6e6e6;
            font-size: 18px;
            margin-top: 24px
        }

        .place-table tr:first-child td:first-child {
            background: none
        }

        .place-table tr td {
            border: 1px solid #f0f0f0
        }

        .place-table tr td:first-child {
            background: #f0f0f0;
            color: #666
        }

        .place-table tr td li {
            font-size: 14px;
            padding: 0;
            padding-bottom: 4px
        }

        .resep-tabel--noline tr td {
            border: none
        }

        .resep-tabel--noline tr td:first-child {
            width: 20px
        }

        .table-resep {
            width: 100%;
            color: #333;
            border-spacing: 0;
            position: relative;
            border-top: 2px solid #5A5A5A;
            border-bottom: 2px solid #5A5A5A
        }

        .table-resep__detail {
            border-top: none
        }

        .table-resep__detail td {
            border: none;
            border-bottom: 1px solid #b3b3b3
        }

        .table-resep__detail td:first-child {
            width: 175px
        }

        .table-resep__detail td :nth-child(2) {
            width: 352px
        }

        .table-resep td {
            border: none;
            border-bottom: 1px solid #b3b3b3
        }

        .table-resep td:first-child {
            width: 230px
        }

        .table-resep td:nth-child(2) {
            width: 352px
        }

        .table-resep {
            width: 100%;
            color: #333;
            border-spacing: 0;
            position: relative;
            border-top: 2px solid #5A5A5A;
            border-bottom: 2px solid #5A5A5A
        }

        .table-resep td {
            font-weight: 700;
            padding: 15px 0;
            border-bottom: 1px solid #c3c3c3
        }

        .table-resep td:first-child {
            font-weight: 400
        }

        .table-resep td:nth-child(2) {
            width: 352px
        }

        .table-resep tr:last-child td {
            border-bottom: none
        }

        .table-resep.table-resep__howto td:first-child {
            font-weight: 700
        }

        .table-resep__detail {
            border-top: none
        }

        .table-resep__detail td:first-child {
            width: 175px
        }

        .table-resep__detail td:nth-child(2) {
            width: 352px
        }

        .table-resep__detail .recipe_title:after,
        .table-resep__detail .recipe_category:after,
        .table-resep__detail .recipe_cook:after {
            content: ' ';
            right: 0;
            width: 10%;
            height: 38px;
            position: absolute;
            border-bottom: 1px solid #c3c3c3
        }

        .table-resep__howto {
            border-top: none
        }

        .table-resep__howto td {
            border-bottom: none
        }

        .table-resep__howto .ingredients {
            padding-top: 0
        }

        .table-resep__howto .ingredients ul {
            padding-left: 0;
            margin: 0;
            font-weight: 400
        }

        .table-resep__howto .ingredients ul li {
            padding: 5px 0;
            list-style: none
        }

        .table-resep__howto .ingredients ul li:before {
            padding-right: 5px;
            content: "\2713"
        }

        .table-resep__howto .ingredients:after {
            height: 16px
        }

        .table-resep__howto .instructions {
            padding-top: 0
        }

        .table-resep__howto .instructions ol {
            font-weight: 400;
            padding-left: 20px;
            margin: 0
        }

        .place-table {
            width: 100%
        }

        .place-table tr:first-child td:first-child {
            background: none
        }

        .place-table tr td {
            border: 1px solid #f0f0f0
        }

        .place-table tr td:first-child {
            background: #f0f0f0;
            color: #666;
            width: 178px
        }

        .place-table tr td li {
            font-size: 14px;
            padding: 0;
            padding-bottom: 4px
        }

        .resep-tabel--noline tr td {
            border: none
        }

        .resep-tabel--noline tr td:first-child {
            width: 20px
        }

        amp-img img {
            -o-object-fit: cover;
            object-fit: cover;
            max-width: 100%
        }

        .detail__media-image amp-img img,
        .pic_artikel_sisip .pic amp-img img {
            -o-object-fit: contain;
            object-fit: contain;
            background: #f0f0f0
        }

        amp-img.amp-logo img {
            -o-object-fit: contain;
            object-fit: contain
        }

        .header {
            padding-bottom: 8px
        }

        .header__left {
            left: 0
        }

        .header__right {
            right: -8px
        }

        .menu-open .header {
            position: fixed;
            top: 0
        }

        .header .navbar {
            height: 27px
        }

        .menu-open {
            padding-top: 61px
        }

        .menu-open .menu-button span:nth-child(1) {
            top: 8px;
            transform: rotate(135deg)
        }

        .menu-open .menu-button span:nth-child(2) {
            opacity: 0
        }

        .menu-open .menu-button span:nth-child(3) {
            top: 8px;
            width: 20px;
            transform: rotate(-135deg)
        }

        .menu-open .box-menu,
        .menu-open .js-overlay {
            visibility: visible;
            opacity: 1;
            filter: alpha(opacity=100)
        }

        .menu-open .js-overlay {
            z-index: 25
        }

        .js-overlay {
            z-index: -1
        }

        .box-overlay {
            top: 48px
        }

        .box-overlay--arrow-logo:after {
            left: 75px
        }

        .page__header-amp {
            margin-top: 24px
        }

        .header-tag {
            padding-top: 18px;
            padding-right: 18px;
            padding-bottom: 0;
            padding-left: 18px
        }

        .header-tag h1 {
            margin-bottom: 12px;
            font-size: 16px
        }

        .header-tag .nav__item a {
            position: relative;
            padding: 12px 0;
            margin-right: 24px
        }

        .header-tag .nav__item--active a:before {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            height: 4px
        }

        .footer-title__partof img {
            margin: 0
        }

        .footer__app-store {
            height: 70px
        }

        .footer__app-store>a {
            display: block;
            margin: 0 2px
        }

        .footer__app-store>a img {
            margin: 0
        }

        .detail__media-image--radius amp-img img {
            border-radius: 8px
        }

        .pic_artikel_sisip .pic {
            width: 100%;
            padding-bottom: 8px;
            border-bottom: 1px solid #e6e6e6
        }

        .pic_artikel_sisip .pic amp-img {
            margin-bottom: 8px
        }

        .pic_artikel_sisip .pic amp-img img {
            position: absolute;
            top: 50%;
            bottom: auto;
            transform: translateY(-50%)
        }

        .box-ads__name {
            z-index: 2
        }

        .footer_banner {
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 50px;
            background-color: #f4f4f4;
            text-align: center;
            text-align: -webkit-center;
            z-index: 11
        }

        .parallax {
            width: 100%;
            height: 100vh;
            position: relative;
            overflow: initial;
            margin: 0 auto
        }

        .parallax_abs {
            width: 100%;
            height: 100%;
            overflow: auto;
            position: absolute;
            top: 0;
            left: 0;
            clip: rect(auto, auto, auto, auto)
        }

        .parallax_ovh {
            width: 100%;
            height: 100%;
            height: 100vh;
            position: fixed;
            top: 0;
            transform: translateZ(0);
            margin: 0 auto
        }

        .parallax_container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: auto;
            transform: translateZ(0)
        }

        .parallax_container img {
            max-width: 100%;
            height: auto
        }

        .nav-framebar .nav__item {
            padding: 0 0 0 16px
        }

        .nav-framebar .nav__item:before {
            content: "\2022";
            font-size: 18px;
            position: absolute;
            left: 5px;
            top: 2px;
            line-height: 1
        }

        .dark-scheme .menu-header {
            background-color: #1f1f1f;
        }

        .dark-scheme .menu-sidebar {
            background-color: #1f1f1f;
        }

        .dark-scheme .menu-modal {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .dark-scheme .menu-scroll {
            background-color: #1f1f1f;
            border: solid 5px #1f1f1f;
        }

        .dark-scheme .menu-item {
            border-bottom: solid 1px rgba(255, 255, 255, 0.03);
        }

        .dark-scheme .active-item em {
            background-color: #A0D468;
        }

        .dark-scheme .active-item strong {
            color: #FFFFFF;
        }

        .dark-scheme .active-item i:first-child {
            color: rgba(160, 212, 104, 1);
        }

        .dark-scheme .menu-item span {
            color: #FFFFFF;
        }

        .dark-scheme .menu-item i:first-child {
            color: #5f5f5f;
        }

        .dark-scheme .menu-item i:last-child {
            color: #aaa;
        }

        .dark-scheme .toggle-menu-header {
            color: #FFFFFF;
        }

        .dark-scheme .toggle-menu-icon {
            background-color: #5D9CEC;
            color: #FFFFFF;
        }

        .dark-scheme input[id="toggle-menu"]+label .l1,
        .dark-scheme input[id="toggle-menu"]+label .l2,
        .dark-scheme input[id="toggle-menu"]+label .l3 {
            background-color: #FFFFFF;
        }

        .dark-scheme .submenu-item label {
            color: #FFFFFF;
        }

        .dark-scheme input[data-submenu-items]+label:before {
            color: #aaa;
        }

        .dark-scheme input[data-submenu-items]+label:before {
            color: #FFFFFF;
        }

        .dark-scheme input[data-submenu-items]:checked+label:before {
            color: #ED5565;
        }

        .dark-scheme .submenu-wrapper .menu-item .fa-angle-right {
            color: #666;
        }

        .dark-scheme .submenu-wrapper a:last-child {
            border-bottom: solid 1px rgba(255, 255, 255, 0.03);
        }

        .dark-scheme .submenu-wrapper a {
            color: #aaa;
        }

        .dark-scheme header {
            background-color: #1f1f1f;
            border-bottom: solid 1px rgba(255, 255, 255, 0.1);
        }

        .dark-scheme .header-icon-1,
        .dark-scheme .header-icon-2 {
            color: #FFFFFF;
        }

        .light-scheme .menu-header {
            background-color: #FFFFFF;
        }

        .light-scheme .menu-sidebar {
            background-color: #FFFFFF;
        }

        .light-scheme .menu-modal {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .light-scheme .menu-scroll {
            background-color: #FFFFFF;
            border-bottom: solid 1px rgba(0, 0, 0, 0.1);
        }

        .light-scheme .menu-item {
            border-bottom: solid 1px rgba(0, 0, 0, 0.01);
        }

        .light-scheme .active-item em {
            background-color: #A0D468;
        }

        .light-scheme .active-item strong {
            color: #1f1f1f;
            font-weight: 500;
        }

        .light-scheme .active-item i:first-child {
            color: rgba(160, 212, 104, 1);
        }

        .light-scheme .menu-item span {
            color: #1f1f1f;
        }

        .light-scheme .menu-item i:first-child {
            color: #1f1f1f;
        }

        .light-scheme .menu-item i:last-child {
            color: #cacaca;
        }

        .light-scheme .toggle-menu-header {
            color: #1f1f1f;
        }

        .light-scheme .toggle-menu-icon {
            background-color: #5D9CEC;
            color: #FFFFFF;
        }

        .light-scheme input[id="toggle-menu"]+label .l1,
        .light-scheme input[id="toggle-menu"]+label .l2,
        .light-scheme input[id="toggle-menu"]+label .l3 {
            background-color: #FFFFFF;
        }

        .light-scheme .submenu-item label {
            color: #1f1f1f;
        }

        .light-scheme input[data-submenu-items]+label:before {
            color: #1f1f1f;
        }

        .light-scheme input[data-submenu-items]+label:before {
            color: #1f1f1f;
        }

        .light-scheme input[data-submenu-items]:checked+label:before {
            color: #ED5565;
        }

        .light-scheme .submenu-wrapper .menu-item .fa-angle-right {
            color: #cacaca;
        }

        .light-scheme .submenu-wrapper a:last-child {
            border-bottom: solid 1px rgba(0, 0, 0, 0.01);
        }

        .light-scheme .submenu-wrapper a {
            color: #1f1f1f;
        }

        .light-scheme header {
            background-color: #FFFFFF;
            border-bottom: solid 1px rgba(0, 0, 0, 0.1);
        }

        .light-scheme .header-icon-1,
        .header-icon-2 {
            color: #000000;
        }


        .bg-teal-light {
            background-color: #1abc9c;
            color: #FFFFFF
        }

        .bg-teal-dark {
            background-color: #16a085;
            color: #FFFFFF
        }

        .border-teal-light {
            border: solid 1px #1abc9c;
        }

        .border-teal-dark {
            border: solid 1px #16a085;
        }

        .color-teal-light {
            color: #1abc9c;
        }

        .color-teal-dark {
            color: #16a085;
        }

        .bg-green-light {
            background-color: #2ecc71;
            color: #FFFFFF
        }

        .bg-green-dark {
            background-color: #2abb67;
            color: #FFFFFF
        }

        .border-green-light {
            border: solid 1px #2ecc71;
        }

        .border-green-dark {
            border: solid 1px #2abb67;
        }

        .color-green-light {
            color: #2ecc71;
        }

        .color-green-dark {
            color: #2abb67;
        }

        .bg-blue-light {
            background-color: #3498db;
            color: #FFFFFF
        }

        .bg-blue-dark {
            background-color: #2980b9;
            color: #FFFFFF;
        }

        .border-blue-light {
            border: solid 1px #3498db;
        }

        .border-blue-dark {
            border: solid 1px #2980b9;
        }

        .color-blue-light {
            color: #3498db;
        }

        .color-blue-dark {
            color: #2980b9;
        }

        .bg-magenta-light {
            background-color: #9b59b6;
            color: #FFFFFF
        }

        .bg-magenta-dark {
            background-color: #8e44ad;
            color: #FFFFFF
        }

        .border-magenta-light {
            border: solid 1px #9b59b6;
        }

        .border-magenta-dark {
            border: solid 1px #8e44ad;
        }

        .color-magenta-light {
            color: #9b59b6;
        }

        .color-magenta-dark {
            color: #8e44ad;
        }

        .bg-night-light {
            background-color: #34495e;
            color: #FFFFFF
        }

        .bg-night-dark {
            background-color: #2c3e50;
            color: #FFFFFF
        }

        .border-night-light {
            border: solid 1px #34495e;
        }

        .border-night-dark {
            border: solid 1px #2c3e50;
        }

        .color-night-light {
            color: #34495e;
        }

        .color-night-dark {
            color: #2c3e50;
        }

        .bg-yellow-light {
            background-color: #E67E22;
            color: #FFFFFF
        }

        .bg-yellow-dark {
            background-color: #e86f2a;
            color: #FFFFFF
        }

        .border-yellow-light {
            border: solid 1px #E67E22;
        }

        .border-yellow-dark {
            border: solid 1px #F27935;
        }

        .color-yellow-light {
            color: #f1c40f;
        }

        .color-yellow-dark {
            color: #f39c12;
        }

        .bg-orange-light {
            background-color: #F9690E;
            color: #FFFFFF
        }

        .bg-orange-dark {
            background-color: #D35400;
            color: #FFFFFF
        }

        .border-orange-light {
            border: solid 1px #F9690E;
        }

        .border-orange-dark {
            border: solid 1px #D35400;
        }

        .color-orange-light {
            color: #e67e22;
        }

        .color-orange-dark {
            color: #d35400;
        }

        .bg-red-light {
            background-color: #e74c3c;
            color: #FFFFFF
        }

        .bg-red-dark {
            background-color: #c0392b;
            color: #FFFFFF
        }

        .border-red-light {
            border: solid 1px #e74c3c;
        }

        .border-red-dark {
            border: solid 1px #c0392b;
        }

        .color-red-light {
            color: #e74c3c;
        }

        .color-red-dark {
            color: #c0392b;
        }

        .bg-pink-light {
            background-color: #fa6a8e;
            color: #FFFFFF
        }

        .bg-pink-dark {
            background-color: #FB3365;
            color: #FFFFFF
        }

        .border-pink-light {
            border: solid 1px #fa6a8e;
        }

        .border-pink-dark {
            border: solid 1px #FB3365;
        }

        .color-pink-light {
            color: #fa6a8e;
        }

        .color-pink-dark {
            color: #FB3365;
        }

        .bg-gray-light {
            background-color: #bdc3c7;
            color: #FFFFFF
        }

        .bg-gray-dark {
            background-color: #95a5a6;
            color: #FFFFFF
        }

        .border-gray-light {
            border: solid 1px #bdc3c7;
        }

        .border-gray-dark {
            border: solid 1px #95a5a6;
        }

        .color-gray-light {
            color: #bdc3c7;
        }

        .color-gray-dark {
            color: #95a5a6;
        }

        .bg-white {
            background-color: #FFFFFF;
        }

        .color-white {
            color: #FFFFFF;
        }

        .border-white {
            border: solid 1px #FFFFFF;
        }

        .bg-black {
            background-color: #000000;
        }

        .color-black {
            color: #000000;
        }

        .border-black {
            border: solid 1px #000000;
        }

        /*Social Icons*/
        .facebook-bg {
            background-color: #3b5998;
            color: #FFFFFF;
        }

        .linkedin-bg {
            background-color: #0077B5;
            color: #FFFFFF;
        }

        .twitter-bg {
            background-color: #4099ff;
            color: #FFFFFF;
        }

        .google-bg {
            background-color: #d34836;
            color: #FFFFFF;
        }

        .whatsapp-bg {
            background-color: #34AF23;
            color: #FFFFFF;
        }

        .pinterest-bg {
            background-color: #C92228;
            color: #FFFFFF;
        }

        .sms-bg {
            background-color: #27ae60;
            color: #FFFFFF;
        }

        .mail-bg {
            background-color: #3498db;
            color: #FFFFFF;
        }

        .dribbble-bg {
            background-color: #EA4C89;
            color: #FFFFFF;
        }

        .tumblr-bg {
            background-color: #2C3D52;
            color: #FFFFFF;
        }

        .reddit-bg {
            background-color: #336699;
            color: #FFFFFF;
        }

        .youtube-bg {
            background-color: #D12827;
            color: #FFFFFF;
        }

        .phone-bg {
            background-color: #27ae60;
            color: #FFFFFF;
        }

        .skype-bg {
            background-color: #12A5F4;
            color: #FFFFFF;
        }

        .facebook-color {
            color: #3b5998;
        }

        .linkedin-color {
            color: #0077B5;
        }

        .twitter-color {
            color: #4099ff;
        }

        .google-color {
            color: #d34836;
        }

        .whatsapp-color {
            color: #34AF23;
        }

        .pinterest-color {
            color: #C92228;
        }

        .sms-color {
            color: #27ae60;
        }

        .mail-color {
            color: #3498db;
        }

        .dribbble-color {
            color: #EA4C89;
        }

        .tumblr-color {
            color: #2C3D52;
        }

        .reddit-color {
            color: #336699;
        }

        .youtube-color {
            color: #D12827;
        }

        .phone-color {
            color: #27ae60;
        }

        .skype-color {
            color: #12A5F4;
        }

        /*Background Images*/
        .bg-1 {
            background-image: url(images/pictures/1.jpg)
        }

        .bg-2 {
            background-image: url(images/pictures/2.jpg)
        }

        .bg-3 {
            background-image: url(images/pictures/3.jpg)
        }

        .bg-4 {
            background-image: url(images/pictures/4.jpg)
        }

        .bg-5 {
            background-image: url(images/pictures/5.jpg)
        }

        .bg-6 {
            background-image: url(images/pictures/6.jpg)
        }

        .bg-7 {
            background-image: url(images/pictures/7.jpg)
        }

        .bg-8 {
            background-image: url(images/pictures/8.jpg)
        }

        .bg-9 {
            background-image: url(images/pictures/9.jpg)
        }

        .bg-body {
            background-image: url(images/pictures_vertical/bg2.jpg)
        }

        .bg-body-1 {
            background-image: url(images/pictures_vertical/bg1.jpg)
        }

        .bg-body-2 {
            background-image: url(images/pictures_vertical/bg0.jpg)
        }

        .overlay {
            background-color: rgba(0, 0, 0, 0.8);
            position: absolute;
            top: 0px;
            right: 0px;
            bottom: 0px;
            left: 0px;
        }

        /*Font Settings*/
        h1 {
            font-size: 24px;
            line-height: 34px;
            font-weight: 500;
        }

        h2 {
            font-size: 22px;
            line-height: 32px;
            font-weight: 500;
        }

        h3 {
            font-size: 20px;
            line-height: 30px;
            font-weight: 500;
        }

        h4 {
            font-size: 18px;
            line-height: 28px;
            font-weight: 500;
        }

        h5 {
            font-size: 16px;
            line-height: 26px;
            font-weight: 500;
        }

        h6 {
            font-size: 14px;
            line-height: 22px;
            font-weight: 800;
        }

        .ultrathin {
            font-weight: 200;
        }

        .thin {
            font-weight: 300;
        }

        .thiner {
            font-weight: 400;
        }

        .boder {
            font-weight: 600;
        }

        .bold {
            font-weight: 700;
        }

        .ultrabold {
            font-weight: 800;
        }

        .capitalize {
            text-transform: capitalize;
        }

        .italic {
            font-style: italic;
        }

        .small-text {
            font-size: 12px;
            display: block;
        }

        .center-text {
            text-align: center;
            display: block;
        }

        .right-text {
            text-align: right;
        }

        .uppercase {
            text-transform: uppercase;
        }

        .boxed-text {
            width: 80%;
            margin: 0px auto 30px auto;
        }

        .round-image {
            border-radius: 500px;
        }

        p a {
            display: inline;
        }

        /*Content Settings*/
        .content {
            padding: 0px 20px 0px 20px
        }

        .container {
            margin-bottom: 30px
        }

        .full-bottom {
            margin-bottom: 25px
        }

        .no-bottom {
            margin-bottom: 0px
        }

        .full-top {
            margin-top: 25px
        }

        .half-bottom {
            margin-bottom: 15px
        }

        .half-top {
            margin-top: 15px
        }

        .quarter-bottom {
            margin-bottom: 15px
        }

        .hidden {
            display: none
        }

        .left-column {
            width: 45%;
            margin-right: 5%;
            float: left
        }

        .right-column {
            width: 45%;
            margin-left: 5%;
            float: left
        }

        .one-third-left {
            float: left;
            width: 29%;
            margin-right: 1%
        }

        .one-third-center {
            float: left;
            width: 29%;
            margin-left: 5%;
            margin-right: 5%
        }

        .one-third-right {
            float: left;
            width: 29%;
            margin-left: 1%
        }

        .clear {
            clear: both
        }

        * {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            vertical-align: baseline;
            outline: none;
            font-size-adjust: none;
            -webkit-text-size-adjust: none;
            -moz-text-size-adjust: none;
            -ms-text-size-adjust: none;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            -webkit-font-smoothing: antialiased;
            -webkit-transform: translate3d(1, 1, 1);
            transform: translate3d(1, 1, 1);
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        div,
        a,
        p,
        blockquote,
        form,
        fieldset,
        textarea,
        input,
        label,
        iframe,
        code,
        pre {
            display: block;
            position: relative;
        }

        img {
            object-fit: contain;
        }

        p {
            line-height: 30px;
            font-weight: 400;
            color: #424242;
            font-size: 18px;
            margin-bottom: 30px;
        }

        a {
            text-decoration: none;
            color: #3498db;
        }

        /*Lists*/
        .icon-list {
            list-style: none;
            font-size: 14px;
            line-height: 28px;
            color: #666666;
        }

        .icon-list i {
            width: 30px;
        }

        .center-icon {
            width: 80px;
            height: 80px;
            border-radius: 80px;
            border: solid 1px rgba(0, 0, 0, 0.5);
            text-align: center;
            line-height: 80px;
            font-size: 24px;
            margin: 0px auto 30px auto;
            display: block;
        }

        .decoration,
        .decoration-no-bottom {
            height: 1px;
            background-color: rgba(0, 0, 0, 0.1);
        }

        .deco {
            height: 1px;
            margin-bottom: 30px;
        }

        .deco-box .deco {
            width: 10%;
            float: left;
            height: 5px;
        }

        .decoration {
            margin-bottom: 30px;
        }

        .decoration-margins {
            margin: 0px 20px 30px 20px
        }

        /*Page Content*/

        ::-webkit-scrollbar {
            width: 0;
        }

        .menu * {
            user-select: none;
            -moz-user-select: none;
            -webkit-user-select: none;
        }

        .menu-header {
            width: 100%;
            position: fixed;
            left: 0px;
            right: 0px;
            top: 0px;
            line-height: 50px;
            color: white;
            height: 0px;
            overflow: hidden;
            transition: all 250ms ease;
            z-index: 99;
        }

        .menu-sidebar {
            position: fixed;
            top: 0px;
            left: 0px;
            right: 0px;
            bottom: 0px;
            z-index: 99;
            width: 260px;
            box-shadow: 5px 0 10px 1px rgba(0, 0, 0, 0.2);
            transform: translateX(-260px);
            transition: all 250ms ease;
        }

        .menu-modal {
            position: fixed;
            top: 0px;
            left: 0px;
            right: 0px;
            bottom: 0px;
            z-index: 999999;
            opacity: 0;
            pointer-events: none;
            transition: all 250ms ease;
        }

        .menu-modal .empty-item {
            display: none;
        }

        .menu-modal .menu-scroll {
            height: 445px;
            top: 50%;
            margin-top: -250px;
            width: 300px;
            left: 50%;
            margin-left: -150px;
            border-radius: 5px;
            box-shadow: 0 0 30px 5px rgba(0, 0, 0, 0.3);

        }

        .menu a:first-child {
            margin-top: 0px;
        }

        .menu-scroll {
            position: absolute;
            left: 0px;
            right: 0px;
            top: 0px;
            bottom: 0px;
            overflow: scroll;
            overflow-x: hidden;
            -webkit-overflow-scrolling: touch;
        }

        /*input[id="toggle-menu"]*/
        input[data-submenu-items] {
            position: absolute;
            top: -9999px;
            left: -9999px;
            /* For mobile, it's typically better to position checkbox on top of clickable
      area and turn opacity to 0 instead. */
        }

        input[id=toggle-menu]:checked~#menu-header {
            height: 455px;
            transition: all 250ms ease;
        }

        input[id=toggle-menu]:checked~#menu-sidebar {
            transform: translateX(0px);
            transition: all 250ms ease;
        }

        input[id=toggle-menu]:checked~#menu-modal {
            opacity: 1;
            pointer-events: all;
            transition: all 250ms ease;
        }

        /*Main Items*/
        .menu-item {
            height: 55px;
            line-height: 55px;
            display: block;
            padding-left: 55px;
            font-size: 13px;
            font-weight: 300;
            cursor: pointer;
        }

        .menu-item i {
            position: absolute;
            height: 55px;
            width: 55px;
            line-height: 55px;
            text-align: center;
        }

        .active-item em {
            font-size: 8px;
            text-align: center;
            position: absolute;
            width: 4px;
            height: 4px;
            right: 25px;
            border-radius: 7px;
            top: 50%;
            margin-top: -2px;
        }

        .active-item strong {
            font-weight: 400;
        }

        .tagcload {
            float: left;
            padding-right: 15px
        }

        .active-item .fa-circle {
            display: none;
        }

        .active-item span {
            margin-left: -3px;
        }

        .active-item i:first-child {
            margin-left: -3px;
        }

        .menu-item i:first-child {
            left: 0px;
            font-size: 15px;
        }

        .menu-item i:last-child {
            right: 0px;
        }

        .menu-item .fa-circle {
            font-size: 4px;
        }

        .menu-item .fa-angle-down {
            font-size: 8px;
        }

        .toggle-menu-header {
            height: 60px;
            width: 50px;
            line-height: 60px;
            text-align: center;
            top: 0px;
            z-index: 999;
            position: fixed;
            top: 0px;
            left: 0px;
            cursor: pointer;
        }

        .toggle-menu-icon {
            width: 45px;
            height: 45px;
            position: fixed;
            bottom: 20px;
            left: 50%;
            margin-left: -25px;
            line-height: 51px;
            border-radius: 50px;
            text-align: center;
            z-index: 9999999;
            cursor: pointer;
        }

        .toggle-menu-icon .l1 {
            top: -7px;
        }

        .toggle-menu-icon .l2 {
            opacity: 0;
        }

        .toggle-menu-icon .l3 {
            top: -8px;
        }

        input[id="toggle-menu"] {
            display: none;
        }

        /* to hide the checkbox itself */
        input[id="toggle-menu"]+label:before {
            font-family: FontAwesome;
            display: inline-block;
        }

        input[id="toggle-menu"]+label .l1,
        input[id="toggle-menu"]+label .l2,
        input[id="toggle-menu"]+label .l3 {
            height: 1px;
            width: 14px;
            position: absolute;
            left: 50%;
            margin-left: -7px;
            transition: all 250ms ease;
        }

        input[id="toggle-menu"]+label .l1 {
            margin-top: 25px;
        }

        input[id="toggle-menu"]+label .l2 {
            margin-top: 29px;
        }

        input[id="toggle-menu"]+label .l3 {
            margin-top: 33px;
        }

        input[id="toggle-menu"]:checked+label .l1 {
            transform: rotate(45deg);
            margin-top: 30px;
            transition: all 250ms ease;
        }

        input[id="toggle-menu"]:checked+label .l2 {
            opacity: 0;
            transition: all 250ms ease;
        }

        input[id="toggle-menu"]:checked+label .l3 {
            transform: rotate(-45deg);
            margin-top: 30px;
            transition: all 250ms ease;
        }

        input[id="toggle-menu"] {
            display: none;
        }

        /* to hide the checkbox itself */
        input[id="toggle-menu"]+label:before {
            font-family: FontAwesome;
            display: inline-block;
        }

        .submenu-item label {
            height: 55px;
            cursor: pointer;
        }

        input[class=toggle-submenu] {
            position: absolute;
            top: -9999px;
            left: -9999px;
        }

        .submenu-wrapper {
            height: 0px;
            overflow: hidden;
            color: white;
            transition: all 250ms ease;
        }

        input[data-submenu-items] {
            display: none;
        }

        /* to hide the checkbox itself */
        input[data-submenu-items]+label:before {
            font-family: FontAwesome;
            position: absolute;
            right: 0px;
            height: 60px;
            width: 55px;
            line-height: 60px;
            text-align: center;
            font-size: 9px;

        }

        input[data-submenu-items]+label:before {
            content: "\f107";
            transition: all 250ms ease;
        }

        input[data-submenu-items]:checked+label:before {
            transform: rotate(180deg);
            transition: all 250ms ease;
        }

        .submenu-wrapper a {
            height: 55px;
            font-size: 12px;
            line-height: 55px;
            border-bottom: none;
        }

        .submenu-wrapper a i {
            line-height: 55px;
        }

        .submenu-wrapper .menu-item .fa-angle-right {
            font-size: 8px;
            margin-top: -1px;
        }

        .submenu-wrapper a:first-child {
            padding-top: 5px;
        }

        .submenu-wrapper a:last-child {
            padding-bottom: 5px;
        }

        /* Toggled State */
        /*Value Obtain by (Number of Submenus * 55) + 11px ( paddings & border )*/

        [data-submenu-items="2"]:checked~.submenu-wrapper {
            height: 121px;
        }

        [data-submenu-items="3"]:checked~.submenu-wrapper {
            height: 185px;
        }

        [data-submenu-items="4"]:checked~.submenu-wrapper {
            height: 241px;
        }

        [data-submenu-items="5"]:checked~.submenu-wrapper {
            height: 296px;
        }

        [data-submenu-items="6"]:checked~.submenu-wrapper {
            height: 350px;
        }

        [data-submenu-items="7"]:checked~.submenu-wrapper {
            height: 405px;
        }

        [data-submenu-items="8"]:checked~.submenu-wrapper {
            height: 451px;
        }

        [data-submenu-items="9"]:checked~.submenu-wrapper {
            height: 506px;
        }

        [data-submenu-items="10"]:checked~.submenu-wrapper {
            height: 561px;
        }

        [data-submenu-items="11"]:checked~.submenu-wrapper {
            height: 616px;
        }

        [data-submenu-items="12"]:checked~.submenu-wrapper {
            height: 671px;
        }

        [data-submenu-items="13"]:checked~.submenu-wrapper {
            height: 726px;
        }

        [data-submenu-items="14"]:checked~.submenu-wrapper {
            height: 781px;
        }

        [data-submenu-items="15"]:checked~.submenu-wrapper {
            height: 836px;
        }

        /*Header*/
        header {
            position: fixed;
            height: 60px;
            width: 100%;
            z-index: 999;
        }

        .header-icon-1,
        .header-icon-2 {
            position: absolute;
            line-height: 60px;
            text-align: center;
            width: 60px;
            display: block;
            font-size: 14px;
            background-color: transparent;
        }

        .header-icon-2 {
            right: 0px;
            top: 0px;
        }

        .header-logo {
            background-image:url({{ config('global.LOGO')
        }
        });
        background-repeat: no-repeat;
        background-position:center center;
        background-size:30px 30px;
        width:30%;
        height:auto;
        display:block;
        }

        .header-logo-center {
            margin: 0 auto;
        }

        .header-logo-left {
            margin-left: 20px;
        }

        .header-clear {
            height: 60px;
        }

        /*Footer*/
        .footer-logo {
            background-image:url({{ config('global.LOGO')
        }
        });
        background-size:60px 60px;
        width:30%;
        height:auto;
        display:block;
        margin:12px auto 20px auto;
        }

        .footer-socials a {
            width: 40px;
            height: 40px;
            line-height: 40px;
            margin-left: 2px;
            margin-right: 2px;
            text-align: center;
            float: left;
        }

        .footer-socials {
            width: 265px;
            margin: 0px auto 30px auto;
        }

        .news-slider .caption {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .caption {
            position: absolute;
            bottom: 0px;
            left: 0px;
            right: 0px;
            height: 65px;
            padding-left: 20px;
            padding-right: 20px;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .caption h4 {
            font-size: 14px;
            color: #FFFFFF;
            line-height: 20px;
            margin-top: 12px;
        }

        .caption h3 {
            color: #FFFFFF;
            margin-bottom: 5px;
            font-size: 16px;
            padding-top: 23px;
            line-height: 0px;
        }

        .caption p {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.5);
        }

        .call-to-action a {
            width: 33.3%;
            float: left;
            text-align: center;
            border-bottom: solid 1px rgba(0, 0, 0, 0.1);
            height: 50px;
            line-height: 50px;
            color: #1f1f1f;
            font-size: 12px;
        }

        .call-to-action a i {
            padding-right: 10px;
        }

        .social-icons {
            width: 150px;
            margin: 0 auto;
        }

        .social-round a {
            border-radius: 50px;
        }

        .social-icons-small {
            width: 95px;
            margin: 0 auto;
        }

        .social-icons a {
            line-height: 40px;
            width: 40px;
            height: 40px;
            margin-left: 5px;
            margin-right: 5px;
            float: left;
        }

        .social-icons-small a {
            line-height: 35px;
            width: 35px;
            height: 35px;
            margin-left: 5px;
            margin-right: 5px;
            float: left;
        }

        /*Heading Block*/
        .heading-block {
            padding: 30px 20px;
            margin-bottom: 30px;
        }

        .heading-block h4 {
            font-weight: 400;
            position: relative;
            z-index: 10;
            color: #FFFFFF;
        }

        .heading-block p {
            position: relative;
            z-index: 10;
            color: rgba(255, 255, 255, 0.5);
            margin-bottom: 0px;
        }

        .heading-block a {
            z-index: 10;
            width: 100px;
            height: 10px;
            line-height: 10px;
            color: #FFFFFF;
            text-align: center;
            font-size: 12px;
            margin: 20px auto 0px auto;
            border: solid 1px rgba(255, 255, 255, 0.5);
            border-radius: 5px;
            display: block;
            text-transform: uppercase;
            font-weight: 800;
        }

        .icon-heading h4 {
            margin-bottom: 5px
        }

        .icon-heading h4 i {
            font-size: 16px;
            padding-right: 20px;
        }

        .quote-style h4 {
            font-weight: 300;
            margin-left: 40px;
            margin-right: 40px;
            text-align: center;
            line-height: 40px;
        }

        .rating {
            width: 95px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 10px;
            display: block;
        }


        .half-column-left .half-left-img {
            position: absolute;
            border-radius: 150px;
            margin-left: -50px;
            left: 0px;
        }

        .half-column-left {
            padding-left: 70px;
            padding-right: 20px;
            min-height: 110px;
            overflow: hidden;
        }


        .half-column-right .half-right-img {
            position: absolute;
            border-radius: 150px;
            margin-right: -50px;
            right: 0px;
        }

        .half-column-right {
            padding-right: 70px;
            padding-left: 20px;
            min-height: 110px;
            overflow: hidden;
        }

        /*Gallery*/

        .gallery-thumb {
            width: 31%;
            float: left;
            margin-bottom: 3%;
        }

        .gallery-round .gallery-thumb {
            border-radius: 100px
        }

        .gallery-wide .gallery-thumb-wide {
            margin-bottom: 5px;
        }

        .gallery-wide h4 {
            position: absolute;
            background-color: rgba(0, 0, 0, 0.8);
            color: #FFFFFF;
            z-index: 99;
            height: 50px;
            line-height: 50px;
            margin-top: -55px;
            width: 100%;
            padding-left: 20px;
            font-weight: 300;
            font-size: 14px;
            pointer-events: none;
        }


        .gallery-thumb:nth-child(3n-1) {
            margin-left: 3%;
            margin-right: 3%;
        }

        /*Splash Page*/
        .splash-content .splash-logo {
            background-image: url(images/logo.png);
            background-size: 90px 90px;
            width: 90px;
            height: 90px;
            margin: 0px auto 20px auto;
        }

        .splash-content {
            position: fixed;
            width: 240px;
            height: 350px;
            left: 50%;
            top: 50%;
            margin-top: -140px;
            margin-left: -120px;
        }

        .splash-button {
            width: 130px;
            margin: 0 auto;
            text-align: center;
            height: 40px;
            line-height: 40px;
            font-size: 12px;
        }

        /*Landing Content*/
        .landing-content {
            width: 300px;
            margin: 80px auto 30px auto;
            border-bottom: solid 1px rgba(255, 255, 255, 0.1);
        }

        .landing-content a {
            width: 70px;
            height: 70px;
            float: left;
            margin: 0px 15px 60px 15px;
            border-radius: 70px;
            line-height: 70px;
            font-size: 21px;
            text-align: center;
        }

        .landing-content a em {
            position: absolute;
            font-size: 14px;
            width: 70px;
            text-align: center;
            bottom: -60px;
            left: 0px;
            right: 0px;
            font-style: normal;
        }

        /*Accordion Styles*/
        .accordion h4 {
            background-color: transparent;
            border: none;
        }

        .accordion h4 {
            font-size: 16px;
            line-height: 40px;
        }

        .accordion h4 i {
            height: 40px;
            line-height: 40px;
            position: absolute;
            right: 0px;
            font-size: 12px;
        }

        .nested-accordion h4 {
            font-size: 14px;
        }

        section[expanded] .fa-plus {
            transform: rotate(45deg);
        }

        section[expanded] .fa-angle-down {
            transform: rotate(180deg);
        }

        section[expanded] .fa-chevron-down {
            transform: rotate(180deg);
        }

        /*Fonts*/
        .demo-icons a {
            color: #FFFFFF;
            width: 20%;
            height: 50px;
            float: left;
        }

        .demo-icons a i {
            color: #1f1f1f;
            font-size: 21px;
            width: 50px;
            height: 50px;
            float: left;
            text-align: center;
            overflow: hidden;
        }

        /*User Notifications*/
        .user-notification {
            text-align: left;
            padding-top: 5px;
            padding-left: 10px;
            padding-right: 10px;
            background-color: #27ae60;
            height: 50px;
            color: #FFFFFF;
            font-size: 12px;
            line-height: 24px;
            width: 70%;
            float: left;
        }

        .user-notification button {
            background-color: #27ae60;
            color: #FFFFFF;
            height: 55px;
            position: fixed;
            right: 0px;
            bottom: 0px;
            width: 25%;
        }

        /*Inputs*/

        .text-input {
            height: 45px;
            line-height: 45px;
            text-indent: 10px;
            border: solid 1px rgba(0, 0, 0, 0.1);
            display: block;
            width: 100%;
            font-size: 12px;
        }

        .input-icon-field {
            height: 45px;
            line-height: 45px;
            text-indent: 50px;
            border: solid 1px rgba(0, 0, 0, 0.1);
            display: block;
            width: 100%;
            font-size: 12px;
        }

        .input-icon i {
            position: absolute;
            z-index: 9;
            height: 45px;
            line-height: 45px;
            text-align: center;
            width: 45px;
            color: #666666;
        }

        .select-style {
            border: 1px solid rgba(0, 0, 0, 0.1);
            width: 100%;
            height: 45px;
            display: block;
            border-radius: 3px;
            overflow: hidden;
            background: #FFFFFF url("data:image/png;base64,R0lGODlhDwAUAIABAAAAAP///yH5BAEAAAEALAAAAAAPABQAAAIXjI+py+0Po5wH2HsXzmw//lHiSJZmUAAAOw==") no-repeat 95% 50%;
        }

        .select-style select {
            font-size: 12px;
            line-height: 35px;
            padding: 5px 15px;
            width: 100%;
            border: none;
            box-shadow: none;
            background-color: rgba(255, 255, 255, 0);
            background-image: none;
            -webkit-appearance: none;
        }

        .select-style select:focus {
            outline: none;
        }



        /*Dropcaps*/

        .dropcaps-1:first-letter {
            float: left;
            font-size: 57px;
            padding: 14px 15px 0px 0px;
            font-weight: 800;
            color: #1f1f1f;
        }

        .dropcaps-2:first-letter {
            font-family: 'Times New Roman', sans-serif;
            float: left;
            font-size: 42px;
            padding: 15px 15px 0px 0px;
            font-weight: 800;
            color: #1f1f1f;
        }

        .dropcaps-3:first-letter {
            background-color: #1f1f1f;
            padding: 10px 15px 10px 15px;
            margin: 5px 12px 0px 0px;
            float: left;
            font-size: 24px;
            font-weight: 800;
            color: #FFFFFF;
        }

        .dropcaps-4:first-letter {
            font-family: 'Times New Roman', sans-serif;
            font-weight: 800;
            background-color: #1f1f1f;
            padding: 8px 17px 8px 17px;
            margin: 5px 12px 0px 0px;
            float: left;
            font-size: 20px;
            font-weight: 400;
            color: #FFFFFF;
        }

        /*Highlights*/
        .highlight {
            margin-bottom: 10px;
        }

        .highlight span {
            padding: 3px 5px 3px 5px;
            margin-right: 2px;
        }

        ol ul {
            padding-left: 5px;
        }

        ol,
        ul {
            line-height: 24px;
            margin-left: 20px;
        }

        .icon-list {
            list-style: none;
            margin-left: 0px;
            padding-left: 0px;
        }

        .icon-list i {
            font-size: 10px;
        }

        .icon-list ul {
            list-style: none;
            padding-left: 10px;
        }

        .icon-list ul ul {
            padding-left: 10px;
        }

        /*Blockquotes*/
        .blockquote-1 {
            border-left: solid 3px #1f1f1f;
            padding: 10px 0px 10px 20px;
        }

        .blockquote-1 a {
            text-align: right;
            margin-top: -20px;
            font-size: 12px;
        }

        .blockquote-2 .blockquote-image {
            position: absolute;
            border-radius: 50px;
        }

        .blockquote-2 h5 {
            padding-left: 60px;
        }

        .blockquote-2 .first-icon {
            padding-left: 60px;
        }

        .blockquote-2 a {
            text-align: right;
            margin-top: -20px;
            font-size: 12px;
        }

        .blockquote-3 .blockquote-image {
            width: 150px;
            border-radius: 150px;
            margin: 0 auto;
            display: block;
        }

        .blockquote-3 h5 {
            margin: 10px 0px 10px 0px;
        }

        .blockquote-3 .ratings {
            width: 100px;
            margin: 10px auto 10px auto;
        }

        .blockquote-3 .ratings i {
            font-size: 18px;
        }

        .blockquote-4 i {
            font-size: 24px;
            position: absolute;
            margin-top: 10px;
        }

        .blockquote-4 p {
            padding-left: 50px;
        }

        /*Buttons*/
        .button {
            display: inline-block;
            padding: 13px 20px;
            margin: 0px 0px 10px 0px;
            font-size: 12px;
            transition: all 250ms ease;
        }

        .button-3d {
            display: inline-block;
            padding: 15px 20px;
            margin: 0px 0px 10px 0px;
            font-size: 12px;
            transition: all 250ms ease;
            border-right: none;
            border-left: none;
            border-top: none;
            border-width: 3px;
        }

        .button-round {
            border-radius: 30px;
        }

        .button-full {
            display: block;
            text-align: center;
        }

        .button-center {
            width: 100px;
            margin-left: auto;
            margin-right: auto;
            display: block;
            text-align: center;
        }

        .button:hover {
            opacity: 0.9;
            transition: all 250ms ease;
        }

        .icon-square,
        .icon-round {
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            display: inline-block;
            margin-left: 6px;
            margin-right: 6px;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .icon-square:hover,
        .icon-round:hover {
            opacity: 0.9;
        }

        .icon-round {
            border-radius: 45px;
        }

        /*Page 404*/
        .page-404 h1 {
            font-size: 60px;
            line-height: 70px;
            margin-top: 50px;
        }

        .page-404 a {
            margin-bottom: 100px;
        }

        .page-soon h1 {
            font-size: 60px;
            line-height: 70px;
            margin-top: 50px;
        }

        .page-soon h6 {
            font-size: 24px;
        }

        .page-soon .social-icons {
            margin-bottom: 100px;
        }

        /*Profile Page*/

        .profile-gradient {
            background: -moz-linear-gradient(top, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.95) 75%, rgba(255, 255, 255, 1) 100%);
            background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.95) 75%, rgba(255, 255, 255, 1) 100%);
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.95) 75%, rgba(255, 255, 255, 1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00ffffff', endColorstr='#ffffff', GradientType=0);
            height: 250px;
            margin-top: -235px;
        }

        .profile-overlay .profile-header {
            margin-top: -80px
        }

        .profile-header h1 {
            font-size: 30px;
        }

        .profile-header h6 {
            letter-spacing: 2px;
            opacity: 0.5;
        }

        .profile-header h5 {
            font-size: 12px;
        }

        .profile-header i {
            margin-right: 10px;
        }

        .profile-header p {
            font-size: 18px;
        }

        .profile-followers a {
            float: left;
            width: 33%;
            color: #1f1f1f;
            font-size: 18px;
        }

        .profile-followers em {
            display: block;
            font-style: normal;
            font-size: 12px;
        }

        .profile-thumb {
            margin-top: -50px;
            width: 100px;
            margin-left: auto;
            margin-right: auto;
            display: block;
            border-radius: 100px;
            border-radius: 100px;
            border: solid 3px #FFFFFF;
        }

        /*Timeline 1*/

        .timeline-1 {
            overflow: hidden;
            padding: 20px
        }

        .timeline-1 .timeline-deco {
            position: absolute;
            top: 0px;
            left: 50%;
            width: 1px;
            bottom: 0px;
            background-color: rgba(0, 0, 0, 0.15);
        }

        .timeline-1 .timeline-icon {
            width: 60px;
            height: 60px;
            border-radius: 60px;
            line-height: 60px;
            text-align: center;
            font-size: 18px;
            background-color: #FFFFFF;
            border: solid 1px rgba(0, 0, 0, 0.2);
            margin: 0px auto 30px auto;
        }

        .timeline-1 .container {
            background-color: #FFFFFF;
            padding: 30px 0px 1px 0px
        }

        .timeline-2 {
            overflow: hidden;
            padding: 50px 20px 0px 20px;
        }

        .timeline-2 .timeline-deco {
            position: absolute;
            top: 0px;
            left: 50px;
            width: 1px;
            bottom: 0px;
            background-color: rgba(0, 0, 0, 0.15);
        }

        .timeline-2 .timeline-icon {
            width: 40px;
            height: 40px;
            border-radius: 40px;
            line-height: 40px;
            text-align: center;
            font-size: 18px;
            background-color: #FFFFFF;
            border: solid 1px rgba(0, 0, 0, 0.2);
            margin-left: 10px;
        }

        .timeline-2 .container {
            background-color: #FFFFFF;
            margin-left: 70px;
            margin-top: -60px;
            padding-bottom: 30px;
        }


        /*News Slider*/

        .news-slider .amp-carousel-button {
            display: none;
        }

        .news-slider {
            margin-bottom: 10px;
        }

        /*News Thumbs*/

        .news-thumbs .news-item {
            min-height: 125px;
            color: #1f1f1f;
        }

        .news-thumbs .news-item .responsive-img {
            width: 95px;
            position: absolute;
            margin-top: 5px;
        }

        .news-thumbs .news-item h5 {
            margin-left: 110px;
            font-size: 15px;
        }

        .news-thumbs .news-item p {
            margin-left: 110px;
            line-height: 27px;
            margin-bottom: 0px;
            font-size: 13px;
        }

        /*News Strip*/

        .news-strip {
            background-color: #000000;
            padding: 20px 0px 20px 0px;
            margin-bottom: 30px;
        }

        .news-strip h5 {
            font-weight: 800;
            color: #FFFFFF;
            padding: 0px 20px 20px 20px;
        }

        /*News Cateogry*/

        .news-category {
            margin: 0px 20px 0px 20px;
        }

        .news-category p {
            display: inline-block;
            padding: 5px 25px 0px 25px;
            font-size: 13px;
            margin: 0px;
        }

        .news-category div {
            height: 5px;
            width: 100%;
        }

        /*News Block*/

        .news-blocks .news-item {
            min-height: 125px;
            color: #1f1f1f;
        }

        .news-blocks .news-item h5 {
            font-size: 18px;
            padding: 15px 0px 5px 0px;
        }

        /*News full*/

        .news-full .news-item {
            margin-top: 1px;
        }

        .news-full .news-item h6 {
            position: absolute;
            background-color: rgba(0, 0, 0, 0.8);
            bottom: 0px;
            width: 100%;
            color: #FFFFFF;
            padding: 10px 10px 10px 10px;
        }

        .news-full .titles {
            position: absolute;
            background-color: #FFFFFF;
            width: 250px;
            height: 65px;
            margin-top: -65px;
        }

        .news-full h5 {
            font-size: 13px;
            padding: 10px 20px 0px 20px;
            color: #000000;
        }

        .news-full em a {
            display: inline;
        }

        .news-full em {
            font-size: 10px;
            padding-left: 20px;
            display: block;
        }

        .news-full p {
            padding: 10px 20px 0px 20px;
        }

        .news-full .read-more {
            padding-right: 20px;
            text-align: right;
            font-size: 12px;
            padding-bottom: 30px;
        }

        /*News Posts*/

        .news-post-info {
            font-style: normal;
            font-size: 12px;
            padding: 5px 0px 15px 0px;
            display: block;
        }

        .news-post-info a {
            display: inline;

        }

        /*Contact Page*/

        .contactField {
            font-family: 'Roboto', sans-serif;
            height: 40px;
            line-height: 40px;
            line-height: 100%;
            width: 100%;
            display: block;
            border: solid 1px rgba(0, 0, 0, 0.1);
            text-indent: 10px;
            font-size: 13px;
            transition: all 250ms ease;
            margin-bottom: 20px;
        }

        .contactField:focus {
            border: solid 1px rgb(39, 174, 96);
            transition: all 250ms ease;
        }

        .contactTextarea {
            font-family: 'Roboto', sans-serif;
            padding-top: 10px;
            min-height: 80px;
            line-height: 40px;
            line-height: 100%;
            width: 100%;
            display: block;
            border: solid 1px rgba(0, 0, 0, 0.1);
            text-indent: 10px;
            font-size: 13px;
            transition: all 250ms ease;
            margin-bottom: 30px;
        }

        .contactTextarea:focus {
            transition: all 250ms ease;
            border: solid 1px rgb(39, 174, 96);
        }

        .field-title {
            font-size: 13px;
            margin-bottom: 5px;
        }

        .field-title span {
            font-size: 10px;
            color: #cacaca;
            position: absolute;
            right: 0px;
            margin-top: 2px;
        }

        .buttonWrap {
            width: 100%;
            display: block;
            text-align: center;
            margin-bottom: 30px;
            appearance: none;
            -webkit-appearance: none;
        }

        .contact-icon {
            color: #666666;
            line-height: 30px;
        }

        .contact-icon i {
            color: #1f1f1f;
            width: 30px;
        }


        /*Cover Pages*/

        .cover-1 {
            padding: 30px 30px 0px 30px;
        }

        .cover-1 h1 {
            font-size: 30px;
            color: #FFFFFF;
        }

        .cover-1 h6 {
            font-size: 16px;
            color: #FFFFFF;
            padding: 10px 0px 30px 0px;
            font-weight: 300;
        }

        .cover-1 p {
            font-size: 15px;
            font-weight: 300;
            color: #a7a7a7;
            line-height: 35px;
            margin-bottom: 50px;
        }

        .cover-1 .button {
            border: solid 1px rgba(255, 255, 255, 0.2);
            color: #FFFFFF;
            margin-right: 10px;
        }

        .cover-2 h1 {
            color: #FFFFFF;
            font-size: 30px;
            font-weight: 300;
            text-align: center;
            padding-top: 30px;
        }

        .cover-2 h6 {
            color: #c1c1c1;
            font-style: italic;
            font-size: 13px;
            font-weight: 300;
            text-align: center;
            padding: 0px 0px 20px 0px;
        }

        .cover-2 p {
            font-size: 15px;
            text-align: center;
            line-height: 36px;
            color: #c1c1c1;
            padding: 30px 35px 40px 35px;
            font-weight: 300;
        }

        .cover-3 {
            padding: 20px 20px 20px 20px;
            background-color: #FFFFFF;
            margin: 20px;
            border-radius: 7px;
        }

        .cover-3 amp-img {
            margin: 0 auto;
            display: block;
        }

        .cover-3 h1 {
            font-size: 24px;
            text-align: center;
            padding: 20px 0px 0px 0px;
        }

        .cover-3 em {
            font-size: 12px;
            display: block;
            text-align: center;
            margin-bottom: 20px;
        }

        .cover-3 p {
            text-align: center;
            font-size: 16px;
            font-weight: 300;
            padding: 0px 5px 0px 5px;
        }

        .cover-3 .socials {
            transform: scale(0.8, 0.8);
            width: 210px;
            margin: 0 auto;
        }

        .cover-3 .socials a {
            margin-left: 4px;
            margin-right: 4px;
        }

        .cover-4 h1 {
            color: #FFFFFF;
            text-align: center;
            font-weight: 300;
            font-size: 36px;
            margin: 60px 0px 10px 0px;
        }

        .cover-4 em {
            color: #FFFFFF;
            text-align: center;
            font-style: normal;
            display: block;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 300;
        }

        .cover-4 strong {
            color: #969696;
            text-transform: uppercase;
            font-weight: 800;
            font-size: 12px;
            text-align: center;
            display: block;
            margin: 20px 0px 30px 0px;
        }

        .cover-4 strong i {
            padding-right: 10px
        }

        .cover-4 p {
            padding: 40px 30px 40px 30px;
            color: #FFFFFF;
            line-height: 36px;
            text-align: center;
            font-weight: 300;
            font-size: 16px;
        }

        .cover-4 a {
            font-size: 13px;
            width: 170px;
            margin: 0 auto;
        }

        .cover-5 h1 {
            color: #FFFFFF;
            font-size: 40px;
            font-weight: 300;
            text-align: center;
            padding-top: 60px;
        }

        .cover-5 em {
            display: block;
            text-align: center;
            color: #FFFFFF;
            font-size: 12px;
            margin-top: 10px;
            font-style: normal;
        }

        .cover-5 p {
            padding: 20px 30px 20px 30px;
            color: #a7a7a7;
            font-weight: 300;
            text-align: center;
            font-size: 16px;
            line-height: 40px;
        }

        .cover-socials a {
            width: 35px;
            height: 35px;
            border-radius: 35px;
            float: left;
            text-align: center;
            line-height: 35px;
            font-size: 12px;
            margin: 0px 5px 0px 5px;
        }

        .cover-socials {
            width: 240px;
            left: 50%;
            margin-left: -120px;
            position: fixed;
            bottom: 30px;
        }
    </style>
    <style amp-boilerplate>
        body {
            -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            animation: -amp-start 8s steps(1, end) 0s 1 normal both
        }

        @-webkit-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @-moz-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @-ms-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @-o-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }
    </style><noscript>
        <style amp-boilerplate>
            body {
                -webkit-animation: none;
                -moz-animation: none;
                -ms-animation: none;
                animation: none
            }
        </style>
    </noscript>

    <script async custom-element="amp-lightbox" src="https://cdn.ampproject.org/v0/amp-lightbox-0.1.js"></script>
    <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
    <script async custom-element="amp-youtube" src="https://cdn.ampproject.org/v0/amp-youtube-0.1.js"></script>
    <script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>
    <script async custom-element="amp-facebook" src="https://cdn.ampproject.org/v0/amp-facebook-0.1.js"></script>
    <script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>
    <script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>
    <script async custom-element="amp-sticky-ad" src="https://cdn.ampproject.org/v0/amp-sticky-ad-1.0.js"></script>
    <script async custom-element="amp-auto-ads" src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js"></script>


</head>

<body class="light-scheme">

    <amp-analytics type="googleanalytics" config="https://www.jatimtimes.com/ga4.json" data-credentials="include">
        <script type="application/json">
            {
                "vars": {
                    "GA4_MEASUREMENT_ID": "G-WL9N0YP0G4",
                    "GA4_ENDPOINT_HOSTNAME": "www.google-analytics.com",
                    "DEFAULT_PAGEVIEW_ENABLED": true,
                    "GOOGLE_CONSENT_ENABLED": false,
                    "WEBVITALS_TRACKING": false,
                    "PERFORMANCE_TIMING_TRACKING": false,
                    "SEND_DOUBLECLICK_BEACON": false
                }
            }
        </script>
    </amp-analytics>
    <amp-analytics type="googleanalytics" id="analytics">
        <script type="application/json">
            {
                "vars": {
                    "account": "{{ config('global.GA_ANLYCT_ID') }}"
                },
                "triggers": {
                    "trackPageviewWithAmpdocUrl": {
                        "on": "visible",
                        "request": "pageview",
                        "vars": {
                            "title": "<?= $data['news_title'] ?>",
                            "ampdocUrl": "<?= current_url();?>"
                        }
                    }
                }
            }
        </script>
    </amp-analytics>

    <!-- <amp-auto-ads type="adsense" data-ad-client="ca-pub-9791561448547714">
    </amp-auto-ads> -->
    <header>
        <center><a href="https://<?= $daerah['domain'] ?>"><amp-img src="<?= $daerah['logo'] ?>" width="300" height="40" alt="<?= $daerah['site_title'] ?>"></a></center>

        <div align="center" class="navbar navbar-shadow">
            <nav class="navbar-first navbar--scroll">
                <ul class="nav">
                    <li class="nav__item"><a href="https://<?=$daerah['domain']?>/">Home</a></li>
                    <li class="nav__item nav__item--active"><a href="https://<?=$daerah['domain']?>/kanal/Peristiwa">Peristiwa</a></li>
                    <li class="nav__item"><a href="https://<?=$daerah['domain']?>/kanal/Profil">Profil</a></li>
                    <li class="nav__item"><a href="https://<?=$daerah['domain']?>/kanal/Hukum%20dan%20Kriminalitas">Hukum & Kriminal</a></li>
                    <li class="nav__item"><a href="https://<?=$daerah['domain']?>/kanal/Gaya%20Hidup">Gaya Hidup</a></li>
                    <li class="nav__item"><a href="https://<?=$daerah['domain']?>/kanal/Kesehatan">Kesehatan</a></li>
                    <li class="nav__item"><a href="https://<?=$daerah['domain']?>/kanal/Wisata">Wisata</a></li>
                    <li class="nav__item"><a href="https://<?=$daerah['domain']?>/kanal/Olahraga">Olahraga</a></li>
                    <li class="nav__item"><a href="https://<?=$daerah['domain']?>/kanal/Tekno">Tekno</a></li>
                    <li class="nav__item"><a href="https://<?=$daerah['domain']?>/kanal/Ekonomi">Ekonomi</a></li>
                    <li class="nav__item"><a href="https://<?=$daerah['domain']?>/kanal/Kuliner">Kuliner</a></li>
                    <li class="nav__item"><a href="https://<?=$daerah['domain']?>/kanal/Politik">Politik</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="header-clear"></div>

    <div class="page-content">

        <div class="page-content-scroll">

            <amp-img class="full-bottom" src="<?= $this->fungsi->imageThumbnail($data['news_image_new'], "th") ?>" width="300" height="150" layout="responsive" alt="Jatimtimes"></amp-img>

            <div class="content half-bottom">
                <h1 itemprop="headline" class="news-post-title"><?= $data['news_title'] ?></h1>
                <time class="header-time" itemprop="datePublished" datetime="<?= $this->fungsi->timeAgo($data['news_datepub']) ?>"><?= $this->fungsi->timeAgo($data['news_datepub']) ?></time>
                <em class="news-post-info half-bottom">Penulis : <?= $data['news_writer'] ?> Editor : <?= $editor ?></em>

                <amp-social-share type="whatsapp" width="50" height="44" data-param-text="<?= $data['news_title'] ?> : <?= current_url();?>" data-share-endpoint="whatsapp://send" data-param-url="<?= current_url();?>">
                </amp-social-share>
                <amp-social-share type="facebook" width="50" height="44" data-param-quote="<?= $data['news_title'] ?>" data-param-app_id="1509064015835094">
                </amp-social-share>
                <amp-social-share type="twitter" width="50" height="44" data-param-text="<?= $data['news_title'] ?>" data-param-url="<?= current_url();?>">
                </amp-social-share>
                <amp-social-share type="gplus" width="50" height="44" data-param-text="<?= $data['news_title'] ?>">
                </amp-social-share>
                <amp-social-share type="sms" width="50" height="44" data-param-text="<?= $data['news_title'] ?>" data-param-url="<?= current_url();?>">
                </amp-social-share>
            </div>
            <div class="decoration decoration-margins"></div>

            <div class="content" itemprop="articleBody">

                <?= $data['news_content'] ?>

                <div class="decoration"></div>
            </div>
            <div class="content">
                <div class="deco-box">
                    <div class="deco bg-red-light"></div>
                    <div class="deco bg-orange-light"></div>
                    <div class="deco bg-blue-dark"></div>
                    <div class="deco bg-green-dark"></div>
                    <div class="deco bg-teal-dark"></div>
                    <div class="deco bg-magenta-dark"></div>
                    <div class="deco bg-pink-dark"></div>
                    <div class="deco bg-black"></div>
                    <div class="deco bg-gray-dark"></div>
                    <div class="deco bg-gray-light"></div>
                    <div class="clear"></div>
                </div>
            </div>

            <div class="footer">

                <div class="decoration decoration-margins"></div>
                <div class="footer-socials">
                    <center>
                        <a href="https://instagram.com/jatimtimescom" class="facebook-bg" aria-label="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="https://instagram.com/jatimtimescom" class="twitter-bg" aria-label="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="tel:+62 341 5074961" class="phone-bg" aria-label="phone"><i class="fa fa-phone"></i></a>
                    </center>

                    <div class="clear"></div>
                </div>
                <div class="decoration decoration-margins"></div>
                <p class="center-text">&copy; 2022 Jatimtimes.com All Right Reserved </p>
            </div>
        </div>
    </div>
</body>

</html>