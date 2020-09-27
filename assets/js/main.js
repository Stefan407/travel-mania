$(document).ready(function () {
    let searchListCountries = $(".search-list_wrap .list-country");
    let searchListTours = $(".search-list_wrap .list-tours");
    let searchListHeader = $(".search-list_wrap .exp-header");
    let valueLength;
    let dataCalendar;
    let xhrOne = null;
    let urlNextListCity = $(".popular-cityes .btn-more").data("url-next");


    function request(url) {
        $(".windows8").show();
        $(".close-search").hide();
        if (xhrOne !== null) {
            xhrOne.abort();
        }
        xhrOne = new XMLHttpRequest();
        let data = null;
        xhrOne.open('GET', 'https://experience.tripster.ru/api/search/site/?format=json&query=' + url + '&limit=12', true);
        xhrOne.send();

        xhrOne.onreadystatechange = function () {
            if (xhrOne.readyState == 4) {
                if (xhrOne.status == 200) {
                    data = jQuery.parseJSON(xhrOne.responseText);
                    editListSearch(data);
                }
            }
        };

    }


    function replaceName(type, value) {
        switch (type) {
            case "noEm":
                let newStr1 = value.replace('<em>', '').replace('<em>', '').replace('</em>', '').replace('</em>', '');
                return newStr1;
                break;
            case "noSpace":
                let newStr2 = value.replace("_", "-").replace("_", "-").replace("+", "-").replace("+", "-").replace(" ", "-").replace(" ", "-");
                return newStr2;
                break;
            case "cityCountry":
                let newStr3 = value.replace('`', '').replace("'", "");
                return newStr3;
                break;
            default:
                break;
        }
    }

    function initUrlExperience(id) {
        let xhr = new XMLHttpRequest();
        let data = null;
        xhr.open('GET', 'https://experience.tripster.ru/api/experiences/' + id + '', false);
        xhr.send();
        if (xhr.status != 200) {
            // alert(xhr.status + ': ' + xhr.statusText);https://travel-mania.org/
        } else {
            data = jQuery.parseJSON(xhr.responseText);
        }
        let cityName = replaceName("noSpace", data.city.name_en);
        let countryName = replaceName("noSpace", data.city.country.name_en);
        let url = "https://travel-mania.org/" + countryName + "/" + cityName + "/excursion-" + id + "/";
        location.href = url;

    }

    function initUrlCountry(id) {
        let xhr = new XMLHttpRequest();
        let data = null;
        xhr.open('GET', 'https://experience.tripster.ru/api/countries/?name_ru=' + id + '', false);
        xhr.send();
        if (xhr.status != 200) {
            // alert(xhr.status + ': ' + xhr.statusText);
        } else {
            data = jQuery.parseJSON(xhr.responseText);
        }
        let countryName = replaceName("noSpace", data.results[0].name_en);
        let url = "https://travel-mania.org/" + countryName + "/";
        location.href = url;

    }

    function initUrlCity(id) {
        let xhr = new XMLHttpRequest();
        let data = null;
        xhr.open('GET', 'https://experience.tripster.ru/api/cities/?name_ru=' + id + '', false);
        xhr.send();
        if (xhr.status != 200) {
            // alert(xhr.status + ': ' + xhr.statusText);
        } else {
            data = jQuery.parseJSON(xhr.responseText);
        }
        let cityName = replaceName("noSpace", data.results[0].name_en);
        let countryName = replaceName("noSpace", data.results[0].country.name_en);
        let url = "https://travel-mania.org/" + countryName + "/" + cityName + "/";
        location.href = url;

    }

    function createEvens() {
        $(".search-list_wrap .result-item").on("click", function (e) {
            switch (this.dataset.type) {
                case "country":
                    initUrlCountry(this.dataset.id);
                    break;
                case "city":
                    initUrlCity(this.dataset.id);
                    break;
                case "experience":
                    initUrlExperience(this.dataset.id);
                    break;
                case "citytag":
                    break;
                default:
                    break;
            }
        })
    }

    function declOfNum(number, titles) {
        cases = [2, 0, 1, 1, 1, 2];
        return titles[(number % 100 > 4 && number % 100 < 20) ? 2 : cases[(number % 10 < 5) ? number % 10 : 5]];
    };

    function editListSearch(data) {
        searchListCountries.text("");
        searchListTours.text("");
        searchListHeader.hide();
        if (data.length) {
            $(data).each(function () {
                let type = this.type;
                switch (type) {
                    case "country":
                        let newNameCountry = replaceName("noEm", this.title)
                        searchListCountries.append("<div data-type='" + type + "' data-id='" + newNameCountry + "' class='result-item " + type + "'><img class='loc' src='/assets/images/icon-location.svg'><div class='inner'><div class='title1'>" + this.title + "</div><div class='title2'></div></div><div class='left-block'>" + this.experience_count + " " + declOfNum(this.experience_count, ['экскурсия', 'экскурсии', 'экскурсий']) + "</div></div>");
                        break;
                    case "city":
                        let newNameCity = replaceName("noEm", this.title)
                        searchListCountries.append("<div data-type='" + type + "' data-id='" + newNameCity + "' class='result-item " + type + "'><img class='loc' src='/assets/images/icon-location.svg'><div class='inner'><div class='title1'>" + this.title + "</div><div class='title2'>" + this.country.name_ru + "</div></div><div class='left-block'>" + this.experience_count + " " + declOfNum(this.experience_count, ['экскурсия', 'экскурсии', 'экскурсий']) + "</div></div>");
                        break;
                    case "experience":
                        searchListHeader.show();
                        searchListTours.append("<div data-type='" + type + "' data-id='" + this.id + "' class='result-item " + type + "'><img class='tour' src='" + this.image + "'><div class='inner'><div class='title1'>" + this.title + "</div><div class='title2'><span class='city'>" + this.city.name_ru + "</span><span class='price-text'>" + this.price + "</span></div></div><div class='left-block'>" + this.price + "</div></div>")
                        break;
                    case "citytag":
                        break;
                    default:
                        break;
                }
            });
            createEvens();
            $(".windows8").hide();
            $(".close-search").show();
            $(".not-found").hide();
        } else {
            $(".not-found").show();
            $(".windows8").hide();
            $(".close-search").show();
        }
    }
    $("#searchInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("body").addClass("act-search")
        if (value.length !== valueLength) {
            request(value);
            valueLength = value.length;
        }
    });

    $("#searchInput").on("click", function (e) {
        var value = $(this).val();
        $("body").addClass("act-search")
        if (!value.length && value.length !== valueLength) {
            request(value);
            valueLength = value.length;
        }
    })
    $(".search-icon").on("click", function () {
        $("body").addClass("act-search")
        var value = $("#searchInput").val();
        $("body").addClass("act-search")
        $("#searchInput").focus();
        if (!value.length && value.length !== valueLength) {
            request(value);
            valueLength = value.length;
        }
    })
    $(".menu-wrap .burger").on("click", function () {
        $("#header .menu").toggleClass("act")
    })

    function eventLink() {
        $(".open-link").on("click", function () {
            let url = $(this).data("link");
            window.open(url)
        })
    }

    eventLink();
    let idExcursion = $(".excursion-page").data("id-excursion");
    let urlExcursion = $(".excursion-page").data("url-tripster");

    function createTimeExcursions() {
        console.log("Выводим расписание");
        var counter = 0;
        for (var key in dataCalendar.schedule) {
            if (counter < 5) {
                let newKey = key.replace("-", ".");
                newKey = newKey.replace("-", ".");
                let newData = newKey.split('.');
                newData = newData.reverse();
                newKey = newData.join(".");
                var now = moment(key);
                now.lang('ru');
                let day = "";
                switch (now.format('dddd')) {
                    case "понедельник":
                        day = "Пн"
                        break;
                    case "вторник":
                        day = "Вт"
                        break;
                    case "среда":
                        day = "Ср"
                        break;
                    case "четверг":
                        day = "Чт"
                        break;
                    case "пятница":
                        day = "Пт"
                        break;
                    case "суббота":
                        day = "Сб"
                        break;
                    case "воскресенье":
                        day = "Вс"
                        break;
                    default:
                        break;
                }
                $(".expage-dates-list").addClass("vis");
                $(".expage-dates-list").append("<div data-link='https://experience.tripster.ru/experience/booking/" + idExcursion + "?date=" + newKey + "&exp_partner=travel-mania&utm_source=travel-mania&utm_campaign=affiliates&utm_medium=link&utm_term=data' class='expage-dates__item open-link'><span>" + day + ", " + now.format('D MMMM') + " в " + dataCalendar.schedule[key][0].time + "</span></div>");
            }
            counter++
        }
        eventLink();
    };

    function eventLinkToTr() {
        $(".table-calendar td.date-picker.can-zakaz").on("click", function () {
            let data = $(this).data("all");
            let newKey = data.replace("-", ".");
            newKey = newKey.replace("-", ".");
            let newData = newKey.split('.');
            newData = newData.reverse();
            newKey = newData.join(".");
            $(".btn-order-wrap .text").text("Вы выбрали дату: " + data);
            $(".btn-order-wrap .btn-click").addClass('act');
            $(".btn-order-wrap .btn-click").attr('data-link', "https://experience.tripster.ru/experience/booking/" + idExcursion + "?date=" + newKey + "&exp_partner=travel-mania&utm_source=travel-mania&utm_campaign=affiliates&utm_medium=link&utm_term=data");
            $(".btn-order-wrap .btn-click").text("Забронировать");
            $(".table-calendar td.date-picker").removeClass('br');
            $(this).addClass("br");
        })
    }

    function createCalendar() {
        $(".container-calendar").show();
        $(".container-calendar").addClass();
        if (Object.keys(dataCalendar.schedule).length) {
            $(".order-panel-wrap .more-btn").show();
            $(".tit_cal").show();
            for (var key in dataCalendar.schedule) {
                $(".table-calendar td.date-picker[data-all='" + key + "']").addClass("can-zakaz");
            }
        } else {
            $(".container-calendar").hide();
            $(".order-panel-wrap .more-btn").hide();
        }
        eventLinkToTr();
    }

    if ($(".home .slick-tours.slider").length) {
        $('.slick-tours.slider').slick({
            prevArrow: '<button type="button" class="slick-prev slick-btn" ><img src="/assets/images/arrow-icon.png" alt=""></button>',
            nextArrow: '<button type="button" class="slick-next slick-btn" ><img src="/assets/images/arrow-icon.png" alt=""></button>',
            dots: false,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [{
                breakpoint: 1000,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                }
            }
            ]
        });
    }

    if ($(".excursion-page").length) {
        if (xhrOne !== null) {
            xhrOne.abort();
        }
        xhrOne = new XMLHttpRequest();
        let data = null;
        xhrOne.open('GET', 'https://experience.tripster.ru/api/experiences/' + idExcursion + '/schedule/', true);
        xhrOne.send();

        xhrOne.onreadystatechange = function () {
            if (xhrOne.readyState == 4) {
                if (xhrOne.status == 200) {
                    data = jQuery.parseJSON(xhrOne.responseText);
                    dataCalendar = data;
                    createCalendar();
                    // if (Object.keys(data.schedule).length > 10) {} else {
                    //     createTimeExcursions();
                    // }
                }
            }
        };
    }

    function parametrEdit() {
        let reviewsDate = document.getElementsByClassName("reviews-date");
        for (i = 0; i < reviewsDate.length; i++) {
            reviewsDate[i].innerHTML = reviewsDate[i].innerHTML.split("-").reverse().join(".");
        }
    };
    parametrEdit();
    if ($('[data-fancybox]').length) {
        $('[data-fancybox]').fancybox({
            protect: true
        });
    }


    function clickInWindow(e) {
        let click = e.target;
        if (document.querySelector(".search-wrap")) {
            if (click != document.querySelector("#searchInput") &&
                click != document.querySelector(".search-icon") &&
                !click.closest(".search-icon") &&
                !click.closest(".search-wrap") &&
                !click.closest("#searchInput")) {
                $("body").removeClass("act-search");
            }
        }
        if (document.querySelector("#header .menu")) {
            if (click != document.querySelector(".burger-btn img") &&
                !click.closest(".burger-btn") &&
                !click.closest("#header .menu.act")) {
                $("#header .menu").removeClass("act");
            }
        }

    }
    document.addEventListener("click", function (e) {
        clickInWindow(e);
    })
    $(".close-search").on("click", function (e) {
        $("body").removeClass("act-search");
    })

    let simplebarItems = document.querySelectorAll('.scroll-init');
    simplebarItems.forEach(function (item) {
        new SimpleBar(item, {
            autoHide: false
        })
    })

    function addCities(result, nextUrl) {
        result.map((item) => {
            let country = replaceName("cityCountry", item.country.name_en);
            let newCountry = replaceName("noSpace", country);
            let city = replaceName("cityCountry", item.name_en);
            let newCity = replaceName("noSpace", city);
            $("#cityes").append(`<div id="item-element" class="item-element w-33"><a href="/${newCountry}/${newCity}/"><img src="${item.image.thumbnail}"><div class="item-title-wrap"><div class="item-title"><span class="name-title"> ${item.name_ru} </span></div><span class="item-span">Экскурсий: ${item.experience_count}</span></div></a></div>`);
        })

        if (nextUrl) {
            urlNextListCity = nextUrl;
            $(".popular-cityes .btn-more").show();
        }
        if ($(".popular-cityes .more-text.btn-more").length) {
            $(".popular-cityes .more-text.btn-more .text-span").text($(".popular-cityes__wrap .item-element").length)
        }
    }

    if ($(".more-text.btn-more").length) {
        $(".more-text.btn-more .text-span").text($(".tours .slick-tours__item").length)
    }
    if ($(".popular-cityes .more-text.btn-more").length) {
        $(".popular-cityes .more-text.btn-more .text-span").text($(".popular-cityes__wrap .item-element").length)
    }
    if ($(".popular-cityes .btn-more").length) {
        $(".popular-cityes .btn-more").on("click", function () {
            $(".load-tour").show();
            $(this).hide();
            if (xhrOne !== null) {
                xhrOne.abort();
            };
            xhrOne = null;
            xhrOne = new XMLHttpRequest();
            let data = null;
            xhrOne.open('GET', urlNextListCity + "&format=json", true);
            xhrOne.send();

            xhrOne.onreadystatechange = function () {
                if (xhrOne.readyState == 4) {
                    if (xhrOne.status == 200) {
                        data = jQuery.parseJSON(xhrOne.responseText);
                        addCities(data.results, data.next)
                        $(".load-tour").hide();
                    }
                }
            };
            
        })
    }
    if ($('.slider-tours-photo').length) {
        $('.slider-tours-photo').slick({
            arrows: false,
            dots: true,
            autoplay: true,
            autoplaySpeed: 3000,
            fade: true,
            cssEase: 'linear'
        });
    }
    if ($('.description-content-text .guide.des .guide-right .btn-guid')) {
        if ($(".description-content-text .guide.des .guide-right .text-guid").height() > 100) {
            $('.description-content-text .guide.des .guide-right .btn-guid').addClass("show");
            $(".description-content-text .guide.des .guide-right").addClass("h-100");
        } else {
            $('.description-content-text .guide.des .guide-right .btn-guid').removeClass("show");
        }
        $('.description-content-text .guide.des .guide-right .btn-guid').on("click", function () {
            $(".description-content-text .guide.des .guide-right").addClass("act");
        })
    }
    if ($('.description-content-text .guide.mob .guide-right .btn-guid')) {
        if ($(".description-content-text .guide.mob .guide-right .text-guid").height() > 100) {
            $('.description-content-text .guide.mob .guide-right .btn-guid').addClass("show");
            $(".description-content-text .guide.mob .guide-right").addClass("h-100");
        } else {
            $('.description-content-text .guide.mob .guide-right .btn-guid').removeClass("show");
        }
        $('.description-content-text .guide.mob .guide-right .btn-guid').on("click", function () {
            $(".description-content-text .guide.mob .guide-right").addClass("act");
        })
    }

    if ($(".container-calendar").length) {
        function generate_year_range(start, end) {
            var years = "";
            for (var year = start; year <= end; year++) {
                years += "<option value='" + year + "'>" + year + "</option>";
            }
            return years;
        }

        var today = new Date();
        var currentMonth = today.getMonth();
        var currentYear = today.getFullYear();
        var currentMonthValue = 0;
        var selectYear = document.getElementById("year");
        var selectMonth = document.getElementById("month");


        var createYear = generate_year_range(1970, 2050);
        /** or
         * createYear = generate_year_range( 1970, currentYear );
         */

        document.getElementById("year").innerHTML = createYear;

        var calendar = document.getElementById("calendar");
        var lang = calendar.getAttribute('data-lang');

        var months = ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"];
        var days = ["Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб"];

        var dayHeader = "<tr>";
        for (day in days) {
            dayHeader += "<th data-days='" + days[day] + "'>" + days[day] + "</th>";
        }
        dayHeader += "</tr>";

        document.getElementById("thead-month").innerHTML = dayHeader;


        monthAndYear = document.getElementById("monthAndYear");
        showCalendar(currentMonth, currentYear);
        $("#next").on("click", function () {
            next()
        });
        $("#previous").on("click", function () {
            previous()
        });
        $(".order-panel-wrap .more-btn").on("click", function () {
            $("body").addClass("act-cal");
        });
        $(".container-calendar .close-icon").on("click", function () {
            $("body").removeClass("act-cal");
        });


        document.addEventListener("click", function (e) {
            clickInWindow(e);
        })

        function clickInWindow(e) {
            let click = e.target;
            if (document.querySelector(".container-calendar")) {
                let menuBlock = document.querySelector("body")
                if (!click.classList.contains("more-btn") &&
                    !click.closest(".container-calendar") &&
                    menuBlock.classList.contains("act-cal") &&
                    click.classList.contains("bg-cal") &&
                    !click.classList.contains("container-calendar")) {
                    menuBlock.classList.remove("act-cal");
                }
            }
        }



        function next() {
            if (currentMonthValue < 3) {
                currentYear = (currentMonth === 11) ? currentYear + 1 : currentYear;
                currentMonth = (currentMonth + 1) % 12;
                showCalendar(currentMonth, currentYear);
                currentMonthValue++;
            }
            if (currentMonthValue == 0) {
                $("#previous").hide();
            } else {
                $("#previous").show();
            }
            if (currentMonthValue == 3) {
                $("#next").hide();
            } else {
                $("#next").show();
            }
            createCalendar();
        }

        function previous() {
            if (currentMonthValue > 0) {
                currentYear = (currentMonth === 0) ? currentYear - 1 : currentYear;
                currentMonth = (currentMonth === 0) ? 11 : currentMonth - 1;
                showCalendar(currentMonth, currentYear);
                currentMonthValue--;
            }
            if (currentMonthValue == 0) {
                $("#previous").hide();
            } else {
                $("#previous").show();
            }
            if (currentMonthValue == 3) {
                $("#next").hide();
            } else {
                $("#next").show();
            }
            createCalendar();
        }

        function jump() {
            currentYear = parseInt(selectYear.value);
            currentMonth = parseInt(selectMonth.value);
            showCalendar(currentMonth, currentYear);
        }

        function addZero(num) {
            let newNum = String(num);
            if (newNum.length == 1) {
                return 0 + String(num);
            }
            return String(num);
        }

        function showCalendar(month, year) {

            var firstDay = (new Date(year, month)).getDay();

            tbl = document.getElementById("calendar-body");


            tbl.innerHTML = "";


            monthAndYear.innerHTML = months[month] + " " + year;
            selectYear.value = year;
            selectMonth.value = month;

            // creating all cells
            var date = 1;
            for (var i = 0; i < 6; i++) {
                var row = document.createElement("tr");

                for (var j = 0; j < 7; j++) {
                    if (i === 0 && j < firstDay) {
                        cell = document.createElement("td");
                        cellText = document.createTextNode("");
                        cell.appendChild(cellText);
                        row.appendChild(cell);
                    } else if (date > daysInMonth(month, year)) {
                        break;
                    } else {
                        cell = document.createElement("td");
                        cell.setAttribute("data-date", date);
                        cell.setAttribute("data-month", month + 1);
                        cell.setAttribute("data-year", year);
                        cell.setAttribute("data-all", year + "-" + addZero((month + 1)) + "-" + addZero(date));
                        cell.setAttribute("data-month_name", months[month]);
                        cell.className = "date-picker";
                        cell.innerHTML = "<span>" + date + "</span>";

                        if (date === today.getDate() && year === today.getFullYear() && month === today.getMonth()) {
                            cell.className = "date-picker selected";
                        }
                        row.appendChild(cell);
                        date++;
                    }


                }

                tbl.appendChild(row);
            }

        }

        function daysInMonth(iMonth, iYear) {
            return 32 - new Date(iYear, iMonth, 32).getDate();
        }


    }


});