<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);


function getData($url)
{
    $cache = __DIR__ . '/cache/' . md5($url);

    if (file_exists($cache)) {
        $countries = file_get_contents($cache);
        return json_decode($countries);
    }

    $countries = file_get_contents($url);

    if ($countries) {
        file_put_contents($cache, $countries);
    }

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


function getAllResultsNoNext($url, &$list)
{
    $countries = getData($url);
    if (isset($countries->results)) {
        $list = array_merge($list, $countries->results);
    } else {
        echo "Error results ({$url})";
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
