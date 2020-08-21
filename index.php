<?php
/*
Template Name: Router-page
* @package WordPress
 * @subpackage lz-computer-repair
 * @since 1.0
 * @version 0.1
*/
?>
<?php
require_once 'sys/inc.php';
//Ловим все параметры с главной в $_GET
$city__name_en = isset($_GET['city__name_en']) ? str_replace('-', '+', urlencode($_GET['city__name_en'])) : null;
$country__name_en = isset($_GET['country__name_en']) ? str_replace('-', '+', urlencode($_GET['country__name_en'])) : null;
$experiences_id = isset($_GET['id']) ?  $_GET['id'] : null;
$page = isset($_GET['page']) ?  $_GET['page'] : null;

$list = [];
$list1 = [];

$reviews = [];

if (!is_null($page)) {
    include_once($page . '.php');
    exit;
} else if ($experiences_id) {
    $page = 'Tour';
    $list = getData("https://experience.tripster.ru/api/experiences/{$experiences_id}/");
    if (!$list) {
        /* dd('Нет результатов!!'); */
        include_once('404.php');
        exit;
    }
    $reviews = getData($list->links->reviews);
} else if ($country__name_en && $city__name_en) {
    $page = 'City';
    if ($city__name_en == 'Lviv') {
        getAllResults("https://experience.tripster.ru/api/experiences/?city__name_ru=Львов&detailed=true", $list);
    } else if ($city__name_en == "Donetsk") {
        getAllResults("https://experience.tripster.ru/api/experiences/?city__name_ru=Донецк&detailed=true", $list);
    } else if ($city__name_en == "Totma") {
        getAllResults("https://experience.tripster.ru/api/experiences/?city__name_ru=тотьма&detailed=true", $list);
    } else if ($city__name_en == "Baykalsk") {
        getAllResults("https://experience.tripster.ru/api/experiences/?city__name_ru=Байкальск&detailed=true", $list);
    } else if ($city__name_en == "Ivano+Frankivsk") {
        getAllResults("https://experience.tripster.ru/api/experiences/?city__name_en=Ivano-Frankivsk&detailed=true", $list);
    } else if ($city__name_en == "Yuzhno+Kurilsk") {
        getAllResults("https://experience.tripster.ru/api/experiences/?city__name_en=Ivano-Frankivsk&detailed=true", $list);
    } else if ($city__name_en == "Rostov+na+Donu") {
        getAllResults("https://experience.tripster.ru/api/experiences/?city__name_en=Rostov-na-Donu&detailed=true", $list);
    } else if ($city__name_en == "Villefranche+sur+Saone") {
        getAllResults("https://experience.tripster.ru/api/experiences/?city__name_en=Villefranche-sur-Saone&detailed=true", $list);
    } else if ($city__name_en == "Ust+Koksa") {
        getAllResults("https://experience.tripster.ru/api/experiences/?city__name_en=Ust-Koksa&detailed=true", $list);
    } else if ($city__name_en == "Abrau+Dyurso") {
        getAllResults("https://experience.tripster.ru/api/experiences/?city__name_en=Abrau-Dyurso&detailed=true", $list);
    } else if ($city__name_en == "Yoshkar+Ola") {
        getAllResults("https://experience.tripster.ru/api/experiences/?city__name_en=Yoshkar-Ola&detailed=true", $list);
    } else if ($city__name_en == "Pereslavl+Zalessky") {
        getAllResults("https://experience.tripster.ru/api/experiences/?city__name_en=Pereslavl-Zalessky&detailed=true", $list);
    } else if ($city__name_en == "Baden+Baden") {
        getAllResults("https://experience.tripster.ru/api/experiences/?city__name_en=Baden-Baden&detailed=true", $list);
    } else if ($city__name_en == "Yuryev+Polsky") {
        getAllResults("https://experience.tripster.ru/api/experiences/?city__name_en=Yuryev-Polsky&detailed=true", $list);
    } else if ($city__name_en == "Ulan+Ude") {
        getAllResults("https://experience.tripster.ru/api/experiences/?city__name_en=Ulan-Ude&detailed=true", $list);
    } else if ($city__name_en == "Yokohama+shi") {
        getAllResults("https://experience.tripster.ru/api/experiences/?city__name_en=Yokohama-shi&detailed=true", $list);
    } else if ($city__name_en == "Perm") {
        getAllResults("https://experience.tripster.ru/api/experiences/?city__name_en=Yokohama-shi&detailed=true", $list);
    } else if ($city__name_en == "Aix+en+Provence") {
        getAllResults("https://experience.tripster.ru/api/experiences/?city__name_en=Perm`&detailed=true", $list);
    } else if ($city__name_en == "Gorno+Altaysk") {
        getAllResults("https://experience.tripster.ru/api/experiences/?city__name_en=Gorno-Altaysk&detailed=true", $list);
    } else if ($city__name_en == "Khanty+Mansiysk") {
        getAllResults("https://experience.tripster.ru/api/experiences/?city__name_en=Khanty-Mansiysk&detailed=true", $list);
    } else if ($city__name_en == "Pha+ngan") {
        getAllResults("https://experience.tripster.ru/api/experiences/?city__name_en=Pha-ngan&detailed=true", $list);
    } else if ($city__name_en == "Giardini+Naxos") {
        getAllResults("https://experience.tripster.ru/api/experiences/?city__name_en=Giardini-Naxos&detailed=true", $list);
    } else {
        getAllResults("https://experience.tripster.ru/api/experiences/?city__name_en={$city__name_en}&detailed=true", $list);
    }
} else if ($country__name_en) {
    $page = 'Country';
    getAllResults("https://experience.tripster.ru/api/cities/?country__name_en={$country__name_en}", $list);
} else {
    if ($_SERVER['REQUEST_URI'] != '/') {
        include_once('404.php');
        exit;
    }
    $page = 'Main';
    get_template_part('contry.php');
    getAllResultsNoNext('https://experience.tripster.ru/api/experiences/', $list);
    getAllResultsNoNext('https://experience.tripster.ru/api/cities/', $list1);
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
    case 'Tour':
        include_once 'tour.php';
        break;
}

?>
