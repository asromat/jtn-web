<!DOCTYPE html>
<html lang="id">

<head>
    <?php if($this->uri->segment("1") != "baca"){
        // Ini tak bedakan Homepage dan Detail nya mas - Cuma 1 File aja
        // Detail untuk isinya ada di database tb_daerah
            $this->load->view("tampilan/component/head/homepage/homepageHead"); 
        } else {
            $this->load->view("tampilan/component/head/detail/detailHead"); 
        }        
    ?>
    
    <style>
        h1,h3,h4,ol,p,ul{margin-top:0}.card,.form-control,body{background-color:#fff}:root{--blue:#007bff;--indigo:#6610f2;--purple:#6f42c1;--pink:#e83e8c;--red:#dc3545;--orange:#fd7e14;--yellow:#ffc107;--green:#28a745;--teal:#20c997;--cyan:#17a2b8;--white:#fff;--gray:#6c757d;--gray-dark:#343a40;--primary:#007bff;--secondary:#6c757d;--success:#28a745;--info:#17a2b8;--warning:#ffc107;--danger:#dc3545;--light:#f8f9fa;--dark:#343a40;--breakpoint-xs:0;--breakpoint-sm:576px;--breakpoint-md:768px;--breakpoint-lg:992px;--breakpoint-xl:1200px;--font-family-sans-serif:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-family-monospace:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace}*,::after,::before{box-sizing:border-box}html{font-family:sans-serif;line-height:1.15;-webkit-text-size-adjust:100%}figcaption,figure,header,nav{display:block}body{margin:0;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";font-size:1rem;font-weight:400;line-height:1.5;color:#212529;text-align:left}.breadcrumb,.form-group,ol,p,ul{margin-bottom:1rem}b,strong{font-weight:bolder}a{color:#007bff;text-decoration:none;background-color:transparent}figure{margin:0 0 1rem}img{vertical-align:middle;border-style:none}input{margin:0;font-family:inherit;font-size:inherit;line-height:inherit;overflow:visible}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}h1,h3,h4{margin-bottom:.5rem;font-weight:500;line-height:1.2}h1{font-size:2.5rem}h3{font-size:1.75rem}h4{font-size:1.5rem}small{font-size:80%;font-weight:400}.img-fluid{max-width:100%;height:auto}.figure{display:inline-block}.figure-caption{font-size:90%;color:#6c757d}.row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}.col-12,.col-lg-4,.col-lg-8{position:relative;width:100%;padding-right:15px;padding-left:15px}.col-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}@media (min-width:992px){.col-lg-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-lg-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}}.form-control{display:block;width:100%;height:calc(1.5em + .75rem + 2px);padding:.375rem .75rem;font-size:1rem;font-weight:400;line-height:1.5;color:#495057;background-clip:padding-box;border:1px solid #ced4da;border-radius:.25rem}.breadcrumb,.card{display:-ms-flexbox}.badge,.close{font-weight:700;line-height:1}.form-control::-ms-expand{background-color:transparent;border:0}.form-control:-moz-focusring{color:transparent;text-shadow:0 0 0 #495057}.form-control::-webkit-input-placeholder{color:#6c757d;opacity:1}.form-control::-moz-placeholder{color:#6c757d;opacity:1}.form-control:-ms-input-placeholder{color:#6c757d;opacity:1}.form-control::-ms-input-placeholder{color:#6c757d;opacity:1}.fade:not(.show){opacity:0}.card{position:relative;display:flex;-ms-flex-direction:column;flex-direction:column;min-width:0;word-wrap:break-word;background-clip:border-box;border:1px solid rgba(0,0,0,.125);border-radius:.25rem}.badge,.breadcrumb{border-radius:.25rem}.breadcrumb{display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;padding:.75rem 1rem;list-style:none;background-color:#e9ecef}.breadcrumb-item{display:-ms-flexbox;display:flex}.breadcrumb-item+.breadcrumb-item{padding-left:.5rem}.breadcrumb-item+.breadcrumb-item::before{display:inline-block;padding-right:.5rem;color:#6c757d;content:"/"}.breadcrumb-item.active{color:#6c757d}.badge{display:inline-block;padding:.25em .4em;font-size:75%;text-align:center;white-space:nowrap;vertical-align:baseline}.badge-primary{color:#fff;background-color:#007bff}.media{display:-ms-flexbox;display:flex;-ms-flex-align:start;align-items:flex-start}.close{float:right;font-size:1.5rem;color:#000;text-shadow:0 1px 0 #fff;opacity:.5}.modal{position:fixed;top:0;left:0;z-index:1050;display:none;width:100%;height:100%;overflow:hidden;outline:0}.modal-dialog{position:relative;width:auto;margin:.5rem}.modal.fade .modal-dialog{-webkit-transform:translate(0,-50px);transform:translate(0,-50px)}.modal-content{position:relative;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;width:100%;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.2);border-radius:.3rem;outline:0}.modal-body{position:relative;-ms-flex:1 1 auto;flex:1 1 auto;padding:1rem}@media (min-width:576px){.modal-dialog{max-width:500px;margin:1.75rem auto}}@-webkit-keyframes spinner-border{to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes spinner-border{to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}.spinner-border{display:inline-block;width:2rem;height:2rem;vertical-align:text-bottom;border:.25em solid currentColor;border-right-color:transparent;border-radius:50%;-webkit-animation:.75s linear infinite spinner-border;animation:.75s linear infinite spinner-border}.bg-primary{background-color:#007bff!important}.bg-secondary{background-color:#6c757d!important}.bg-white{background-color:#fff!important}.rounded{border-radius:.25rem!important}.rounded-top{border-top-left-radius:.25rem!important;border-top-right-radius:.25rem!important}.rounded-bottom{border-bottom-right-radius:.25rem!important;border-bottom-left-radius:.25rem!important}.d-block{display:block!important}.float-right{float:right!important}.shadow-sm{box-shadow:0 .125rem .25rem rgba(0,0,0,.075)!important}.mt-1{margin-top:.25rem!important}.mb-1{margin-bottom:.25rem!important}.ml-1{margin-left:.25rem!important}.mt-2{margin-top:.5rem!important}.mt-3{margin-top:1rem!important}.p-0{padding:0!important}.p-1{padding:.25rem!important}.p-2{padding:.5rem!important}.text-center{text-align:center!important}.text-uppercase{text-transform:uppercase!important}.font-weight-bold{font-weight:700!important}.text-primary{color:#007bff!important}.text-light{color:#f8f9fa!important}.text-muted{color:#6c757d!important}
    </style>
    <style>.appHeader,.appHeader:before{position:fixed;left:0;right:0}#appCapsule,.profileBox{margin-top:env(safe-area-inset-top)}.header-large-title .title,h1,h3,h4{letter-spacing:-.02em;line-height:1.3em}h1,h3{font-weight:700}.listview,.sidebar-buttons{border-top:1px solid #e1e1e1}.image-listview.media>li,.listview{border-bottom:1px solid #e1e1e1}.image-listview.media>li:last-child,.listview.flush{border-bottom:0}#search,.appHeader,.card,.profileBox,.profileBox .image-wrapper .imaged{box-shadow:0 3px 6px 0 rgba(0,0,0,.1),0 1px 3px 0 rgba(0,0,0,.08)}::-webkit-scrollbar{width:0}a{color:#1e74fd;outline:0!important}.appHeader{min-height:56px;display:flex;justify-content:center;align-items:center;top:env(safe-area-inset-top);z-index:999;background:#fff;color:#141515}.appHeader:before,.profileBox,.profileBox:before{background:#1e74fd;top:0}.appHeader:before{content:'';height:env(safe-area-inset-top);width:100%;z-index:99999}.appHeader .left,.appHeader .right{height:56px;display:flex;align-items:center;position:absolute}.appHeader .left ion-icon,.appHeader .right ion-icon{font-size:26px;--ionicon-stroke-width:36px}.appHeader .left .headerButton,.appHeader .right .headerButton{min-width:36px;height:56px;display:flex;align-items:center;justify-content:center;padding:10px;color:#141515;position:relative}.appHeader .left{left:8px;top:0}.appHeader .right{right:8px;top:0}.appHeader .pageTitle{font-size:17px;font-weight:500;padding:0 10px}.appHeader.text-light{color:#fff}.appHeader.text-light .headerButton,.appHeader.text-light .pageTitle{color:#dc3545}.appHeader.bg-secondary{border:0}.header-large-title{padding:0 10px}.header-large-title .title{padding-left:8px;border-left:4px solid #ad120a;font-size:20px;color:#ad120a}.header-large-title .subtitle{font-size:15px;font-weight:400;margin:0;color:#000;line-height:1.6em}#appCapsule{padding:56px 0;margin-bottom:env(safe-area-inset-bottom)}.profileBox{padding-left:16px;padding-right:16px;display:flex;align-items:center;position:fixed;z-index:100;left:0;right:0}#loader,.sidebar-buttons{background:#fff;bottom:0;position:fixed;left:0;right:0}.profileBox:before{content:'';height:env(safe-area-inset-top);display:block;position:fixed;left:0;right:0}.profileBox .image-wrapper{margin-right:16px;padding:16px 0}.profileBox .image-wrapper .imaged{width:42px;height:42px;border:2px solid #fff}#sidebarPanel .modal-content,.panelbox .modal-dialog .modal-content{width:300px;padding-top:env(safe-area-inset-top)}.profileBox .in{line-height:1.4em;padding:16px 25px 16px 0}.profileBox .in strong{display:block;font-weight:500;color:#fff}.profileBox .in .text-muted{font-size:14px;color:rgba(255,255,255,.5)!important}.sidebar-buttons{display:flex;align-items:center;justify-content:flex-start;padding-bottom:env(safe-area-inset-bottom)}.sidebar-buttons .button{float:1;width:100%;height:56px;display:flex;align-items:center;justify-content:center;font-size:26px;color:#141515}#loader,.close-sidebar-button{display:flex;align-items:center}.sidebar-buttons:last-child{border-right-color:transparent}.close-sidebar-button{font-size:22px;position:absolute;width:36px;border-radius:100%;justify-content:center;height:36px;right:10px;top:50%;color:rgba(255,255,255,.5)!important;margin-top:-18px}.listview>li,.listview>li .item,.searchbox{position:relative}.card,.imaged{border-radius:6px}#sidebarPanel .modal-dialog{position:fixed;left:0;top:0;bottom:0}#sidebarPanel .modal-body{margin-top:76px;margin-bottom:80px}.panelbox .modal-dialog .modal-content .modal-body,.panelbox-left .image-listview>li .item,.panelbox-left .listview>li{padding:10px 16px}.panelbox-left .image-listview>li{padding:0}.panelbox-left .image-listview>li a.item{padding-right:36px}.row{margin-left:-8px;margin-right:-8px}.col-12,.col-lg-4,.col-lg-8{padding-left:8px;padding-right:8px;margin-top:10px}.mt-1{margin-top:8px!important}.mt-2{margin-top:16px!important}.mt-3{margin-top:24px!important}.mb-1{margin-bottom:8px!important}.ml-1{margin-left:8px!important}.p-0{padding:0!important}.p-1{padding:8px!important}.p-2{padding:16px!important}h1,h3,h4{color:#141515;margin:0 0 10px}.text-muted{font-size:13px;color:#4f5050!important}h1{font-size:30px}h3{font-size:15px}.badge,h4{font-size:12px}b,h4,strong{font-weight:500}ion-icon{--ionicon-stroke-width:32px}.imaged{height:auto}.imaged.w100{width:100px!important}#loader{top:0;z-index:99999;justify-content:center}.badge{line-height:1em;letter-spacing:0;height:22px;min-width:22px;padding:0 6px;display:inline-flex;align-items:center;justify-content:center;font-weight:400}.badge-primary{background:#343a40!important}#search,.card,.listview{background:#fff}.listview-title{color:#4f5050;padding:7px 16px;font-size:13px;font-weight:500;display:flex;align-items:center;justify-content:space-between}.listview{display:block;padding:0;margin:0;color:#141515;line-height:1.3em}.listview .text-muted{font-size:13px;color:#a1a1a2!important}.listview>li{padding:8px 16px;display:block;align-items:center;justify-content:space-between;min-height:50px}.listview>li:after{content:"";display:block;position:absolute;left:0;right:0;bottom:0;height:1px;background:#e1e1e1}.image-listview.media>li:after,.listview.no-line .item :after,.listview.no-line>li:after,.listview>li:last-child:after{display:none}.listview>li header{font-size:12px;margin:0 0 3px;line-height:1.2em}.listview.flush{border-top:0}.listview.transparent{background:0 0}.image-listview>li{padding:0;min-height:auto}.image-listview>li:after{left:68px}.image-listview>li .item{padding:10px 16px;width:100%;min-height:50px;display:flex;align-items:center}.image-listview>li .item .icon-box{min-width:36px;max-width:36px;width:36px;height:36px;display:flex;align-items:center;justify-content:center;line-height:1em;font-size:20px;border-radius:400px;margin-right:16px}.image-listview>li .item .icon-box.bg-primary{box-shadow:inset 0 0 0 1px rgba(255,255,255,.12)}.image-listview>li .item .in{display:flex;align-items:center;justify-content:space-between;width:100%}.image-listview>li a.item{color:#141515!important;padding-right:36px}.image-listview>li a.item:after{background-image:url("data:image/svg+xml,%0A%3Csvg width='10px' height='16px' viewBox='0 0 10 16' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cg id='Page-1' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd' stroke-linecap='round' stroke-linejoin='round'%3E%3Cg id='Listview' transform='translate(-112.000000, -120.000000)' stroke='%23A1A1A2' stroke-width='2.178'%3E%3Cpolyline id='Path' points='114 122 120 128 114 134'%3E%3C/polyline%3E%3C/g%3E%3C/g%3E%3C/svg%3E");background-repeat:no-repeat;background-position:center center;width:16px;height:16px;content:"";position:absolute;right:12px;opacity:.5;top:50%;margin-top:-8px}.image-listview.media>li .imageWrapper{margin-right:16px}.card{border:0}.card .listview>li:first-child .item{border-radius:6px 6px 0 0}.card .listview>li:last-child .item{border-radius:0 0 6px 6px}.panelbox .modal-dialog{margin:0;position:fixed;left:0;top:0}.panelbox .modal-dialog .modal-content{border:0;border-radius:0;height:100vh;overflow:auto;box-shadow:0 16px 24px 2px rgba(0,0,0,.14),0 6px 30px 5px rgba(0,0,0,.12),0 8px 10px -5px rgba(0,0,0,.2)}.panelbox-left .modal-dialog{transform:translate(-100%,0)!important}.bg-primary{background:#1e74fd!important;color:#fff}.bg-secondary{background:#f8f9fa!important;color:#fff}.text-primary{color:#1e74fd!important}.text-light{color:#fff!important}.form-control{background-clip:padding-box;background-image:linear-gradient(transparent,transparent);-webkit-appearance:none;-moz-appearance:none;appearance:none}.form-group{width:100%}.search-form{display:block;width:100%}.searchbox{width:100%;margin:0;display:flex;align-items:center;justify-content:space-between}.searchbox .form-control{height:36px;border-radius:6px;border:1px solid #e1e1e1!important;padding:0 16px 0 36px;font-size:15px;box-shadow:none!important;color:#141515}.searchbox .close,.searchbox .input-icon{align-items:center;color:#a1a1a2;position:absolute;display:flex;top:0}.searchbox ion-icon{font-size:26px;line-height:1em;margin:0}.searchbox .close{opacity:1;width:46px;height:56px;justify-content:center;right:8px}.searchbox .input-icon{font-size:26px;left:0;width:36px;height:36px;justify-content:center}#search{display:block;padding:0;border-bottom:1px solid #fff;position:fixed;left:0;top:-50%;right:0;width:100%;z-index:1001}#search .searchbox .form-control{box-shadow:none!important;border:0!important;border-radius:0;height:56px;padding:0 56px;background:0 0;font-size:17px;color:#141515;width:100%}#search .searchbox .input-icon{font-size:26px;position:absolute;left:8px;width:46px;height:56px;display:flex;align-items:center;justify-content:center;color:#a1a1a2;top:0}.blog-post .post-body{padding:0 16px;font-size:18px}.post-body p{font-size:18px}</style>
    <link rel="icon" type="image/png" href="https://jatimtimes.com/assets/img/icon/favicon.ico" sizes="32x32" />
    <link rel="apple-touch-icon" sizes="180x180" href="https://jatimtimes.com/assets/img/icon/favicon.ico" />
    <!-- Share -->
    <!-- <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
    <!-- <link rel="preload" href="https://cdn.jsdelivr.net/gh/assisfery/SocialShareJS@1.4/social-share.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/assisfery/SocialShareJS@1.4/social-share.min.css"> -->
    <!-- !Share -->
    <!-- Main CSS -->
    <!-- <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css" /> -->
    <link rel="preload" href="<?= base_url() ?>assets/css/style.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    </noscript>
    <!--<link rel="manifest" href="__manifest.json" /> -->
    <!-- Custom CSS -->
    <!-- Share Button -->
    <style>
        .ss-btn{height:30px;padding:3px 3px 3px 3px;background:#888;color:#fff!important;border-radius:3px;margin:4px;display:inline-block;cursor:pointer;text-align:center;transition:.2s ease all}.ss-btn:hover{text-decoration:none;color:#fff;filter:brightness(110%)}.ss-black .ss-btn{background:#000!important}.ss-dark .ss-btn{background:#444!important}.ss-gray .ss-btn{background:#888!important;color:#000!important}.ss-light .ss-btn{background:#ddd!important;color:#444!important}.ss-outline .ss-btn{background:#fff!important;color:#444!important;border:1px solid #bbb!important}.ss-circle .ss-btn{border-radius:50%;min-width:30px}.ss-flat .ss-btn{border-radius:0}.ss-pill .ss-btn{border-radius:24px}.ss-shadow .ss-btn{box-shadow:0 .5rem 1rem rgba(54,54,54,.28)}.ss-grow .ss-btn:hover{transform:scale(1.1)}.ss-shrink .ss-btn:hover{transform:scale(.9)}.ss-rotate .ss-btn:hover{transform:rotate(-10deg)}.ss-float .ss-btn:hover{transform:translate(0,-10px)}.ss-strait .ss-btn{margin:0;border-radius:0}.ss-strait{border-radius:3px;overflow:hidden;display:table;margin:0 auto}.ss-fixed{position:fixed;z-index:999;left:0;right:0}.ss-bottom{display:inline-block;text-align:center;bottom:10px}.ss-top{display:inline-block;text-align:center;top:10px}.ss-left,.ss-right{top:50%;transform:translateY(-50%)}.ss-left{left:10px}.ss-right{left:unset;right:10px}.ss-left .ss-btn,.ss-right .ss-btn{display:table;width:140px}.ss-left[data-ss-content=false] .ss-btn,.ss-right[data-ss-content=false] .ss-btn{width:30px}@media (min-width:768px){.ss-responsive .ss-btn-messenger,.ss-responsive .ss-btn-share,.ss-responsive .ss-btn-sms,.ss-responsive .ss-btn-telegram,.ss-responsive .ss-btn-viber{display:none}}
    </style>
    <style>
        div.scrollmenu {
            overflow: auto;
            white-space: nowrap;
            height: 40px;
            margin: 0px;
            padding-bottom: 0pc;
            background-color: #185adb;
            text-align: center;
        }

        div.scrollmenu a {
            display: inline-block;
            color: white;
            text-align: center;
            padding-left: 12px;
            padding-right: 12px;
            padding-top: 5px;
            padding-bottom: 0px;
            text-decoration: none;
        }

        div.scrollmenu a:hover {
            background-color: #777;
        }

        .main-page {
            position: relative;
            max-width: 1200px;
            width: 100%;
            min-height: calc(100vh - 60px);
            margin: 0px auto;
        }

        .bg-times {
            background-color: #0a1931 !important;
        }

        .bg-times-dark {
            background-color: #6c0000 !important;
        }

        .bg-times-gradient {
            background: #0a1931;
            background: -moz-linear-gradient(left, #0a1931 0, #0a1931 42%, #185adb 86%);
            background: -webkit-gradient(left top,
                    right top,
                    color-stop(0, #0a1931),
                    color-stop(42%, #0a1931),
                    color-stop(86%, #185adb),
                    color-stop(91%, #f70),
                    color-stop(94%, #e66400),
                    color-stop(100%, #ffc947));
            background: -webkit-linear-gradient(left,
                    #0a1931 0,
                    #0a1931 42%,
                    #185adb 86%);
            background: -o-linear-gradient(left, #0a1931 0, #0a1931 42%, #185adb 86%);
            background: -ms-linear-gradient(left, #0a1931 0, #0a1931 42%, #185adb 86%);
            background: linear-gradient(to right, #0a1931 0, #0a1931 42%, #185adb 86%);
        }

        .fn60 {
            font-size: 60%;
        }

        .fn65 {
            font-size: 65% !important;
        }

        .fn80 {
            font-size: 80% !important;
        }

        .fn95 {
            font-size: 95% !important;
        }

        .fn100 {
            font-size: 100% !important;
        }

        .fn250 {
            font-size: 190% !important;
        }

        .image-listview>li .item .in2 {
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }

        .metaListDonation {
            margin-top: -5px;
            display: block;
            font-weight: 600;
        }

        .c_h10 {
            height: 10px;
        }

        .post-body p {
            font-size: 16px;
        }

        .tulisan {
            color: #0a1931;
        }
    </style>
    <!-- ! Custom CSS -->

    <!-- PWA Script -->
    <meta name="apple-mobile-web-app-status-bar" content="#113491">
    <meta name="theme-color" content="#113491">
    <link rel="manifest" href="<?=base_url()?>/manifest.json">
    <!-- !End PWA Script -->
    <!-- FB Moderation -->
    <meta property="fb:app_id" content="&#123;582470740510509&#125;" />
</head>

<body>
<!-- <script>function musictime(){var e=new Audio("https://malangtimes.com/assets/malangtimes.mp3").play();void 0!==e&&e.then(e=>{console.log("Autoplay started")}).catch(e=>{console.log("Autoplay gave some error",e),window.addEventListener("click",function(){document.getElementById("audio").play()},{once:!0})})}document.body.onload=function(){musictime()};var isFirefox="undefined"!=typeof InstallTrigger,isChrome=!!window.chrome&&(!!window.chrome.webstore||!!window.chrome.runtime);function play(){document.getElementById("audio").play()}</script> -->

<!-- loader -->
    <!-- <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div> -->
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader bg-secondary text-light">
        <div class="left">
            <a href="#" class="headerButton" data-toggle="modal" data-target="#sidebarPanel">
                <ion-icon name="menu-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            <a href="<?= base_url() ?>"><img src="<?= $daerah['logo'] ?>" alt="Jatim Times Network Logo" class="image" height="50px" /></a>
        </div>
        <div class="right">
            
            <a href="javascript:;" class="headerButton toggle-searchbox">
                <ion-icon name="search-outline"></ion-icon>
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- Search Component -->
    <div id="search" class="appHeader">
        <form class="search-form" method="get" action="<?=base_url("search")?>">
            <div class="form-group searchbox">
                <input type="text" class="form-control" name="keyword" placeholder="Search..." />
                <i class="input-icon">
                    <ion-icon name="search-outline"></ion-icon>
                </i>
                <a href="javascript:;" class="ml-1 close toggle-searchbox">
                    <ion-icon name="close-circle"></ion-icon>
                </a>
            </div>
        </form>
    </div>
    <!-- * Search Component -->

    <?= $contents ?>

    <!-- App Sidebar -->
    <!-- App Sidebar -->
    <div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <!-- profile box -->
                    <div class="profileBox">
                        <div class="image-wrapper">
                            <img src="https://lh3.googleusercontent.com/_x0eP5LbSX9BWgkmwRHSJXe8lgn7FyrfyM5P0kNJyiTqcJFHn-WJzCo8P_bs5VnwZw=w300" alt="image" class="imaged b-0" />
                        </div>
                        <div class="in">
                            <strong>JATIM TIMES NETWORK</strong>
                            <div class="text-muted">
                                <ion-icon name="star-outline"></ion-icon>
                                PILIHAN TERBAIK
                            </div>
                        </div>
                        <a href="javascript:;" class="close-sidebar-button" data-dismiss="modal">
                            <ion-icon name="close"></ion-icon>
                        </a>
                    </div>
                    <!-- * profile box -->
                    <ul class="listview flush transparent no-line image-listview mt-2">
                        <li>
                            <a href="<?= base_url() ?>" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <div class="in">Beranda</div>
                            </a>
                        </li>
                    </ul>
                    <div class="listview-title mt-2 mb-1">
                        <span>Kanal Populer</span>
                    </div>
                    <ul class="listview flush transparent no-line image-listview mt-2">
                        <li>
                            <a href="<?= base_url() ?>/kanal/hukum dan kriminalitas" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <div class="in">Hukum</div>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>/kanal/pemerintahan" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <div class="in">Pemerintahan</div>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>/kanal/pendidikan" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <div class="in">Pendidikan</div>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>/kanal/gaya hidup" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <div class="in">Gaya</div>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>/kanal/kuliner" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <div class="in">Kuliner</div>
                            </a>
                        </li>
                    </ul>
                    <div class="listview-title mt-2 mb-1">
                        <span>Halaman Penting</span>
                    </div>
                    <ul class="listview flush transparent no-line image-listview mt-2">
                        <li>
                            <a href="<?= base_url() ?>redaksi" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <div class="in">Redaksi</div>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>kontak" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <div class="in">Kontak Kami</div>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>pedoman" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <div class="in">Pedoman Media Siber</div>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url("disclaimer") ?>" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <div class="in">Disclaimer</div>
                            </a>
                        </li>
                        <li>
                            <a href="privacy" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <div class="in">Privacy Policy</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <br>
                <!-- sidebar buttons -->
                <div class="sidebar-buttons">
                    <a href="https://www.facebook.com/jatimtimesnetwork/" target="_blank" class="button">
                        <ion-icon name="logo-facebook" style="color: #0165e1"></ion-icon>
                    </a>
                    <a href="https://youtube.com/c/JatimTIMESNetworkOfficialVideos" target="_blank" class="button">
                        <ion-icon name="logo-youtube" style="color: #ff0000"></ion-icon>
                    </a>
                    <a href="https://instagram.com/jatimtimescom" target="_blank" class="button">
                        <ion-icon name="logo-instagram" style="color: #ff0073"></ion-icon>
                    </a>
                    <a href="https://www.tiktok.com/@jatimtimes" target="_blank" class="button">
                        <ion-icon name="logo-tiktok" style="color: #000040"></ion-icon>
                    </a>
                </div>
                <!-- * sidebar buttons -->
            </div>
        </div>
    </div>
    <!-- * App Sidebar -->
    <style>
        .footer {
            background: #212121;
            padding: 32px 0;
            overflow: hidden;
            color: #fefefe;
            font-size: 14px;
            font-weight: 600;
            position: relative;
        }
    </style>
    <footer>
        <div class="footer">
            <div class="container py-3">
                <div class="row mt-5">
                    <div class="col-lg-8 col-12 mb-3">
                        <div class="media">
                            <img src="https://lh3.googleusercontent.com/_x0eP5LbSX9BWgkmwRHSJXe8lgn7FyrfyM5P0kNJyiTqcJFHn-WJzCo8P_bs5VnwZw=w300" class="mr-3" alt="Jatim Times Network" width="100px">
                            <div class="media-body">
                                <h4 class="mt-0" style="color: #fff;">Tentang Jatim Times Network</h4>
                                Media Online Mainstream Pertama di Jawa Timur, menyajikan info berita Jawa Timur yang
                                membangun, menginspirasi, dan berpositif thinking berdasarkan jurnalisme positif.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <h4 class="mt-0" style="color: #ffffff;">Follow Jatim Times Network</h4>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="https://instagram.com/jatimtimescom" comet="_blank" class="text-light">
                                    <ion-icon name="logo-instagram"></ion-icon> @jatimtimescom
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/jatimtimesnetwork/" target="_blank" class="text-light">
                                    <ion-icon name="logo-facebook"></ion-icon> jatimtimes.com
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.tiktok.com/@jatimtimes" target="_blank" class="text-light">
                                    <ion-icon name="logo-tiktok"></ion-icon> @jatimtimes
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://youtube.com/c/JatimTIMESNetworkOfficialVideos" comet="_blank" class="text-light">
                                    <ion-icon name="logo-youtube"></ion-icon> @jatimtimes
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom footer">
            <div class="container py-3">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <ul class="list-inline text-uppercase" style="font-size: 12px;">
                            <li class="list-inline-item">
                                <a href="<?= base_url() ?>/redaksi" class="text-light" title="Tentang Kami">Tentang Kami</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="<?= base_url() ?>/redaksi" class="text-light" title="Redaksi">Redaksi</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="<?= base_url() ?>/info-iklan" class="text-light" title="Info Iklan">Info Iklan</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="text-light" title="Kebijakan Data Pribadi">Kebijakan Data Pribadi</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="text-light" title="Pedoman Media Siber">PMC</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="text-light" title="Privacy Policy">Policy</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="text-light" target="Network">Network</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="text-light text-uppercase copyright">
                            <span>NEW DESIGN development by</span> <a href="https://jatimtimes.my.id" target="_blank" title="JTN DEV"> JTN DEV</a>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-2">
                    <img src="https://risetcdn.jatimtimes.com/images/2021/10/22/Logo1-verif-jt-dp2x1bd16774bef5bb63.png" width="100px" alt="JatimTimes Media Terverifikasi Dewan Pers" loading="lazy" fetchpriority="high">
                    <p class="text-muted">&copy; 2016 - 2023 <a href="https://www.jatimtimes.com/" alt="Jatim Times Network">Jatim Times Network</a>.
                        <br>
                        <span class="font-weight-light">Load time: <strong>{elapsed_time}</strong> detik. Diakses melalui
                            <strong><?= $this->agent->platform() ?></strong></span>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Share -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/assisfery/SocialShareJS@1.4/social-share.min.js"></script>
    <!-- !Share -->
    <!-- Jquery -->
    <script src="<?= base_url() ?>/assets/js/lib/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap-->
    <script src="<?= base_url() ?>/assets/js/lib/popper.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/lib/bootstrap.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!-- Owl Carousel -->
    <script src="<?= base_url() ?>/assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
    <!-- jQuery Circle Progress -->
    <script src="<?= base_url() ?>/assets/js/plugins/jquery-circle-progress/circle-progress.min.js"></script>
    <!-- Base Js File -->
    <script src="<?= base_url() ?>/assets/js/base.js"></script>
    <!-- Script Sticky Date -->
    <script>function display_ct7(){var t=new Date;day=(1==(day=t.getDay()).length,["Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu"][t.getDay()]),hours=1==(hours=t.getHours()).toString().length?0+hours.toString():hours;var e=t.getMinutes().toString();e=1==e.length?0+e:e;var n=t.getSeconds().toString();n=1==n.length?0+n:n;var g=(t.getMonth()+1).toString();g=(1==g.length,["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"][t.getMonth()]);var a=t.getDate().toString(),i=day+", "+(a=1==a.length?0+a:a)+" "+g+" "+t.getFullYear();i=i+" - "+hours+":"+e+":"+n+" WIB",document.getElementById("ct7").innerHTML=i,display_c7()}function display_c7(){mytime=setTimeout("display_ct7()",1e3)}display_c7();</script>
    <?php isset($footer_script) ? $this->load->view("script/" . $footer_script) : '' ?>

    <span style="position:sticky;bottom:0;text-align:center;color:#000;--x:50%;--y:50%;align-items:center;justify-content:center;appearance:none;padding:2px 2px;color:#fff;cursor:pointer;outline:0;border-radius:5px;background:linear-gradient(#000,#000) padding-box,radial-gradient(farthest-corner at var(--x) var(--y),#00c9a7,#845ec2) border-box" id="ct7"></span>
    <!-- Script for Service Worker -->
    <script>
      window.addEventListener('load', () => {
      registerSW();
      });
    
      // Register the Service Worker
      async function registerSW() {
      if ('serviceWorker' in navigator) {
        try {
        await navigator
            .serviceWorker
            .register('serviceworker.js');
        }
        catch (e) {
        console.log('SW registration failed');
        }
      }
      }
    </script>
    <!-- End PWA -->
    <!-- Install -->
    <script>
      let deferredPrompt;
      window.addEventListener('beforeinstallprompt', (e) => {
          deferredPrompt = e;
      });

      const installApp = document.getElementById('installApp');
      installApp.addEventListener('click', async () => {
          document.querySelector('#installApp').style.display = 'none';
          document.querySelector('#ketInstallApp').style.display = 'block';
          if (deferredPrompt !== null) {
              deferredPrompt.prompt();
              const { outcome } = await deferredPrompt.userChoice;
              if (outcome === 'accepted') {
                  deferredPrompt = null;
                }
            }
      });
    </script>
    <!-- Install -->

    <!-- FB Comment -->
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v16.0&appId=582470740510509&autoLogAppEvents=1" nonce="LhWvjlAn"></script>
</body>

</html>