<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);


function getData($url)
{
    $countries = file_get_contents($url);
    return json_decode($countries);
}

function getAllResults($url, &$list)
{
    $countries = getData($url);

    if (isset($countries->results)) {
        $list = array_merge($list, $countries->results);
    }
    // else {
    //     echo "Error results ({$url})";
    // }

    if ($countries->next) {
        getAllResults($countries->next, $list);
    }
}


function getAllResultsNoNext($url, &$list, &$urlNext, &$countCity)
{
    $countries = getData($url);
    if (isset($countries->results)) {
        $list = array_merge($list, $countries->results);
    }
    if (isset($countries->next)) {
        $urlNext = $countries->next;
    }
    if (isset($countries->count)) {
        $countCity = $countries->count;
    }
}



function dd($arr, $exit = true)
{
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
    if ($exit) {
        exit;
    }
}
