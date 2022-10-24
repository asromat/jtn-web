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

