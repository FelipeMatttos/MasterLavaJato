<?php
require_once('config.php');
$current_url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$request = str_replace($site_url, '', $current_url);
$request = str_replace('/', '', $request);
$request = strtolower($request);
