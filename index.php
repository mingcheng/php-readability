<?php
// vim: set et sw=4 ts=4 sts=4 ft=php fdm=marker ff=unix fenc=utf8 nobomb:
/**
 * PHP Readability
 *
 * @author mingcheng<i.feelinglucky#gmail.com>
 * @date   2011-02-17
 * @link   http://www.gracecode.com/
 */

include('lib/Readability.inc.php');

header("Content-type: text/html;charset=utf-8");

mb_detect_order("gb18030,gbk,utf-8,ascii");

$source = trim(file_get_contents("nytime.html"));

/*
$request_url = "http://www.izaobao.us/index.php/2011-02/zaobao-8805/";
$handle = curl_init();
curl_setopt_array($handle, array(
    CURLOPT_HTTPGET => true,
    CURLOPT_HEADER  => false,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL => $request_url
));

$source = curl_exec($handle);
 */

//echo $source;

preg_match("/charset=([\w|\-]+);?/", $source, $match);
$charset = isset($match[1]) ? $match[1] : 'utf-8';

$Readability = new Readability($source, $charset);
$Data = $Readability->getContent();
echo $Data['content'];
