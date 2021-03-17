<?php
require_once('route.php');
session_start();

function index()
{
  include("app/View/Index.php");
}
function logar()
{
  include("app/View/Login.php");
}
function logout()
{
  session_start();
  session_unset();
  header("Location: index");
}
function page404()
{
  echo 'This is contact us page. Contact Us template in HTML.';
}

if ($request == 'index' or $request == '' or $request == '/')
  if (empty($_SESSION)) {
    logar();
  } else {
    index();
  }
else if ($request == 'logout')
  logout();


else
  page404();
