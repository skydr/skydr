<?php

// Make the page validate
ini_set('session.use_trans_sid', '0');

// Create a random string, leaving out 'o' to avoid confusion with '0'
$char = strtoupper(substr(str_shuffle('abcdefghjkmnpqrstuvwxyz'), 0, 4));

// Concatenate the random string onto the random numbers
// The font 'Anorexia' doesn't have a character for '8', so the numbers will only go up to 7
// '0' is left out to avoid confusion with 'O'
$str = rand(1, 7) . rand(1, 7) . $char;

// Begin the session
session_start();

// Set the session contents
$_SESSION['captcha_id'] = $str;

?>

<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <title>Тимонов Максим</title>

    	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Графический дизайнер">
	<meta name="author" content="Тимонов Максим">
    	<!-- fb -->
    <meta property="og:title" content="Тимонов Максим | Дизайнер">
    <meta property="og:type" content="website">
    <meta property="profile:first_name" content="Maksim"/>
<meta property="profile:last_name" content="Timonov"/>
<meta property="profile:username" content="skaidr"/>
    <meta property="og:image" content="http://timonov.me/assets/img/1.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:url" content="http://timonov.me/index.html">
    <meta property="og:site_name" content="Тимонов Максим | Графический дизайнер">
    <meta property="fb:admins" content="100000448727002"/>
    <meta property="og:description" content="Разработка web сайтов, брендирование, фирменный стиль, печатная продукция.">
    	<!-- vk -->
    <link rel="image_src" href="http://timonov.me/assets/img/bg/1.jpg">
     	<!-- g -->
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77428840-1', 'auto');
  ga('send', 'pageview');

</script>
   <!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter37230970 = new Ya.Metrika({
                    id:37230970,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/37230970" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png">
 <link rel="stylesheet" href="assets/plugins/pace/pace-flash.css">
       <script src="assets/plugins/pace/pace.min.js"></script>
    <script src="assets/js/plugins/pace-loader.js"></script>

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/blocks.css">
    <link rel="stylesheet" href="assets/css/one.style.css">
   

    <!-- CSS Footer -->
    <link rel="stylesheet" href="assets/css/footers/footer-v7.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/plugins/animate.css">
    
    <link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/plugins/owl-carousel2/assets/owl.carousel.css">
    <link rel="stylesheet" href="assets/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css">
    <link rel="stylesheet" href="assets/plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css">
    <link rel="stylesheet" href="assets/plugins/shhos/shhos.css">
    <link rel="stylesheet" href="assets/plugins/image-hover/css/img-hover.css">
    <link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
    <link rel="apple-touch-icon" href="assets/img/webclip.png">


    <link rel="stylesheet" type="text/css" href="assets/plugins/revolution-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <!-- Web Fonts -->
    <script src="https://use.typekit.net/pwp4mke.js"></script>
    <script>
        try {
            Typekit.load({
                async: true
            });
        } catch (e) {}
    </script>

    <link href='https://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700' rel='stylesheet' type='text/css'>
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/revolution-slider/revolution/css/settings.css">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/revolution-slider/revolution/css/layers.css">
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/revolution-slider/revolution/css/navigation.css">


    <!-- CSS Theme -->
    <link rel="stylesheet" href="assets/css/app.style.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body id="body" data-spy="scroll" data-target=".one-page-header" class="demo-lightbox-gallery">
  
    <!-- Header -->
    <nav class="one-page-header navbar navbar-default navbar-fixed-animate homeapp-header" data-role="navigation">
        <div class="container">
            <div class="menu-container page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="#body">
                    <img src="assets/img/logo-dark.png" alt="Logo">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <div class="menu-container">
                    <ul class="nav navbar-nav">
                        <li class="page-scroll home">
                            <a href="#body">Главное</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#about">О Себе</a>
                        </li>
                   
                        <li class="page-scroll">
                            <a href="#projects">Работы</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#clients">Клиенты</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#contacts">Контакты</a>
                        </li>
 <!-- openlater
                        <li class="page-scroll hidden-xs hidden-sm">
                            <a href="#" class="btn-u btn-u-lg btn-u-green btn-u-upper rounded-2x" data-toggle="modal" data-target="#email">Написать</a>
                        </li>-->
                    </ul>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- End Header -->
    <div class="promo">
        <div id="rev_slider_104_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="scroll-effect76" style="background-color:#111111;padding:0px;">
            <!-- START REVOLUTION SLIDER 5.0.7 fullscreen mode -->
            <div id="rev_slider_104_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.0.7">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-309" data-transition="slideoverhorizontal" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000" data-thumb="assets/img-temp/promo/bigbold_3-100x50.jpg" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Тимонов Максим" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="assets/img-temp/promo/hexcover.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- BACKGROUND VIDEO LAYER -->
                        <canvas class="rs-background-video-layer" data-forcerewind="on" data-volume="mute" data-videowidth="100%" data-videoheight="100%" data-videopreload="preload" data-videostartat="00:10" data-videoloop="loop" data-forceCover="0" data-aspectratio="16:9" data-autoplay="true" data-autoplayonlyfirsttime="false" data-nextslideatend="true" id="c1" data-noposteronmobile="on" data-stopallvideos="true" data-allowfullscreenvideo="true"></canvas>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0" id="slide-309-layer-11" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']" data-width="full" data-height="['400','400','400','550']" data-whitespace="nowrap" data-transform_idle="o:1;" data-style_hover="cursor:default;" data-transform_in="opacity:0;s:1500;e:Power2.easeInOut;" data-transform_out="opacity:0;s:1000;s:1000;" data-start="0" data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 5;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);background:linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.45) 100%);">
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption BigBold-Title   tp-resizeme rs-parallaxlevel-0" id="slide-309-layer-1" data-x="['left','left','left','left']" data-hoffset="['50','50','30','17']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['110','110','180','160']" data-fontsize="['110','100','70','60']" data-lineheight="['110','100','70','60']" data-width="['none','none','none','400']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="500" data-splitin="none" data-splitout="none" data-basealign="slide" data-responsive_offset="off" style="z-index: 6; white-space: nowrap; font-family: futura-pt;">Тимонов Максим
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption BigBold-SubTitle   rs-parallaxlevel-0" id="slide-309-layer-4" data-x="['left','left','left','left']" data-hoffset="['55','55','33','20']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['40','1','74','58']" data-fontsize="['15','15','15','13']" data-lineheight="['24','24','24','20']" data-width="['410','410','410','280']" data-height="['60','100','100','100']" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="650" data-splitin="none" data-splitout="none" data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 7; min-width: 410px; max-width: 410px; max-width: 60px; max-width: 60px; white-space: normal; font-family: pt sans caption;">
                            Графический дизайнер. Решаю задачи. Качественно и в срок.
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption BigBold-Button rev-btn  rs-parallaxlevel-0" id="slide-309-layer-7" data-x="['left','left','left','left']" data-hoffset="['480','480','30','20']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['50','50','30','20']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="650" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"scrollbelow","offset":"px"}]' data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 8; white-space: nowrap;border-color:rgba(255, 255, 255, 0.25);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box; font-family: pt sans caption;">ПОДРОБНЕЕ
                        </div>

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption BigBold-Button rev-btn  rs-parallaxlevel-0" id="slide-309-layer-12" data-x="['left','left','left','left']" data-hoffset="['676','676','226','216']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['50','50','30','20']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="650" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]' data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 9; white-space: nowrap;padding:15px 20px 15px 20px;border-color:rgba(255, 255, 255, 0.25);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"><i class="fa fa-chevron-right"></i>
                        </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-310" data-transition="slideoverhorizontal" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000" data-thumb="assets/img-temp/promo/typing_cover-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="HTML5 Video" data-description="">
                        <!-- MAIN IMAGE -->
                         <img src="assets/img-temp/promo/y1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- BACKGROUND VIDEO LAYER -->
                           
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0" id="slide-310-layer-11" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']" data-width="full" data-height="['400','400','400','550']" data-whitespace="nowrap" data-transform_idle="o:1;" data-style_hover="cursor:default;" data-transform_in="opacity:0;s:1500;e:Power2.easeInOut;" data-transform_out="opacity:0;s:1000;s:1000;" data-start="0" data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 5;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);background:linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.45) 100%);">
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption BigBold-Title   tp-resizeme rs-parallaxlevel-0" id="slide-310-layer-1" data-x="['left','left','left','left']" data-hoffset="['50','50','30','17']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['110','110','180','160']" data-fontsize="['110','100','70','60']" data-lineheight="['100','90','60','60']" data-width="['none','none','none','400']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-splitin="none" data-splitout="none" data-basealign="slide" data-responsive_offset="off" style="z-index: 6; white-space: nowrap;">ЕСТЬ РАБОТА?
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption BigBold-SubTitle   rs-parallaxlevel-0" id="slide-310-layer-4" data-x="['left','left','left','left']" data-hoffset="['55','55','33','20']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['40','1','74','58']" data-fontsize="['15','15','15','13']" data-lineheight="['24','24','24','20']" data-width="['410','410','410','280']" data-height="['60','100','100','100']" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="650" data-splitin="none" data-splitout="none" data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 7; min-width: 410px; max-width: 410px; max-width: 60px; max-width: 60px; white-space: normal;">Считайте она уже сделана. Быстро предлагаю решение в поставленный срок и бюджет.
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption BigBold-Button rev-btn  rs-parallaxlevel-0" id="slide-310-layer-7" data-x="['left','left','left','left']" data-hoffset="['480','480','30','20']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['50','50','30','20']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="650" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"scrollbelow","offset":"px"}]' data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 8; white-space: nowrap;border-color:rgba(255, 255, 255, 0.25);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">ПОДРОБНЕЕ
                        </div>

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption BigBold-Button rev-btn  rs-parallaxlevel-0" id="slide-310-layer-12" data-x="['left','left','left','left']" data-hoffset="['676','676','226','216']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['50','50','30','20']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="650" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]' data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 9; white-space: nowrap;padding:15px 20px 15px 20px;border-color:rgba(255, 255, 255, 0.25);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"><i class="fa fa-chevron-right"></i>
                        </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-311" data-transition="slideoverhorizontal" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000" data-thumb="assets/img-temp/promo/bigbold_1-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Scroll Down" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="assets/img-temp/promo/y2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0" id="slide-311-layer-11" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']" data-width="full" data-height="['400','400','400','550']" data-whitespace="nowrap" data-transform_idle="o:1;" data-style_hover="cursor:default;" data-transform_in="opacity:0;s:1500;e:Power2.easeInOut;" data-transform_out="opacity:0;s:1000;s:1000;" data-start="0" data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 5;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);background:linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.45) 100%);">
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption BigBold-Title   tp-resizeme rs-parallaxlevel-0" id="slide-311-layer-1" data-x="['left','left','left','left']" data-hoffset="['50','50','30','17']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['110','110','180','160']" data-fontsize="['110','100','70','60']" data-lineheight="['100','90','60','60']" data-width="['none','none','none','400']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="500" data-splitin="none" data-splitout="none" data-basealign="slide" data-responsive_offset="off" style="z-index: 6; white-space: nowrap;">БЕЗ ТЗ
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption BigBold-SubTitle   rs-parallaxlevel-0" id="slide-311-layer-4" data-x="['left','left','left','left']" data-hoffset="['55','55','33','20']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['40','1','74','58']" data-fontsize="['15','15','15','13']" data-lineheight="['24','24','24','20']" data-width="['410','410','410','280']" data-height="['60','100','100','100']" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="650" data-splitin="none" data-splitout="none" data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 7; min-width: 410px; max-width: 410px; max-width: 60px; max-width: 60px; white-space: normal;">Предлагаю решения без нервов и ТЗ. Пара собеседований и решение уже у вас в кармане.
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption BigBold-Button rev-btn  rs-parallaxlevel-0" id="slide-311-layer-7" data-x="['left','left','left','left']" data-hoffset="['480','480','30','20']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['50','50','30','20']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="650" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"scrollbelow","offset":"px"}]' data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 8; white-space: nowrap;border-color:rgba(255, 255, 255, 0.25);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">ПОДРОБНЕЕ
                        </div>

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption BigBold-Button rev-btn  rs-parallaxlevel-0" id="slide-311-layer-12" data-x="['left','left','left','left']" data-hoffset="['676','676','226','216']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['50','50','30','20']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="650" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]' data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 9; white-space: nowrap;padding:15px 20px 15px 20px;border-color:rgba(255, 255, 255, 0.25);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"><i class="fa fa-chevron-right"></i>
                        </div>
                    </li>
                </ul>
                <div class="tp-static-layers"></div>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div>
        <!-- END REVOLUTION SLIDER -->
    </div>
    <div id="about" class="container content-sm">
        <div class="row about-me">
            <div class="col-sm-4 shadow-wrapper md-margin-bottom-40">
                <div class="box-shadow shadow-effect-2">
                    <img class="img-responsive img-bordered full-width" src="assets/img-temp/img32-md.jpg" alt="">
                </div>
            </div>

            <div class="col-sm-8">
                <div class="overflow-h">
                    <div class="pull-left">
                        <h2>Тимонов Максим</h2>
                        <span>Графический дизайнер</span>
                    </div>
                   
                </div>
                <p>7 лет обучения с отличием в профильном институте <a href="http://www.mhpi.edu.ru/">(МХПИ)</a>. Специализация Графический дизайн. Стажировки и работа в агенствах. Что это значит? Опыт работы от классического рисунка и живописи до современного продуктового дизайна. Работа руками и головой. Базовые знания в маркетинге, копирайтинге, веб технологий и взаимодействие с брендированием. Как реализовать все эти знания? Арт-дирекшен и опыт руководства дизайн отдела. Я использую все имеющиеся знания в работе.  Всегда в реальные сроки нахожу лучшие решения для ваших проектов.</p>
                <br>

                <div class="row">
                    <!-- Smallest Progress Bar -->
                    <div class="col-md-6 md-margin-bottom-40">
                        <h3 class="heading-xs">Решение задач - 98%</h3>
                        <div class="progress progress-u progress-sm">
                            <div class="progress-bar progress-bar-dark" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="width: 98%">
                            </div>
                        </div>

                        <h3 class="heading-xs">Харизма - 83%</h3>
                        <div class="progress progress-u progress-sm">
                            <div class="progress-bar progress-bar-dark" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100" style="width: 83%">
                            </div>
                        </div>
                    </div>
                    <!-- End Smallest Progress Bar -->

                    <!-- Smallest Progress Bar -->
                    <div class="col-md-6 md-margin-bottom-40">
                        <h3 class="heading-xs">Руководство - 76%</h3>
                        <div class="progress progress-u progress-sm">
                            <div class="progress-bar progress-bar-dark" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%">
                            </div>
                        </div>

                        <h3 class="heading-xs">Перфекционизм - 50,5%</h3>
                        <div class="progress progress-u progress-sm">
                            <div class="progress-bar progress-bar-dark" role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                            </div>
                        </div>
                    </div>
                    <!-- End Smallest Progress Bar -->
                </div>
            </div>
        </div>
    </div>
    
<div class="panel-group acc-v1" id="accordion-1">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title text-center">
									<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-One" aria-expanded="false" style="
    border-top: 9px solid yellow;
    font-family: 'futura-pt';
">
										ПОДРОБНЕЕ 
									</a>
                                    
                                <a class="triang"></a>
								</h4>
							</div>
							<div id="collapse-One" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
								<div>
									
                                     <div class="v-tab-content text-center g-heading-v7 g-mb-0" id="WorkProcess" style="
    border-top: 9px solid #ffe100;
">
        <div class="container">
            <h2 class="h2"><em class="block-name">02. Профиль</em> Специализация</h2>
            <div class="row g-mb-70">
                <div class="col-sm-8 col-sm-offset-2 subh">
                    Ключевые направления в которых мне интересно работать.
                </div>
            </div>

            <div class="row text-left">
                <div class="col-sm-3">
             
                    <ul class="nav nav-tabs nav-stacked g-mb-30" role="tablist">
                        <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Web + App</a></li>
                        <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Брендирование</a></li>
                        <li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Руководство</a></li>
                        <li role="presentation"><a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">Навыки</a></li>
                    </ul>
                </div>

                <div class="col-sm-9">
                 
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="tab1">
                            <p class="g-mb-30"><img src="assets/img-temp/process/1.png" alt="" class="img-responsive"></p>
                            <div class="row">
                                <div class="col-md-4 col-sm-6 g-mb-30">
                                    <div class="g-display-table g-mb-15">
                                        <div class="g-display-td g-text-middle ynum">
                                            <i class="num-icon-v2">1</i>
                                        </div>
                                        <div class="g-display-td g-text-middle">
                                            <h4>Apps (iOS &amp; Android)</h4>
                                        </div>
                                    </div>

                                    <p class="ptab">PS\Sketch + Zepplin. Разработка приложений от идейной конепции до рабочих прототипов (wireframe) и финального дизайна. Знание гайдов iOS &amp; Android. Составление ТЗ для разработки, составление полного сценария пользователя. Прототипирование invision, Adobe Xd и дригое. </p>
                                </div>
                                <div class="col-md-4 col-sm-6 g-mb-30">
                                    <div class="g-display-table g-mb-15">
                                        <div class="g-display-td g-text-middle ynum">
                                            <i class="num-icon-v2">2</i>
                                        </div>
                                        <div class="g-display-td g-text-middle">
                                            <h4>WEB порталы</h4>
                                        </div>
                                    </div>

                                    <p class="ptab">Новостные агрегаторы, блоги и магазины. Консультирование в подборе платформы. Разработка списка функционала, карты пользователя, wireframe и финальный дизайн. Оформление в ТЗ для верстки с логикой и правилами обработки. При разработке уникального проекта, партнерские программы с IT агенствами на разработку и обслуживание.</p>
                                </div>
                                <div class="col-md-4 col-sm-12 g-mb-30">
                                    <div class="g-display-table g-mb-15">
                                        <div class="g-display-td g-text-middle ynum">
                                            <i class="num-icon-v2">3</i>
                                        </div>
                                        <div class="g-display-td g-text-middle">
                                            <h4>Лендинги</h4>
                                        </div>
                                    </div>

                                    <p class="ptab">Разработка как resposive лендингов с модульными блоками, так и индивидуальные лендниги с анимацией и сценариями для разовых акций. Продуктовые лендинги для быстрого продвижения товара.</p>
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab2">
                            <p class="g-mb-30"><img src="assets/img-temp/process/2.jpg" alt="" class="img-responsive"></p>
                            <div class="row">
                                <div class="col-sm-6 g-mb-30">
                                    <div class="g-display-table g-mb-15">
                                        <div class="g-display-td g-text-middle ynum">
                                            <i class="num-icon-v2">1</i>
                                        </div>
                                        <div class="g-display-td g-text-middle">
                                            <h4>Фирменный стиль</h4>
                                        </div>
                                    </div>

                                    <p class="ptab">Логотип и фирменный стиль. Фирменный стиль наполняется не абстрактными кружками и ручками, а необходимыми элементами именно вам. В пакет входит верстка макетов буклетов, листовок, разработка афиш. Руководство для оформления сайта, группы в соц. сетях и других элементах.</p>
                                </div>
                                <div class="col-sm-6 g-mb-30">
                                    <div class="g-display-table g-mb-15">
                                        <div class="g-display-td g-text-middle ynum">
                                            <i class="num-icon-v2">2</i>
                                        </div>
                                        <div class="g-display-td g-text-middle">
                                            <h4>Marketing kit</h4>
                                        </div>
                                    </div>

                                    <p class="ptab">Как только мы разобрались где и что лежит пришла пора рекламировать. Кей вижуал - это основной визуальный мотив на одну рекламную кампанию. Он может распросатраняться как на печатную продукцию так и в сот. сети.</p>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab3">
                            <p class="g-mb-30"><img src="assets/img-temp/process/3.jpg" alt="" class="img-responsive"></p>
                            <p class="ptab">Веду малые фриланс команды дизайнеров. Составление брифов, тз и контроль исполнения. Работа с аутсорсом и штатными сотрудниками. Так же преподаю фотошоп, иллюстратор, индизайн в институте Бизнеса и Дизайна (B&amp;D). Эти навыки позволяюта работать с сотрудниками, презентовать проекты, прислушиваться к клиенту и вести конструктивный диалог со всеми участниками проекта.</p>
                        </div>
                         <div role="tabpanel" class="tab-pane fade" id="tab4">
                            <p class="g-mb-30"><img src="assets/img-temp/process/1.png" alt="" class="img-responsive"></p>
                            <div class="row">
                                <div class="col-md-4 col-sm-6 g-mb-30">
                                    <div class="g-display-table g-mb-15">
                                        <div class="g-display-td g-text-middle ynum">
                                            <i class="num-icon-v2">1</i>
                                        </div>
                                        <div class="g-display-td g-text-middle">
                                            <h4>Разработка макетов</h4>
                                        </div>
                                    </div>

                                    <p class="ptab">Раскадровка от руки (бумага+карандаш). Дизайн с нуля: Photoshop, Sketch, Adobe Xd. Прототипирование: Zepplin, invision, прототип (html\css).  </p>
                                </div>
                                <div class="col-md-4 col-sm-6 g-mb-30">
                                    <div class="g-display-table g-mb-15">
                                        <div class="g-display-td g-text-middle ynum">
                                            <i class="num-icon-v2">2</i>
                                        </div>
                                        <div class="g-display-td g-text-middle">
                                            <h4>Прототипирование</h4>
                                        </div>
                                    </div>

                                    <p class="ptab">adobe xd zepplin invision. adobe muse wordpress adobe reflow foursquere tilda и любые другие платформы.quartz adobe after effects java composer. html\css wordpress bootstrap brackets\subline.</p>
                                </div>
                                <div class="col-md-4 col-sm-12 g-mb-30">
                                    <div class="g-display-table g-mb-15">
                                        <div class="g-display-td g-text-middle ynum">
                                            <i class="num-icon-v2">3</i>
                                        </div>
                                        <div class="g-display-td g-text-middle">
                                            <h4>Картинка</h4>
                                        </div>
                                    </div>

                                    <p class="ptab">Обработка и съемка фотографий, работа с иллюстрациями, инфографикой. Работа с аутсорс специалистами.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
                                    
                                    
								</div>
							</div>
						</div>

						

						

						
					</div> 

    <section id="projects" style="
    padding-top: 30px;
">
        <div class="container-fluid no-side-padding">
            <div class="container g-heading-v7 text-center g-mb-10">
                <h2 class="h2 hb"><em class="block-name-b">03. Мои дизайн</em> Проекты</h2>
            </div>
 <div>
       <!-- openlater 
            <div id="js-filters-mosaic" class="cbp-l-filters-button text-center">
        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
            Все <div class="cbp-filter-counter"></div>
        </div>
        <div data-filter=".stand" class="cbp-filter-item">
            Стенды <div class="cbp-filter-counter"></div>
        </div>
        <div data-filter=".web" class="cbp-filter-item">
            Web <div class="cbp-filter-counter"></div>
        </div>
        <div data-filter=".app" class="cbp-filter-item">
            App <div class="cbp-filter-counter"></div>
        </div>
        <div data-filter=".other" class="cbp-filter-item">
            Другое <div class="cbp-filter-counter"></div>
        </div>
    </div>
-->
    <div id="js-grid-mosaic" class="cbp cbp-l-grid-mosaic" style="background:black;">
        <div class="cbp-item other">
            <a href="assets/ajax/teaching.html" class="cbp-caption cbp-singlePage"
               data-title="Bolt UI<br>by Tiberiu Neamu">
                <div class="cbp-caption-defaultWrap">
                    <img src="assets/img-temp/works/mosaic/img1.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">Преподавание</div>
                            <div class="cbp-l-caption-desc">B&amp;D</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item stand">
            <a href="assets/ajax/remember.html" class="cbp-caption cbp-singlePage"
               data-title="World Clock Widget<br>by Paul Flavius Nechita">
                <div class="cbp-caption-defaultWrap">
                    <img src="assets/img-temp/works/mosaic/5.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">Помни</div>
                            <div class="cbp-l-caption-desc">РВИО</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item web">
            <a href="assets/ajax/elki1914.html" class="cbp-caption cbp-singlePage"
               data-title="WhereTO App<br>by Tiberiu Neamu">
                <div class="cbp-caption-defaultWrap">
                    <img src="assets/img-temp/works/mosaic/3.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">Елки 1914</div>
                            <div class="cbp-l-caption-desc">Bazelevs</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item app">
            <a href="assets/ajax/gtg.html" class="cbp-caption cbp-singlePage"
               data-title="iDevices<br>by Tiberiu Neamu">
                <div class="cbp-caption-defaultWrap">
                    <img src="assets/img-temp/works/mosaic/2.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">Арт-конструктор</div>
                            <div class="cbp-l-caption-desc">Третьяковская галерея</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item web">
            <a href="assets/ajax/mgpu.html" class="cbp-caption cbp-singlePage"
               data-title="Seemple* Music for iPad<br>by Tiberiu Neamu">
                <div class="cbp-caption-defaultWrap">
                    <img src="assets/img-temp/works/mosaic/1.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">Портал МГПУ</div>
                            <div class="cbp-l-caption-desc">МГПУ</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item stand">
            <a href="assets/ajax/artplay.html" class="cbp-caption cbp-singlePage"
               data-title="Remind~Me Widget<br>by Tiberiu Neamu">
                <div class="cbp-caption-defaultWrap">
                    <img src="assets/img-temp/works/mosaic/6.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">Интерактивный стенд</div>
                            <div class="cbp-l-caption-desc">Артплей</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    </div>
   
            <!-- Projects cube-portfolio/ what we did -->
        </div>
    </section>
    <section id="clients">
        <div class="awards-section">

            <div class="container-fluid bg-color-com content-md">
                <div class="container">
                    <!-- Clients -->
                    <div class="row">
                        <div class="text-center g-heading-v7">
                            <h2 class="h2" style="
    color: white;
"><em class="block-name">04. Меня рекомендуют</em> Клиенты</h2></div>
                        <div class="col-md-12 col-sm-12 clients">
                            <ul class="list-unstyled clients-list" id="effect-2">
                                <li class="client-cell first-cell">
                                    <figure>


                                        <img class="img-responsive img-c" src="assets/img-temp/clients/dep.png" alt="">

                                        <div class="img-hover">
                                            <a href="https://dogm.mos.ru/"><h4>Департамент образования<br>города Москвы</h4></a>
                                        </div>
                                    </figure>
                                </li>
                                <li class="client-cell second-cell">
                                    <figure>


                                        <img class="img-responsive img-c" src="assets/img-temp/clients/gtg.png" alt="" style="padding-bottom: 16px;">
                                        <div class="img-hover">
                                            <a href="http://www.tretyakovgallery.ru/ru/education/education4739/"><h4>Третьяковская<br>галерея</h4></a>
                                        </div>
                                    </figure>
                                </li>
                                <li class="client-cell third-cell">
                                    <figure>


                                        <img class="img-responsive img-c" src="assets/img-temp/clients/bzv.png" alt="">
                                        <div class="img-hover">
                                            <a href="http://bazelevs.ru/"><h4>Кинокомпания<br>BAZELEVS</h4></a>
                                        </div>
                                    </figure>
                                </li>
                                
                                <li class="client-cell fourth-cell">
                                    <figure>
                                    

                                        <img class="img-responsive img-c" src="assets/img-temp/clients/rvio.png" alt=""> <div class="img-hover">
                                            <a href="http://rvio.histrf.ru/"><h4>Российское военно-историческое общество</h4></a>
                                        </div>
                               </figure>
                                </li>
                                <li class="client-cell fifth-cell">
                                    <figure>
                                  

                                        <img class="img-responsive img-c" src="assets/img-temp/clients/mgpu.png" alt=""><div class="img-hover">
                                         <a href="https://www.mgpu.ru/"><h4>Московский городской университет <br> МГПУ</h4></a>
                                        </div>
                               </figure> </li>
                                <li class="client-cell sixth-cell">
                                    <figure>
                                  

                                        <img class="img-responsive img-c" src="assets/img-temp/clients/int.png" alt=""><div class="img-hover">
                                           <a href="http://integroclub.ru/"><h4>Клуб <br> Интеграция</h4></a>
                                        </div>
                                </figure></li>
                                
                                <li class="client-cell seventh-cell">
                                    <figure>
                                  

                                        <img class="img-responsive img-c" src="assets/img-temp/clients/bid.png" alt=""><div class="img-hover">
                                          <a href="http://obe.ru/"><h4>Институт<br>Бизнеса и Дизайна</h4></a>
                                        </div>
                               </figure>
                                </li>
                                <li class="client-cell last-cell">
                                    <figure>


                                        <img class="img-responsive img-c" src="assets/img-temp/clients/mcko.png" alt=""><div class="img-hover">
                                        <a href="https://mcko.ru/"><h4>Московский центр <br> качества образования</h4></a>
                                        </div>
                                </figure></li>
                            </ul>
                            <div class="container content job-partners">



                            </div>
                            <!--/container-->

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contacts" class="bg-y">
        <div class="container content-md g-text-height-md">
            <div class="row g-mb-60 text-center g-heading-v7">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2 class="h2 hb">
						<span class="block-name-b">05. Всегда на связи</span>
						<span class="g-text-height-lg">Контакты</span>
					</h2>
                    <p class="blt">Вы можете найти меня в социальных сетях, написать письмо, оставить отзыв или пожелания. Подписывайтесь на статьи и скидки для проектов.</p>
                </div>
            </div>

            <!-- Contact Details -->
            <ul class="list-unstyled row text-center">
                <li class="col-md-3 col-sm-3 contact-blocks-v1">
                    <a class="conta" href="#" data-toggle="modal" data-target="#social">
                    <i class="contact-blocks-v1__icon g-display-block g-color-primary icon-globe iconta"></i>
                    <h4 class="hconta">Соц. Сети</h4>
                    <span class="g-display-block g-color-white sconta">Тематические</span></a>
                </li>
                <li class="col-md-3 col-sm-3 contact-blocks-v1">
                    <a class="conta" href="#" data-toggle="modal" data-target="#blog">
                    <i class="contact-blocks-v1__icon g-display-block g-color-primary icon-call-in iconta"></i>
                    <h4 class="hconta">Блог</h4>
                    <span class="g-display-block g-color-white sconta">Скоро открытие</span></a>
                </li>
                <li class="col-md-3 col-sm-3 contact-blocks-v1">
                    <a class="conta modal-opener" href="#sky-form">
                    <i class="contact-blocks-v1__icon g-display-block g-color-primary icon-envelope iconta"></i>
                    <h4 class="hconta">Почта</h4>
                    <span class="g-display-block g-color-white sconta">timonov.m.design@gmail.com</span></a>
                  
             
                    
                </li>
                <li class="col-md-3 col-sm-3 contact-blocks-v1"><a class="conta" href="#" data-toggle="modal" data-target="#review">
                    <i class="contact-blocks-v1__icon g-display-block g-color-primary icon-earphones-alt iconta"></i>
                    <h4 class="hconta">Отзывы</h4>
                    <span class="g-display-block g-color-white sconta">Прочитать или оставить отзыв</span></a>
                </li>
            </ul>
            <!-- Contact Details -->
        </div>

        <!-- Socials -->

        <ul class="list-unstyled btn-group btn-group-justified g-no-mb" style="
    margin-bottom: 0px;
">
            <li class="btn-group social-block-v1__list">
                <a href="#" class="btn social-block-v1__list-btn">
                    <i class="fa fa-facebook"></i>
                </a>
            </li>
            <li class="btn-group social-block-v1__list">
                <a href="#" class="btn social-block-v1__list-btn">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
            <li class="btn-group social-block-v1__list">
                <a href="#" class="btn social-block-v1__list-btn">
                    <i class="fa fa-vk"></i>
                </a>
            </li>

            <li class="btn-group social-block-v1__list">
                <a href="#" class="btn social-block-v1__list-btn">
                    <i class="fa fa-instagram"></i>
                </a>
            </li>
            <li class="btn-group social-block-v1__list">
                <a href="#" class="btn social-block-v1__list-btn">
                    <i class="fa fa-linkedin"></i>
                </a>
            </li>
        </ul>
        <!-- End Socials -->


        <!-- Copyright and Subscribe -->
        <div class="bg-color-white">
            <div class="container text-center g-pt-30 g-pb-30">
                 <!-- Copenlater 
<h2 class="g-text-size-17 g-mb-10">ПОДПИШИСЬ</h2>
                <p>Рассылка раз в месяц с новостями и скидками на проекты</p>
                <form class="g-mb-20" action="">
                    <div class="form-group row">
                        <div class="input-group col-xs-6 col-xs-offset-3 subscribe-block-v1">
                            <input type="text" class="form-control subscribe-block-v1__form" id="exampleInputAmount" placeholder="Ваш email">
                            <div class="input-group-addon subscribe-block-v1__addon">
                                <i class="icon-envelope"></i>
                            </div>
                        </div>
                    </div>
                </form> -->
                <p class="g-color-gray-dark g-no-mb g-text-size-12">&copy; 2016 Все права защищены. Разработано <a href="" class="g-color-primary" data-toggle="modal" data-target="#myModal">Своими руками</a></p>

                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                <h4 id="myModalLabel1" class="modal-title">Разработка сайта</h4>
                            </div>
                            <div class="modal-body">
                                <h4>Немного магии и...</h4>
                                <p>Знание html\css и немного js позволяет разрабатывать несложные сайты самому. Данный сайт полностью сделан мной, как дизайнером так и в роли начинающего верстальщика. Базовые знания в верстка позволяют лучше продумывать сайт, знать технические возможности и объем используемых модулей при проектировании сайта.</p>
                            </div>
                            <div class="modal-footer">
                               
                                    <button data-dismiss="modal" class="btn-u-cl" type="button">Закрыть</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="modal fade" id="email" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                <h4 id="myModalLabel1" class="modal-title">Напишите мне</h4>
                            </div>
                            <div class="modal-body">
                                <h4>Всегда жду новых писем</h4>
                                <p>Вопросы и консультации по проектам. Дополнительная информация по услугам. Так же пожелания и отзывы вы можете отправить по почте:</p><p>Базовая консультация 5000 р. Разработка базового ТЗ 15 000р.</p>
                                <p>timonov.m.design@gmail.com</p>
                               	<div class="row" style="margin-top:30px;">
					
						<div class="col-md-12">
							<form action="#" method="post" id="sky-form3" class="sky-form contact-style">
								<fieldset>
									<div class="row">
										<div class="col-md-6 col-md-offset-0">
											<div class="margin-bottom-30">
												<input type="text" name="name" id="name" class="form-control" placeholder="Name">
											</div>

											<div class="margin-bottom-30">
												<input type="text" name="email" id="email" class="form-control" placeholder="Email *">
											</div>
										</div>

										<div class="col-md-6 col-md-offset-0">
											<div class="margin-bottom-30">
												<textarea rows="4" name="message" id="message" class="form-control g-textarea-noresize" placeholder="Message"></textarea>
											</div>
											<p><button type="submit" class="btn-u btn-u-lg btn-u-upper rounded-2x">Отправить</button></p>
										</div>
									</div>
								</fieldset>

								<div class="message">
									<i class="rounded-x fa fa-check"></i>
									<p>Your message was successfully sent!</p>
								</div>
							</form>
						</div>
					</div>
			
		

                            </div>
                            <div class="modal-footer">
                                
                                     <button data-dismiss="modal" class="btn-u-cl" type="button">Закрыть</button>
                            </div>
                        </div>
                    </div>
                </div>
     
                <div class="modal fade" id="social" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                <h4 id="myModalLabel1" class="modal-title">Мои соц. сети</h4>
                            </div>
                            <div class="modal-body">
                                <h4>Активные соц сети</h4>
                                <div class="row brand-page margin-bottom-40"><div class="col-sm-6 col-md-3 col-md-offset-3">
							<a class="btn-u btn-u-soc btn-block rounded" href="http://vk.com/skydr">
								<i class="fa fa-vk"></i> VK
							</a>
						</div><div class="col-sm-6 col-md-3">
							<a class="btn-u btn-block rounded btn-u-soc" href="https://www.facebook.com/skaidr">
								<i class="fa fa-facebook"></i> Facebook
							</a>
						</div></div>
                            
                                 <h4>Группы</h4>
                                  <div class="row brand-page margin-bottom-40"><div class="col-sm-6 col-md-3 col-md-offset-3">
							<a class="btn-u btn-block rounded btn-u-soc" href="http://vk.com/detrabin">
								<i class="fa fa-vk"></i> detrabin
							</a>
						</div><div class="col-sm-6 col-md-3">
							<a class="btn-u btn-block rounded btn-u-soc" href="http://vk.com/dejam">
								<i class="fa fa-facebook"></i> Design Jam
							</a>
						</div></div>
                            
                                <h4>Не активные и тематические</h4>
                                   <div class="row brand-page margin-bottom-20"><div class="col-sm-6 col-md-3">
							<a class="btn-u btn-block rounded btn-u-soc" href="https://www.instagram.com/skydr_/">
								 Инстаграм
							</a>
						</div>
                                       <div class="col-sm-6 col-md-3">
							<a class="btn-u btn-block rounded btn-u-soc" href="https://twitter.com/13malix1">
								 Твитер
							</a>
						</div>
                                             <div class="col-sm-6 col-md-3">
							<a class="btn-u btn-block rounded btn-u-soc" href="http://myanimelist.net/animelist/skydr">
								MyAnimeList
							</a>
						</div>
                                             <div class="col-sm-6 col-md-3">
							<a class="btn-u btn-block rounded btn-u-soc" href="https://hummingbird.me/users/Skydr">
							 hummibird
							</a>
						</div>
                                           
                                </div>
                               <div class="row brand-page margin-bottom-40">
                                             <div class="col-sm-6 col-md-3">
							<a class="btn-u btn-block rounded btn-u-soc" href="http://www.last.fm/ru/user/SkyDr">
							 lastfm
							</a>
						</div>
                                             <div class="col-sm-6 col-md-3">
							<a class="btn-u btn-block rounded btn-u-soc" href="http://www.imdb.com/user/ur61701313/">
							 imdb
							</a>
						</div> <div class="col-sm-6 col-md-3">
							<a class="btn-u btn-block rounded btn-u-soc" href="http://www.imdb.com/user/ur61701313/">
							 Мой круг
							</a>
						</div>
                                   <div class="col-sm-6 col-md-3">
							<a class="btn-u btn-block rounded btn-u-soc" href="http://www.imdb.com/user/ur61701313/">
							 hh.ru
							</a>
						</div>
                                </div>
                            
                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn-u-cl" type="button">Закрыть</button>
                            </div>
                        </div>
                    </div>
                </div>
     
                <div class="modal fade" id="blog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                <h4 id="myModalLabel1" class="modal-title">Скоро открытие блога</h4>
                            </div>
                            <div class="modal-body">
                                <h4>Блог</h4>
                                <p>Подпишитесь на новостную рассылку и первыми узнаете об открытии блога.</p>
                            </div>
                            <div class="modal-footer">
                                  <button data-dismiss="modal" class="btn-u-cl" type="button">Закрыть</button>
                            </div>
                        </div>
                    </div>
                </div>
     
                <div class="modal fade" id="review" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                <h4 id="myModalLabel1" class="modal-title">Отзывы</h4>
                            </div>
                            <div class="modal-body">
                                <h4>Напишите отзывы</h4>
                                <p>timonov.m.design@gmail.com</p>
                             
                            </div>
                            <div class="modal-footer">
                                     <button data-dismiss="modal" class="btn-u-cl" type="button">Закрыть</button>
                            </div>
                        </div>
                    </div>
                </div>
     
            </div>
        </div>
        <!-- End Copyright and Subscribe -->
    </section>
      <!-- newform -->
           <form action="assets/plugins/sky-forms-pro/skyforms/demo-contacts-process.php" method="post" id="sky-form" class="sky-form sky-form-modal">

				<header>Contacts form</header>
				
				<fieldset>					
					<div class="row">
						<section class="col col-6">
							<label class="label">Name</label>
							<label class="input">
								<i class="icon-append fa fa-user"></i>
								<input type="text" name="name" id="name">
							</label>
						</section>
						<section class="col col-6">
							<label class="label">E-mail</label>
							<label class="input">
								<i class="icon-append fa fa-envelope-o"></i>
								<input type="email" name="email" id="email">
							</label>
						</section>
					</div>
					
					<section>
						<label class="label">Subject</label>
						<label class="input">
							<i class="icon-append fa fa-tag"></i>
							<input type="text" name="subject" id="subject">
						</label>
					</section>
					
					<section>
						<label class="label">Message</label>
						<label class="textarea">
							<i class="icon-append fa fa-comment"></i>
							<textarea rows="4" name="message" id="message"></textarea>
						</label>
					</section>
					
					<section>
						<label class="label">Enter characters below:</label>
						<label class="input input-captcha">
							<img src="assets/plugins/sky-forms-pro/skyforms/captcha/image.php?<?php echo time(); ?>" width="100" height="35" alt="Captcha image" />
							<input type="text" maxlength="6" name="captcha" id="captcha">
						</label>
					</section>
					
					<section>
						<label class="checkbox"><input type="checkbox" name="copy"><i></i>Send a copy to my e-mail address</label>
					</section>
				</fieldset>
				
				<footer>
					<button type="submit" class="button">Send message</button>
				</footer>
				
				<div class="message">
					<i class="fa fa-check"></i>
					<p>Your message was successfully sent!</p>
				</div>
			
		</form>
                    <script type="text/javascript">
			$(function()
			{
				// Validation
				$("#sky-form").validate(
				{					
					// Rules for form validation
					rules:
					{
						name:
						{
							required: true
						},
						email:
						{
							required: true,
							email: true
						},
						message:
						{
							required: true,
							minlength: 10
						},
						captcha:
						{
							required: true,
							remote: 'assets/plugins/sky-forms-pro/skyforms/captcha/process.php'
						}
					},
										
					// Messages for form validation
					messages:
					{
						name:
						{
							required: 'Please enter your name',
						},
						email:
						{
							required: 'Please enter your email address',
							email: 'Please enter a VALID email address'
						},
						message:
						{
							required: 'Please enter your message'
						},
						captcha:
						{
							required: 'Please enter characters',
							remote: 'Correct captcha is required'
						}
					},		
                    
                    // Ajax form submition					
					submitHandler: function(form)
					{
						$(form).ajaxSubmit(
						{
							beforeSend: function()
							{
								$('#sky-form button[type="submit"]').attr('disabled', true);
							},
							success: function()
							{
								$("#sky-form").addClass('submited');
							}
						});
					},
					
					// Do not change code below
					errorPlacement: function(error, element)
					{
						error.insertAfter(element.parent());
					}
				});
			});			
		</script></div>
    <!-- JS Global Compulsory -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/jquery/jquery-migrate.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="assets/plugins/smoothScroll.js"></script>
    <script src="assets/plugins/jquery.easing.min.js"></script>

    <script src="assets/plugins/owl-carousel2/owl.carousel.min.js"></script>
    <script src="assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js"></script>
    <script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js"></script>
    <script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
    <script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.modal.js"></script>
    <script src="assets/plugins/modernizr.js"></script>
    <script src="assets/plugins/shhos/shhos.js"></script>
    <script src="assets/plugins/wow/wow-ini-themes.js"></script>
    <script src="assets/plugins/circles-master/circles.min.js"></script>
    <script src="assets/plugins/jquery-appear.js"></script>
    <script src="assets/plugins/wow/dist/wow.min.js"></script>

    <!-- REVOLUTION JS FILES -->
    <script src="assets/plugins/revolution-slider/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/plugins/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS (Load Extensions only on Local File Systems! The following part can be removed on Server for On Demand Loading) -->
    <script src="assets/plugins/revolution-slider/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="assets/plugins/revolution-slider/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="assets/plugins/revolution-slider/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="assets/plugins/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="assets/plugins/revolution-slider/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="assets/plugins/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="assets/plugins/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="assets/plugins/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="assets/plugins/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="assets/plugins/image-hover/js/touch.js"></script>
    <script type="text/javascript" src="assets/plugins/image-hover/js/modernizr.js"></script>

    <!-- JS Page Level-->
    <script src="assets/js/one.app.js"></script>

    <script src="assets/js/spark.js"></script>
    <script src="assets/js/neir.js"></script>
    <script src="assets/js/plugins/owl-carousel2.js"></script>
    <script src="assets/js/plugins/circles-master.js"></script>
    <script src="assets/js/plugins/promo.js"></script>
    <script src="assets/js/forms/contact.js"></script>
    <script src="assets/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
     <script type="text/javascript" src="assets/plugins/cube-portfolio/mosaic/js/main.js"></script>
    <script src="assets/js/plugins/cube-portfolio-lightbox.js"></script>
    <script>
        $(function () {
            App.init();
            OwlCarousel.initOwlCarousel();
            ContactForm.initContactForm();
            CirclesMaster.initCirclesMaster();
            new WOW().init();
        });
    </script>
    <!--[if lt IE 10]>
	  <script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js"></script>
	<![endif]-->
</body>

</html>