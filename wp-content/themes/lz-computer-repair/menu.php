<?php
/**
 * The template for displaying the menu
 * @package LZ Computer Repair
 * @subpackage lz-computer-repair
 * @since 1.0
 * @version 0.1
 */

?>

<body <?php body_class(); ?>>
    <div id="header">

        <div class="menu-wrapper">
            <div class="container">
                <div class="menu-wrap">
                    <div class="menu-logo"><a href="<?=home_url()?>/"><img src="<?=home_url()?>/wp-content/themes/lz-computer-repair/assets/images/logo.png" alt=""></a></div>
                    <nav class="menu">
                        <ul>
                            <li><a class="green" href="<?=home_url()?>/">ГЛАВНАЯ</a></li>
                            <li><a class="green" href="<?=home_url()?>/blog/">БЛОГ</a></li>
                            <li><a class="green" href="<?=home_url()?>/all-cities/">ГОРОДА</a></li>
                            <li><a class="open-contry green">СТРАНЫ </a>
                                <ul class="all-contry">
                                    <li><a href="<?=home_url()?>/all-contry/">Все страны</a></li>
                                    <li class="list-contry">

                                        <?php foreach ($list as $country) { ?>
                                            <a href="<?=home_url()?>/<?php echo urlencode($country->name_en) ?>"> <?php echo $country->name_ru ?> </a>
                                        <?php } ?>

                                    </li>
                                </ul>
                            </li>
                            <li><a class="green" href="<?=home_url()?>/about/">О НАС</a></li>
                            <li><a class="link-ask" href="<?=home_url()?>/feedback/">ЗАДАТЬ ВОПРОС</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="menu-wrapper-mobile">
            <div class="menu-wrap">
                <div class="container">
                    <div class="menu-logo"><a href="<?=home_url()?>/"><img src="<?=home_url()?>/wp-content/themes/lz-computer-repair/assets/images/logo.png" alt=""></a></div>
                    <div class="burger"><img class="burger-btn" src="<?=home_url()?>/wp-content/themes/lz-computer-repair/assets/images/burger-icon.png" alt=""></div>
                </div>
            </div>
            <nav class="menu-mobile">
                <ul>
                    <li><a href="<?=home_url()?>/">ГЛАВНАЯ</a></li>
                    <li><a href="<?=home_url()?>/blog/">БЛОГ</a></li>
                    <li><a href="<?=home_url()?>/all-cities/">ГОРОДА</a></li>
                    <li><a class="open-contry-mobile">СТРАНЫ </a>
                        <ul class="all-contry-mobile">
                            <li><a href="<?=home_url()?>/all-contry/">Все страны</a></li>
                            <li class="list-contry">
                                <?php foreach ($list as $country) { ?>
                                    <a href="<?=home_url()?>/<?php echo urlencode($country->name_en) ?>"> <?php echo $country->name_ru ?> </a>
                                <?php } ?>
                            </li>
                        </ul>
                    </li>
                    <li><a href="<?=home_url()?>/about/">О НАС</a></li>
                    <li><a class="link-ask" href="<?=home_url()?>/feedback/">ЗАДАТЬ ВОПРОС</a></li>
                </ul>
            </nav>
        </div>
    </div>








</body>

<script>
    $('.open-contry').click(function() {
        $(".all-contry").toggleClass('all-contry-active');
    });
    $('.open-contry-mobile').click(function() {
        $(".all-contry-mobile").toggleClass('all-contry-mobile-active');
    });
    $('.burger-btn').click(function() {
        $(".menu-mobile").toggleClass('menu-mobile-active');
    });
</script>
<?php wp_menu(); ?>
