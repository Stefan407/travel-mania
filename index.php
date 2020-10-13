<?php
require_once 'sys/inc.php';
//Ловим все параметры с главной в $_GET
$city__name_en = isset($_GET['city__name_en']) ? str_replace('-', '+', urlencode($_GET['city__name_en'])) : null;
$country__name_en = isset($_GET['country__name_en']) ? str_replace('-', '+', urlencode($_GET['country__name_en'])) : null;
$experiences_id = isset($_GET['id']) ?  $_GET['id'] : null;
$excursion_type = isset($_GET['tag_slug']) ?  $_GET['tag_slug'] : null;
$city_id = isset($_GET['city_id']) ?  $_GET['city_id'] : null;
$tag_id = isset($_GET['tag_id']) ?  $_GET['tag_id'] : null;
$page = isset($_GET['page']) ?  $_GET['page'] : null;
$postName = isset($_GET['post_name']) ?  $_GET['post_name'] : null;
$list = [];
$list1 = [];
$tag_list = [];
$reviews = [];

if (!is_null($page)) {
    include_once($page . '.php');
    exit;
} else if ($postName) {
    $page = 'Post';
} else if ($experiences_id) {
    $page = 'Tour';
    $list = getData("https://experience.tripster.ru/api/experiences/{$experiences_id}/");
    if (!$list) {
        include_once('404.php');
        exit;
    }
    $reviews = getData($list->links->reviews);
} else if ($excursion_type && $city_id) {
    $page = 'Tag';
    getAllResultsNoNext("https://experience.tripster.ru/api/search/experiences/?city=" . $city_id . "&detailed=true&citytag=" . $tag_id, $tag_list, $urlNext, $countCity);

    if (!$tag_list) {
        include_once('404.php');
        exit;
    }
} else if ($country__name_en && $city__name_en) {
    $page = 'City';
    if ($city__name_en == 'Lviv') {
        getAllResultsNoNext("https://experience.tripster.ru/api/experiences/?page_size=24&city__name_ru=Львов&detailed=true", $list, $urlNext, $countCity);
    } else if ($city__name_en == "Donetsk") {
        getAllResultsNoNext("https://experience.tripster.ru/api/experiences/?page_size=24&city__name_ru=Донецк&detailed=true", $list, $urlNext, $countCity);
    } else if ($city__name_en == "Totma") {
        getAllResultsNoNext("https://experience.tripster.ru/api/experiences/?page_size=24&city__name_ru=тотьма&detailed=true", $list, $urlNext, $countCity);
    } else if ($city__name_en == "Baykalsk") {
        getAllResultsNoNext("https://experience.tripster.ru/api/experiences/?page_size=24&city__name_ru=Байкальск&detailed=true", $list, $urlNext, $countCity);
    } else if ($city__name_en == "Ivano+Frankivsk") {
        getAllResultsNoNext("https://experience.tripster.ru/api/experiences/?page_size=24&city__name_en=Ivano-Frankivsk&detailed=true", $list, $urlNext, $countCity);
    } else if ($city__name_en == "Yuzhno+Kurilsk") {
        getAllResultsNoNext("https://experience.tripster.ru/api/experiences/?page_size=24&city__name_en=Ivano-Frankivsk&detailed=true", $list, $urlNext, $countCity);
    } else if ($city__name_en == "Rostov+na+Donu") {
        getAllResultsNoNext("https://experience.tripster.ru/api/experiences/?page_size=24&city__name_en=Rostov-na-Donu&detailed=true", $list, $urlNext, $countCity);
    } else if ($city__name_en == "Villefranche+sur+Saone") {
        getAllResultsNoNext("https://experience.tripster.ru/api/experiences/?page_size=24&city__name_en=Villefranche-sur-Saone&detailed=true", $list, $urlNext, $countCity);
    } else if ($city__name_en == "Ust+Koksa") {
        getAllResultsNoNext("https://experience.tripster.ru/api/experiences/?page_size=24&city__name_en=Ust-Koksa&detailed=true", $list, $urlNext, $countCity);
    } else if ($city__name_en == "Abrau+Dyurso") {
        getAllResultsNoNext("https://experience.tripster.ru/api/experiences/?page_size=24&city__name_en=Abrau-Dyurso&detailed=true", $list, $urlNext, $countCity);
    } else if ($city__name_en == "Yoshkar+Ola") {
        getAllResultsNoNext("https://experience.tripster.ru/api/experiences/?page_size=24&city__name_en=Yoshkar-Ola&detailed=true", $list, $urlNext, $countCity);
    } else if ($city__name_en == "Pereslavl+Zalessky") {
        getAllResultsNoNext("https://experience.tripster.ru/api/experiences/?page_size=24&city__name_en=Pereslavl-Zalessky&detailed=true", $list, $urlNext, $countCity);
    } else if ($city__name_en == "Baden+Baden") {
        getAllResultsNoNext("https://experience.tripster.ru/api/experiences/?page_size=24&city__name_en=Baden-Baden&detailed=true", $list, $urlNext, $countCity);
    } else if ($city__name_en == "Yuryev+Polsky") {
        getAllResultsNoNext("https://experience.tripster.ru/api/experiences/?page_size=24&city__name_en=Yuryev-Polsky&detailed=true", $list, $urlNext, $countCity);
    } else if ($city__name_en == "Ulan+Ude") {
        getAllResultsNoNext("https://experience.tripster.ru/api/experiences/?page_size=24&city__name_en=Ulan-Ude&detailed=true", $list, $urlNext, $countCity);
    } else if ($city__name_en == "Yokohama+shi") {
        getAllResultsNoNext("https://experience.tripster.ru/api/experiences/?page_size=24&city__name_en=Yokohama-shi&detailed=true", $list, $urlNext, $countCity);
    } else if ($city__name_en == "Perm") {
        getAllResultsNoNext("https://experience.tripster.ru/api/experiences/?page_size=24&city__name_en=Perm`&detailed=true", $list, $urlNext, $countCity);
    } else if ($city__name_en == "Perm`") {
        getAllResultsNoNext("https://experience.tripster.ru/api/experiences/?page_size=24&city__name_en=Perm`&detailed=true", $list, $urlNext, $countCity);
    } else if ($city__name_en == "Baykal'sk") {
        getAllResultsNoNext("https://experience.tripster.ru/api/experiences/?page_size=24&city__name_en=Baykalsk`&detailed=true", $list, $urlNext, $countCity);
    } else if ($city__name_en == "Aix+en+Provence") {
        getAllResultsNoNext("https://experience.tripster.ru/api/experiences/?page_size=24&city__name_en=Aix-en-Provence`&detailed=true", $list, $urlNext, $countCity);
    } else if ($city__name_en == "Gorno+Altaysk") {
        getAllResultsNoNext("https://experience.tripster.ru/api/experiences/?page_size=24&city__name_en=Gorno-Altaysk&detailed=true", $list, $urlNext, $countCity);
    } else if ($city__name_en == "Khanty+Mansiysk") {
        getAllResultsNoNext("https://experience.tripster.ru/api/experiences/?page_size=24&city__name_en=Khanty-Mansiysk&detailed=true", $list, $urlNext, $countCity);
    } else if ($city__name_en == "Pha+ngan") {
        getAllResultsNoNext("https://experience.tripster.ru/api/experiences/?page_size=24&city__name_en=Pha-ngan&detailed=true", $list, $urlNext, $countCity);
    } else if ($city__name_en == "Giardini+Naxos") {
        getAllResultsNoNext("https://experience.tripster.ru/api/experiences/?page_size=24&city__name_en=Giardini-Naxos&detailed=true", $list, $urlNext, $countCity);
    } else {
        getAllResultsNoNext("https://experience.tripster.ru/api/experiences/?page_size=24&city__name_en={$city__name_en}&detailed=true", $list, $urlNext, $countCity);
    }
    if (!$list) {
        include_once('404.php');
        exit;
    }
} else if ($country__name_en) {
    $page = 'Country';
    getAllResultsNoNext("https://experience.tripster.ru/api/cities/?page_size=24&format=json&country__name_en={$country__name_en}", $list, $urlNext, $countCity);
    if (!$list) {
        include_once('404.php');
        exit;
    }
} else {
    if ($_SERVER['REQUEST_URI'] != '/') {
        include_once('404.php');
        exit;
    }
    $page = 'Main';
    getAllResultsNoNext('https://experience.tripster.ru/api/experiences/', $list, $urlNext, $countCity);
    getAllResultsNoNext('https://experience.tripster.ru/api/cities/', $list1, $urlNext, $countCity);
}


switch ($page) {
    case 'Main':
        include_once 'main.php';
        break;
    case 'Country':
        include_once 'country.php';
        break;
    case 'City':
        include_once 'city.php';
        break;
    case 'Post':
        include_once 'post.php';
        break;
    case 'Tour':
        include_once 'tour.php';
        break;
    case 'Tag':
        include_once 'tag.php';
        break;
}
