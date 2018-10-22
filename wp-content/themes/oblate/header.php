<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script>(function () {
        var style = localStorage.getItem('stylesheet');
        if (style) {
            document.body.style.backgroundColor = '#2e323e';
        }
    })()</script>

    <?php if ( !is_single() ) { ?>
        <meta name="description" content="Tania Rascia is a web developer, designer, and writer who breaks down complex concepts for all skill levels.">
    <?php } ?>
    <?php wp_head(); ?>
    <link href="" id="night-css" rel="stylesheet">
    <script>
    (function () {
        var style = localStorage.getItem('stylesheet');
        if (style) {
            document.getElementById('night-css').setAttribute('href', style);
            document.body.style.backgroundColor = 'initial';
        }
    })()
    </script>

    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W788DFR');</script>

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () { 
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-42068444-1', 'auto');
        ga('send', 'pageview');
    </script>
    
</head>

<body>

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W788DFR" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    <h1 class="screen-reader-text">Tania Rascia</h1>
    <a class="screen-reader-text" href="#main-content">Skip Navigation</a>

    <nav class="nav">
        <div class="nav-container">
            <div class="brand">
                <a href="<?php echo site_url(); ?>"><img src="<?php echo site_url(); ?>/wp-content/uploads/floppy.png" class="brand-icon"><span>Tania Rascia</span></a>
            </div>
            <div class="links">
                <a href="<?php echo site_url(); ?>/me">About me</a>
                <a href="<?php echo site_url(); ?>/blog">Articles</a>
                <a href="<?php echo site_url(); ?>/contact">Contact</a>
            </div>
            <div class="extra">  
                <a href="https://ko-fi.com/taniarascia" class="donate-link" target="_blank"><img src="<?php echo site_url(); ?>/wp-content/uploads/coffee.png" class="donate-icon"><span class="buy">Buy me a <strong class="yellow">coffee</strong></span></a>
                <a href="#!" class="nav-icon" id="night-mode"><i class="fas fa-moon"></i></a>
                <a href="https://twitter.com/taniarascia" class="nav-icon" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://github.com/taniarascia" class="nav-icon" target="_blank"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </nav>
    
    <main id="main-content">