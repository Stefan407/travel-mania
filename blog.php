<!DOCTYPE html>
<html lang="ru-RU" class="no-js no-svg">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter56569540 = new Ya.Metrika({
                    id:56569540,
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
<noscript><div><img src="https://mc.yandex.ru/watch/56569540" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->  
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-165860897-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-165860897-1');
</script>

    <link rel="icon" href="https://travel-mania.org/favicon.ico" type="image/x-icon">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>Блог лайфхаков путешественника 🥇 Travel Mania</title>
    <meta name="keywords" content="блог, лайфхаки, советы, статьи, публикации, заметки, полезное, трэвэл, мания, travel, mania" />
    <meta name="description" content="🟢 В нашем блоге мы собрали лайфхаки и полезные советы всем путешественника! регулярго пишем о всех способах экономно путешествовать и не переплачивать на отдыхе." />
    <?php
    include 'inc/head-static.php';
    ?>

</head>

<body>
    <?php
    include 'inc/header.php';
    ?>
    <section class="top">
        <div class="top__slider">
            <div id="top-images-city" class="image-top_slider ">
                <img class="lazyload" data-src="/uploads/Main/Main-12.jpg" alt="">
            </div>
            <div class="top__slider-text">
                <div class="container">
                    <div class="top__content-text">
                        <h1>Блог лайфхаков путешественника</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumbs" itemscope="itemscope" itemtype="http://schema.org/BreadcrumbList">
            <div class="container breadcrumbs-wrap">
                <div class="breadcrumbs-item">
                    <div class="breadcrumbs__block" itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem">
                        <a class="breadcrumbs__link" href="/" itemprop="item">
                            <span itemprop="name">Главная</span>
                            <meta itemprop="position" content="1">
                        </a>
                    </div>
                    <div class="breadcrumbs__arrow">
                        <img src="/assets/images/arrow-bread.png" alt="">
                    </div>
                    <div class="breadcrumbs__block" itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem">
                        <p class="breadcrumbs__text">
                            <span itemprop="name">Блог</span>
                            <meta itemprop="item" content="/blog">
                            <meta itemprop="position" content="2">
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="border-box">
                <h2>Полезные статьи для друзей Travel Mania</h2>
                <div class="border-box__text">
                    В нашем блоге мы регулярно будет публиковать полезные статьи и советы всем путешественникам.
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="blog-page">
            <ul class="blog-list">
                <li class="blog-item_block chto-posmotret-v-sevastopole">
                    <a href="/chto-posmotret-v-sevastopole">
                        <img data-src="/uploads/2020/08/sevastopol-2-300x202.jpg" class="alignleft wp-post-image lazyload">
                        <div class="post-item" style="background-color: rgb(237, 194, 144); color: rgb(255, 255, 255); box-shadow: rgb(237, 194, 144) 0px 12px 20px 36px;">
                            <div class="title">Что посмотреть в Севастополе?</div>
                            <div class="text">Севастополь - это город славы, доблести моряков, которые защищали его и отдавали свои жизни за Россию. Он всегда притягивал к себе туристов из разных стран и это не удивительно, ведь в городе огромное количество исторических достопримечательностей. <span class="color-bac" data-bac-color="#edc290" data-color="#fff"></span></div>
                        </div>
                    </a></li>
            </ul>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var observableElements = [];

            if (document.querySelector('.blog-item_block')) {
                let products = document.querySelectorAll('.blog-item_block');
                for (i = 0; i < products.length; i++) {
                    observableElements.push(products[i]);
                }
            }

            if ("IntersectionObserver" in window) {
                let animationObserver = new IntersectionObserver(function(entries, observer) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            let animationElement = entry.target;
                            animationElement.classList.add("active");
                            animationObserver.unobserve(animationElement);
                        }
                    });
                });

                observableElements.forEach(function(observableElement) {
                    animationObserver.observe(observableElement);
                });
            } else {
                observableElements.forEach(function(observableElement) {
                    observableElement.classList.add("active");
                });
            }
        })
    </script>
    <?php
    include 'inc/footer.php';
    ?>