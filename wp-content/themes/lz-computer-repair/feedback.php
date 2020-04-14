<?php
/*
Template Name: feedback-page
* @package WordPress
 * @subpackage lz-computer-repair
 * @since 1.0
 * @version 0.1
*/
?>
<?php

if (!function_exists('filter_function_name_Cities')) {
    add_filter('document_title_parts', 'filter_function_name_Cities');
    function filter_function_name_Cities($title)
    {

        $title['title'] = 'Форма обратной связи';
        $title['site'] = '';
        $title['page '] = '';
        $title['tagline '] = '';

        return $title;
    }
}
?>

<head>
    <?php wp_head(); ?>
    <meta name="keywords" content="обратная связь, задать вопрос, узнать, уточнить, вопросы, ответы, связаться, написать, администрация, трэвэл, мания, travel, mania" />
    <meta name="description" content="Задайте нам любой вопрос и мы с удовольствием на него ответим - Тревел Мании!" />
</head>

<?php get_header(); ?>
<section class="top">
    <div class="top__slider">
        <div class="image">
            <img src="<?= home_url() ?>/wp-content/uploads/Main/Main-11.jpg" alt="">
        </div>
        <div class="top__slider-text">
            <div class="container">
                <div class="top__content-text">
                    <h1>Форма обратной связи</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumbs">
        <div class="container breadcrumbs-wrap">
            <div class="breadcrumbs-item">
                <div class="breadcrumbs__block" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                    <a class="breadcrumbs__link" href="/" itemprop="url" title="Главная">
                        <span itemprop="title">
                            <span>Главная</span>
                        </span>
                    </a>
                </div>
                <div class="breadcrumbs__arrow">
                    <img src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/arrow-bread.png" alt="">
                </div>
                <div class="breadcrumbs__block" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                    <link itemprop="url" href="/feedback/">
                    <p class="breadcrumbs__text">
                        <span itemprop="title">Задать вопрос</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="border-box">
            <h2>У Вас есть вопрос?</h2>
            <div class="border-box__text">
                Если у Вас возник вопрос по поводу какой-либо экскурсии, нужно открыть описание данной экскурсии, найти кнопку «задать вопрос гиду» и перейти на страницу. Вы будите направленны на страницу поставщика, где есть более подробное описание и возможность связаться с гидом до оплаты экскурсии. Все вопросы по поводу проведения и оплаты экскурсии, задавайте напрямую гиду. Как только Вы все проясните все детали, можно будет внести предоплату и забронировать экскурсию на выбранную дату. Ниже мы подготовили ответы на часто задаваемые вопросы. Если у Вас есть вопросы по поводу работы сайта, предложения по его улучшению и т.п. Заполните форму ниже и отправьте запрос, в ближайшее время мы обязательно Вам ответим.
            </div>
            <section class="advantages">
            </section>
        </div>
    </div>
</section>

<section class="main">
    <div class="about-faq">
        <div class="container">
            <div class="wrap">
                <h3 class="about-title g-ac">Частые вопросы</h3>
                <div class="about-faq-block">
                    <div class="about-faq__title">За сколько дней нужно бронировать экскурсию?</div>
                    Как только будет известна дата Вашего путешествия, можно сразу бронировать экскурсию. Подтверждение от гида будет залогом того, что гид не будет занят другими заказами в выбранную Вами дату. В случаи если у вас изменятся планы, помните, что предоплату всегда можно вернуть на карту.
                </div>
                <div class="about-faq-block">
                    <div class="about-faq__title">Цена за групповую экскурсию или она будет индивидуальной?</div>
                    Группа в нашем понимании — это Вы, члены Вашей семьи или друзья. Все наши экскурсии, кроме тех, у которых уже указаны даты проведения — индивидуальные! Такие экскурсии могут быть забронированы на любое удобное время. Если в описании указано, что экскурсия проводится для группы до 6 или 12 человек, это значит, что ваших спутников не должно быть больше 6 или 12 человек. Если Вас меньше, в таком случаи посторонних людей на экскурсии не будет, только вы и гид!
                </div>
                <div class="about-faq-block">
                    <div class="about-faq__title">Если нам немного дорого, можно получить скидку?</div>
                    В редких случаях это возможно! Вам нужно связаться с гидом и уточнить, может ли он сделать скидку. В случаи если гид не сможет предоставить Вам скидку, посмотрите более подходящие варианты.
                </div>
                <div class="about-faq-block">
                    <div class="about-faq__title">Что делать, если нас больше, чем может принять гид?</div>
                    Если у Вас группа больше, чем указанно в описании экскурсии, Вам нужно уточнить у гида, сможет он принять такое количество людей. Связаться с гидом можно на странице экскурсии, выбрав соответствующее поле.
                </div>
                <div class="about-faq-block">
                    <div class="about-faq__title">Как узнать телефон или другие контакты гида?</div>
                    Контакты гида станут доступны сразу после внесения предоплаты за экскурсию. Гид, в свою очередь, сразу получит уведомление о дате бронирования с Вашими данными, включая контакты, которые были указали. До этого Вы можете общаться с гидом через сайт, а чтобы ничего не пропустили, все ответы гида будут приходить Вам на почту.
                </div>
                <div class="about-faq-block">
                    <div class="about-faq__title">Я отправил сообщение гиду, но почему-то не могу заплатить за экскусрию?</div>
                    Если Вы задали вопрос гиду, внести предоплату за экскурсию можно после подтверждения гидом Вашего запроса по заказу. Это сделано специально, чтобы предоплата производилась только в тех случаях, когда Вы обо всем договорились и согласовали дату и время проведения экскурсии.
                </div>
                <div class="about-faq-block">
                    <div class="about-faq__title">Что делать, если гид не отвечает?</div>
                    Как правило, все наши гиды всегда на связи. Между отправкой Вашего сообщения и ответом гида проходит некоторое время — от одного часа до дня. Если гид не отвечает более суток, напишите в службу поддержки поставщика. Адрес поддержки можно найти на странице выбранной экскурсии.
                </div>
                <div class="about-faq-block" style="display: block;">
                    <div class="about-faq__title">Каким можно оплатить выбранную экскурсию?</div>
                    При бронировании экскурсии Вы оплачиваете только 20%, остальные деньги платите гиду на месте. Для внесения предоплаты есть два способа: банковская карта (Visa или MasterCard) или банковский перевод на банковский счет. Если вам удобнее второй способ, напишите в службу поддержки поставщика экскурсии и вам вышлют реквизиты компании. Адрес для запроса можно найти непосредственно у поставщика на странице полного описания экскурсии.
                </div>
                <div class="about-faq-block" style="display: block;">
                    <div class="about-faq__title">Как можно отменить экскурсию и вернуть деньги?</div>
                    Если поездка сорвалась и Вы не сможете посетить экскурсию — Вам нужно заранее предупредите гида (это обязательно!), после этого напишите в службу поддержки поставщика. Вам вернут деньги в соответствии с политикой возврата.
                </div>
                <div class="about-faq-block" style="display: block;">
                    <div class="about-faq__title">Я нахожусь в России, могу ли я внести предоплату с карты в рублях?</div>
                    Не важно в какой валюте хранятся деньги на Вашей карте. Вы можете спокойно оплачивать любую экскурсию. Если Ваша карта в рублях, долларах, евро или другой валюте, оплата пройдет в соответствии с правилами конвертации.
                </div>
                <div class="about-faq-block" style="display: block;">
                    <div class="about-faq__title">Кто может оставить отзыв?</div>
                    Оставить отзыв может только тот путешественник, который забронировал и оплатил экскурсию, а затем ее посетил! На следующий день после проведенной экскурсии вы получите письмо, нажав на ссылку в тексте вы сможете разместить свой отзыв. Также отзыв можно написать со страницы бронирования экскурсии. Других способов разместить отзыв не существует.
                </div>
                <div class="about-faq-block" style="display: block;">
                    <div class="about-faq__title">Вы размещаете все отзывы туристов?</div>
                    Абсолютно все полученные отзывы, как позитивные, так негативные размещаются на сайте. В случаи негативного отзывы гид может ответить, проясняя ситуацию и детали проведенной экскурсии.
                </div>
                <div class="container">
                    <div class="contact-form-travel-mania">
                        <div class="contact-form-text">По вопросам работы сайте</div>
                        <div class="contact-form-box">
                            <?php echo do_shortcode('[formidable id=1]')  ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<link rel="stylesheet" type="text/css" href="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/css/slick.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/js/slick.min.js"></script>
<script>
    $('.image').slick({
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 3000
    });
</script>
<?php get_footer(); ?>