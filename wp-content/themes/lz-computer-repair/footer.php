<?php

/**
 * The template for displaying the footer
 * @package LZ Computer Repair
 * @subpackage lz-computer-repair
 * @since 1.0
 * @version 0.1
 */

?>
<footer class="footer-site">
    <div class="container">
        <img src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/logo.png" alt="" class="f-logos">
        <nav class="f-menu">
            <div class="f-copyright">
                © 2020 <span>Travel Mania</span>
            </div>
            <ul class="f-menu-item">
                <li class="f-menu-list"><a class="f-menu-link" href="<?= home_url() ?>/">Главная</a></li>
                <li class="f-menu-list"><a class="f-menu-link" href="<?= home_url() ?>/blog/">Блог</a></a></li>
                <li class="f-menu-list"><a class="f-menu-link" href="<?= home_url() ?>/all-countries/">Страны </a></li>
                <li class="f-menu-list"><a class="f-menu-link" href="<?= home_url() ?>/about/">О нас</a></li>
                <li class="f-menu-list"><a class="f-menu-link" href="<?= home_url() ?>/feedback/">Задать вопрос</a></li>
            </ul>
        </nav>
        <div class="f-bottom">
            <div class="f-social" style="display:flex; align-items: flex-start;    width: 100%; justify-content: space-between;">
                <div class="f-social__text-wrap">
                    Служба поддержки:
                    <a href="mailto:excurs.mania@gmail.com" class="f-social__email-link" target="_blank">excurs.mania@gmail.com</a>
                </div>
                <div style="display:flex; align-items:center; margin-bottom:10px">
                    Мы в соц сетях:</br>
                    <a style="padding: 0 5px" href="/go/?url=https://www.facebook.com/" target="_blank"><img src="/wp-content/themes/lz-computer-repair/assets/images/icon-facebook.png"></a>
                    <a  style="padding: 0 5px" href="/go/?url=https://www.instagram.com/" target="_blank"><img src="/wp-content/themes/lz-computer-repair/assets/images/icon-instagram.png"></a>
                    <a class="yandex-link" style="padding: 0 5px" href="/go/?url=https://zen.yandex.ru/" target="_blank"></a>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/js/slick.min.js"></script>
</footer>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function(m, e, t, r, i, k, a) {
        m[i] = m[i] || function() {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(56569540, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true
    });
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/56569540" style="position:absolute; left:-9999px;" alt="" /></div>
</noscript>
<!-- /Yandex.Metrika counter -->
<style>
    html {
        margin-top: 0 !important;
    }
</style>

</html>