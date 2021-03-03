<?php
require_once('route.php');
session_start();

function index()
{
  include("app/View/Index.php");
}

function page404()
{
  echo 'This is contact us page. Contact Us template in HTML.';
}

if ($request == 'index' or $request == '')
  if (empty($_SESSION)) {
    logar();
  } else {
    index();
  }
else
  page404();
