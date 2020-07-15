$(document).ready(function () {
    let searchListCountries = $(".search-list_wrap .list-country");
    let searchListTours = $(".search-list_wrap .list-tours");
    let searchListHeader = $(".search-list_wrap .exp-header");
    let valueLength;
    let xhrOne = null;


    function request(url) {
        $(".windows8").show();
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
            // alert(xhr.status + ': ' + xhr.statusText);
        } else {
            data = jQuery.parseJSON(xhr.responseText);
        }
        console.log(data)
        let cityName = replaceName("noSpace", data.city.name_en);
        let countryName = replaceName("noSpace", data.city.country.name_en);
        let url = "https://travel-mania.org/" + countryName + "/" + cityName + "/excursion-" + id;
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
        console.log(data)
        let countryName = replaceName("noSpace", data.results[0].name_en);
        let url = "https://travel-mania.org/" + countryName;
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
        console.log(data)
        console.log(id)
        let cityName = replaceName("noSpace", data.results[0].name_en);
        let countryName = replaceName("noSpace", data.results[0].country.name_en);
        let url = "https://travel-mania.org/" + countryName + "/" + cityName;
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
                        searchListCountries.append("<div data-type='" + type + "' data-id='" + newNameCountry + "' class='result-item " + type + "'><img class='loc' src='/wp-content/themes/lz-computer-repair/assets/images/icon-location.svg'><div class='inner'><div class='title1'>" + this.title + "</div><div class='title2'></div></div><div class='left-block'>" + this.experience_count + "</div></div>");
                        break;
                    case "city":
                        let newNameCity = replaceName("noEm", this.title)
                        searchListCountries.append("<div data-type='" + type + "' data-id='" + newNameCity + "' class='result-item " + type + "'><img class='loc' src='/wp-content/themes/lz-computer-repair/assets/images/icon-location.svg'><div class='inner'><div class='title1'>" + this.title + "</div><div class='title2'>" + this.country.name_ru + "</div></div><div class='left-block'>" + this.experience_count + "</div></div>");
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
            $(".not-found").hide();
        } else {
            $(".not-found").show();
            $(".windows8").hide();
        }
        console.log(data)
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
    })
    $(".menu-wrap .burger").on("click", function () {
        $("#header .menu").toggleClass("act")
    })
    // $("#searchInput").blur(function (e) {
    //     console.log(e.target)
    //     if (!e.target.closest(".list-country")) {
    //         // $("body").removeClass("act-search")
    //     }
    // })


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

    let simplebarItems = document.querySelectorAll('.scroll-init');
    simplebarItems.forEach(function (item) {
        new SimpleBar(item, {
            autoHide: false
        })
    })



});