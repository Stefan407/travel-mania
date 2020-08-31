<?php 
$request_data = $_GET;
unset($request_data['page']);
$url = $request_data['url'];
unset($request_data['url']);
$url .= "?".http_build_query($request_data);
header ("Location: $url"); 