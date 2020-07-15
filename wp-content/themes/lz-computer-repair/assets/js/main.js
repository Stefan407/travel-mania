$(document).ready(function () {
    let dataInfo;
    let searchListCountries = $(".search-list_wrap .list-country");
    let searchListTours = $(".search-list_wrap .list-tours");
    let searchListHeader = $(".search-list_wrap .exp-header");
    let valueLength;
    let timeLoadRequest;
    let xhrOne = null;
    let xhrTwo;
    let xhrThree;
    let xhrFour;
    if (window.innerWidth > 768) {
        timeLoadRequest = 500;
    } else {
        timeLoadRequest = 1500;
    }
    let controller = new AbortController();
    let signal = controller.signal;
    console.log(signal)

    /*     function debounce(func, wait, immediate, value) {
            let timeout;

            return function executedFunction() {
                const context = this;
                const args = value;

                const later = function () {
                    timeout = null;
                    if (!immediate) func.apply(context, args);
                };

                const callNow = immediate && !timeout;

                clearTimeout(timeout);

                timeout = setTimeout(later, wait);

                if (callNow) func.apply(context, args);
            };
        };
     */
    /* const returnedFunction = debounce(
        , timeLoadRequest, false, dataInfo); */

    function request(url) {
        $(".windows8").show();
        console.log(xhrOne);
        if (xhrOne !== null) {
            xhrOne.abort();
        }
        xhrOne = new XMLHttpRequest();
        let data = null;
        xhrOne.open('GET', 'https://experience.tripster.ru/api/search/site/?format=json&query=' + url + '&limit=8', true);
        xhrOne.send();

        xhrOne.onreadystatechange = function() {
            if (xhrOne.readyState == 4) {
                if (xhrOne.status == 200) {
                    data = jQuery.parseJSON(xhrOne.responseText);
                }
                editListSearch(data); 
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

    function initUrlExperience(title, id, price, image) {
        xhrTwo = new XMLHttpRequest();
        let data = null;
        xhrTwo.open('GET', 'https://experience.tripster.ru/api/experiences/' + id + '', false);
        xhrTwo.send();
        if (xhrTwo.status != 200) {
            alert(xhrTwo.status + ': ' + xhrTwo.statusText);
        } else {
            data = jQuery.parseJSON(xhrTwo.responseText);
        }
        let cityName = replaceName("noSpace", data.city.name_en);
        let cityNameRu = data.city.name_ru;
        let countryName = replaceName("noSpace", data.city.country.name_en);
        let url = "https://travel-mania.org/" + countryName + "/" + cityName + "/excursion-" + id;
        searchListTours.append("<a href=" + url + " class='result-item'><img class='tour' src=" + image + "><div class='inner'><div class='title1'>" + title + "</div><div class='title2'>" + cityNameRu + "</div></div><div class='left-block'>" + price + "</div></a>")
    }



    function initUrlCountry(title, name, count) {
        xhrThree = new XMLHttpRequest();
        let data = null;
        xhrThree.open('GET', 'https://experience.tripster.ru/api/countries/?name_ru=' + name + '', false);
        xhrThree.send();
        if (xhrThree.status != 200) {
            alert(xhrThree.status + ': ' + xhrThree.statusText);
        } else {
            data = jQuery.parseJSON(xhrThree.responseText);
        }
        let countryName = replaceName("noSpace", data.results[0].name_en);
        let url = "https://travel-mania.org/" + countryName;
        searchListCountries.append("<a href=" + url + " class='result-item'><img class='loc' src='/wp-content/themes/lz-computer-repair/assets/images/icon-location.svg'><div class='inner'><div class='title1'>" + title + "</div><div class='title2'></div></div><div class='left-block'>" + count + "</div></a>");

    }

    function initUrlCity(title, name, count) {
        xhrFour = new XMLHttpRequest();
        let data = null;
        xhrFour.open('GET', 'https://experience.tripster.ru/api/cities/?name_ru=' + name + '', false);
        xhrFour.send();
        if (xhrFour.status != 200) {
            alert(xhrFour.status + ': ' + xhrFour.statusText);
        } else {
            data = jQuery.parseJSON(xhrFour.responseText);
        }
        let cityName = replaceName("noSpace", data.results[0].name_en);
        let countryName = replaceName("noSpace", data.results[0].country.name_en);
        let countryNameRu = data.results[0].country.name_ru;
        let url = "https://travel-mania.org/" + countryName + "/" + cityName;
        searchListCountries.append("<a href=" + url + " class='result-item'><img class='loc' src='/wp-content/themes/lz-computer-repair/assets/images/icon-location.svg'><div class='inner'><div class='title1'>" + title + "</div><div class='title2'>" + countryNameRu + "</div></div><div class='left-block'>" + count + "</div></a>");
    }

    function editListSearch(data) {
        searchListCountries.text("");
        searchListTours.text("");
        searchListHeader.hide();
        if (data.length) {
            $(data).each(function () {
                let type = this.type;
                // switch (type) {
                //     case "country":
                //         let newNameCountry = replaceName("noEm", this.title)
                //         initUrlCountry(this.title, newNameCountry, this.experience_count);
                //         break;
                //     case "city":
                //         let newNameCity = replaceName("noEm", this.title)
                //         initUrlCity(this.title, newNameCity, this.experience_count);
                //         break;
                //     case "experience":
                //         searchListHeader.show();
                //         initUrlExperience(this.title, this.id, this.price, this.image);
                //         break;
                //     case "citytag":
                //         break;
                //     default:
                //         break;
                // }
            });
            $(".windows8").hide();
        }
    }

    function abort() {
        xhrOne.abort();
        xhrTwo.abort();
        xhrThree.abort();
        xhrFour.abort();
    }
    $("#header .menu-logo img").on("click", function () {
        abort()
    })
    $("#searchInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        if (value.length !== valueLength) {
            request(value);
            valueLength = value.length;
        }
    });

    $("#searchInput").on("click", function (e) {
        var value = $(this).val();
        if (!value.length && value.length !== valueLength) {
            request(value);
            valueLength = value.length;
        }
    })
});