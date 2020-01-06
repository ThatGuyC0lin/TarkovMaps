<?php

$url = explode("/", $_SERVER['REQUEST_URI']);
$url = $url[1];

if (empty($url)) {
    $url = "home";
} else if (!file_exists("pages/" . $url . ".php")) {
    $url = "404";
}

include "inc/header.php";

include "pages/" . $url . ".php";

include "inc/footer.php";
