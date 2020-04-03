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
            <div class="f-social">
                <a href="https://www.facebook.com/" class="f-social__link f-social__link_fb" target="_blank">
                <svg fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px"><path d="M 21.800781 0 L 2.199219 0 C 1 0 0 1 0 2.199219 L 0 21.800781 C 0 23 1 24 2.199219 24 L 12 24 L 12 14 L 9 14 L 9 11 L 12 11 L 12 8 C 12 5.5 13 4 16 4 L 19 4 L 19 7 L 17.699219 7 C 16.800781 7 16 7.800781 16 8.699219 L 16 11 L 20 11 L 19.5 14 L 16 14 L 16 24 L 21.800781 24 C 23 24 24 23 24 21.800781 L 24 2.199219 C 24 1 23 0 21.800781 0 Z"/></svg>
                </a>
                <a href="https://www.instagram.com" class="f-social__link f-social__link_ig" target="_blank">
                <svg fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" width="26px" height="26px"><path d="M 7.546875 0 C 3.390625 0 0 3.390625 0 7.546875 L 0 18.453125 C 0 22.609375 3.390625 26 7.546875 26 L 18.453125 26 C 22.609375 26 26 22.609375 26 18.453125 L 26 7.546875 C 26 3.390625 22.609375 0 18.453125 0 Z M 7.546875 2 L 18.453125 2 C 21.527344 2 24 4.46875 24 7.546875 L 24 18.453125 C 24 21.527344 21.53125 24 18.453125 24 L 7.546875 24 C 4.472656 24 2 21.53125 2 18.453125 L 2 7.546875 C 2 4.472656 4.46875 2 7.546875 2 Z M 20.5 4 C 19.671875 4 19 4.671875 19 5.5 C 19 6.328125 19.671875 7 20.5 7 C 21.328125 7 22 6.328125 22 5.5 C 22 4.671875 21.328125 4 20.5 4 Z M 13 6 C 9.144531 6 6 9.144531 6 13 C 6 16.855469 9.144531 20 13 20 C 16.855469 20 20 16.855469 20 13 C 20 9.144531 16.855469 6 13 6 Z M 13 8 C 15.773438 8 18 10.226563 18 13 C 18 15.773438 15.773438 18 13 18 C 10.226563 18 8 15.773438 8 13 C 8 10.226563 10.226563 8 13 8 Z"/></svg>
                </a>
                <div class="f-social__text-wrap">
                    Служба поддержки:
                    <a href="mailto:excurs.mania@gmail.com" class="f-social__email-link" target="_blank">excurs.mania@gmail.com</a>
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