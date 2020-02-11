
<?php
/*
Template Name: go-page
* @package WordPress
 * @subpackage lz-computer-repair
 * @since 1.0
 * @version 0.1
*/
?>
<?php 
$request_data = $_GET;
unset($request_data['page']);
$url = $request_data['url'];
unset($request_data['url']);
$url .= "?".http_build_query($request_data);
header ("Location: $url"); 