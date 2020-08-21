
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
$excursion_type = isset($_GET['tagName']) ?  $_GET['tagName'] : null;
$city_id = isset($_GET['cityId']) ?  $_GET['cityId'] : null;
$tag_id = isset($_GET['tagId']) ?  $_GET['tagId'] : null;
$page = isset($_GET['page']) ?  $_GET['page'] : null;

$list = [];
$tag_list = [];
$reviews = [];


$page = 'Country';
getAllResultsNoNext("https://experience.tripster.ru/api/cities/?country__name_en={$country__name_en}", $list);

include_once 'country.php';

?>
