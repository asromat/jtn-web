<?php

function test($var)
{
	var_dump($var);
	die();
}

function timeToYmd($date)
{
	$tanggal = $date("Ymd",strtotime($date));
	echo $tanggal;
}

function timeToHms($date)
{
	$tanggal = date("Hms",strtotime($date));
	echo $tanggal;
}

function urlToAmp($url)
{
	$url = str_replace("/baca/","/amp/baca/",$url);
	echo $url;
}

function ampToUrl($url)
{
	$url = str_replace("/amp/baca/","/baca/",$url);
	echo $url;
}
