<!DOCTYPE html>
<html lang="ru-RU" class="no-js no-svg">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <link rel="icon" href="https://travel-mania.org/favicon.ico" type="image/x-icon">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>Форма обратной связи 🆘</title>
    <meta name="keywords" content="обратная связь, задать вопрос, узнать, уточнить, вопросы, ответы, связаться, написать, администрация, трэвэл, мания, travel, mania" />
    <meta name="description" content="🟢 Задайте нам любой вопрос и мы с удовольствием на него ответим. Служба поддержки клиентов Travel Mania!" />
    <?php
    include 'inc/head-static.php';
    ?>

    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>

<body>
    <script>
        function onSubmit(token) {
            document.getElementById("demo-form").submit();
        }
    </script>
    <?php
    include 'inc/header.php';
    ?>
    <section class="top">
        <div class="top__slider">
            <div class="image-top_slider">
                <img class="lazyload" data-src="/uploads/Main/Main-000.jpg" alt="">
            </div>
            <div class="top__slider-text">
                <div class="container">
                    <div class="top__content-text">
                        <h1>Форма обратной связи</h1>
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
                            <span itemprop="name">Задать вопрос</span>
                            <meta itemprop="item" content="/feedback">
                            <meta itemprop="position" content="2">
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="border-box">
                <h2>У Вас есть вопрос?</h2>
                <div class="border-box__text">
                    Если у Вас возник вопрос по поводу какой-либо экскурсии, откройте описание нужной экскурсии, найдите кнопку <b>«задать вопрос гиду»</b> и перейдите по ссылке. Вы будете направленны на страницу более подробного описания, где есть форма связи с гидом. Все вопросы по поводу проведения и оплаты экскурсии, задавайте гиду напрямую. Как только Вы проясните все детали, можно будет внести предоплату и забронировать экскурсию на выбранную дату. Ниже мы подготовили ответы на часто задаваемые вопросы. Если у Вас есть вопросы по поводу работы сайта или предложения по его улучшению, заполните форму ниже и отправьте запрос. В ближайшее время мы обязательно Вам ответим.
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
                        Как только будет известна дата Вашего путешествия, можно сразу бронировать экскурсию. Подтверждение от гида будет залогом того, что он не будет занят в нужное Вам время. В случае, если у Вас изменятся планы, помните, что предоплату всегда можно вернуть на карту.
                    </div>
                    <div class="about-faq-block">
                        <div class="about-faq__title">Цена указана за групповую экскурсию или индивидуальную?</div>
                        Все экскурсии представленные на сайте, кроме тех, у которых уже указаны даты проведения — индивидуальные! Такие экскурсии могут быть забронированы на любое удобное время. Если в описании указано, что экскурсия проводится для группы до 6 - 12 человек, это значит, что ваших спутников не должно быть больше 6 или 12 человек. Если Вас меньше, в таком случае посторонних людей на экскурсии не будет, только вы и гид!
                    </div>
                    <div class="about-faq-block">
                        <div class="about-faq__title">Если нам немного дорого, можно получить скидку?</div>
                        В редких случаях это возможно! Вам нужно связаться с гидом и уточнить, может ли он сделать скидку. В случае, если гид не сможет предоставить Вам скидку, посмотрите более подходящие варианты.
                    </div>
                    <div class="about-faq-block">
                        <div class="about-faq__title">Что делать, если нас больше, чем может принять гид?</div>
                        Если у Вас группа больше, чем указано в описании экскурсии, Вам нужно уточнить у гида, сможет ли он принять такое количество людей. Связаться с гидом можно на странице экскурсии, выбрав соответствующее поле.
                    </div>
                    <div class="about-faq-block">
                        <div class="about-faq__title">Как узнать телефон или другие контакты гида?</div>
                        Контакты гида станут доступны сразу после внесения предоплаты за экскурсию. Гид, в свою очередь, сразу получит уведомление о дате бронирования с Вашими данными, включая контакты, которые были указаны. До этого, Вы можете общаться с гидом через сайт, а чтобы ничего не пропустили, все ответы гида будут приходить Вам на почту.
                    </div>
                    <div class="about-faq-block">
                        <div class="about-faq__title">Я отправил сообщение гиду, но почему-то не могу заплатить за экскурсию?</div>
                        Если Вы задали вопрос гиду, внести предоплату за экскурсию можно после подтверждения гидом Вашего запроса по заказу. Это сделано специально, чтобы предоплата производилась только в тех случаях, когда Вы обо всем договорились и согласовали дату и время проведения экскурсии.
                    </div>
                    <div class="about-faq-block">
                        <div class="about-faq__title">Что делать, если гид не отвечает?</div>
                        Как правило, гиды всегда на связи. Между отправкой Вашего сообщения и ответом гида проходит некоторое время — от одного часа до одного дня. Если гид не отвечает более суток, напишите в службу поддержки поставщика. Адрес поддержки можно найти на странице выбранной экскурсии.
                    </div>
                    <div class="about-faq-block" style="display: block;">
                        <div class="about-faq__title">Каким можно оплатить выбранную экскурсию?</div>
                        При бронировании экскурсии Вы оплачиваете только 20%, остальные деньги платите гиду на месте. Для внесения предоплаты есть два способа: банковская карта (Visa, MasterCard) или перевод на банковский счет. Если Вам больше подходит второй способ оплаты, напишите в службу поддержки поставщика экскурсии и Вам отправят реквизиты компании. Адрес для запроса можно найти на странице полного описания экскурсии, перейдя по ссылке "забронировать".
                    </div>
                    <div class="about-faq-block" style="display: block;">
                        <div class="about-faq__title">Как можно отменить экскурсию и вернуть деньги?</div>
                        Если поездка сорвалась и Вы не можете посетить экскурсию, Вы должны как можно быстрей предупредить гида (обязательно!). После этого напишите в службу поддержки поставщика и Вам вернут деньги в соответствии с политикой возврата.
                    </div>
                    <div class="about-faq-block" style="display: block;">
                        <div class="about-faq__title">Я нахожусь в России, могу ли я внести предоплату с карты в рублях?</div>
                        Не важно в какой валюте хранятся деньги на Вашей карте. Вы можете спокойно оплачивать любую экскурсию. Если Ваша карта в рублях, долларах, евро или другой валюте, оплата пройдет в соответствии с правилами конвертации Вашего банка.
                    </div>
                    <div class="about-faq-block" style="display: block;">
                        <div class="about-faq__title">Кто может оставить отзыв?</div>
                        Оставить отзыв может только тот путешественник, который забронировал и оплатил экскурсию, а затем ее посетил! На следующий день, после проведенной экскурсии Вы получите письмо и, нажав на ссылку в тексте, сможете разместить свой отзыв. Также отзыв можно написать со страницы бронирования экскурсии. Других способов разместить отзыв не существует.
                    </div>
                    <div class="about-faq-block" style="display: block;">
                        <div class="about-faq__title">Вы размещаете все отзывы туристов?</div>
                        Абсолютно все полученные отзывы, как позитивные, так негативные, размещаются на сайте. В случаи негативного отзывы гид может ответить, проясняя ситуацию и детали проведенной экскурсии.
                    </div>
                    <div class="container">
                        <div class="contact-form-travel-mania">
                            <div class="contact-form-text">По вопросам работы сайта</div>
                            <div class="contact-form-box">
                                <form class="contact-form">
                                    <input id="form-name" type="text" value="" placeholder="Ваше имя">
                                    <input id="form-email" type="email" value="" placeholder="Ваш email">
                                    <textarea id="form-text" placeholder="Ваше сообщение"></textarea>
                                    <button class="send-form" type="submit">Отправить</button>
                                    <div class="frm_verify">
                                        <label for="frm_verify_1"> Спасибо, письмо отправлено! </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            $('.send-form').click(function(e) {
                e.preventDefault();
                // собираем данные с формы
                var user_name = $(this).closest("form").find("#form-name").val();
                var email = $(this).closest("form").find("#form-email").val();
                var text = $(this).closest("form").find("#form-text").val();
                let btn = $(this);
                if (user_name.trim() != "") {
                    $(this).closest("form").find("#form-name").removeClass('false');
                    if (email.trim() != "") {
                        $(this).closest("form").find("#form-email").removeClass('false');
                        // отправляем данные
                        $.ajax({
                            url: "/action.php", // куда отправляем
                            type: "post", // метод передачи
                            dataType: "json", // тип передачи данных
                            data: { // что отправляем
                                "user_name": user_name,
                                "email": email,
                                "text": text,
                            },
                            // после получения ответа сервера
                            success: function(data) {
                                console.log($(this))
                                $("form.contact-form").addClass("send")
                            }
                        });
                    } else {
                        $(this).closest("form").find("#form-email").addClass('false');
                    }
                } else {
                    $(this).closest("form").find("#form-name").addClass('false');
                }
            });

        })
    </script>
    <?php
    include 'inc/footer.php';
    ?>