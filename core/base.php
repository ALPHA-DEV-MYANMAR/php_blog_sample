<?php

function con(){
    return mysqli_connect("localhost","root","","php_ecommerce");
}

$info = array(
  "name" => "Sample Blog",
  "short" => "SB",
  "description" => "ကျောင်းသားများအတွက် sample project",
);

$role = ["Admin","Editor","User"];


$url = "http://{$_SERVER['HTTP_HOST']}/blog";