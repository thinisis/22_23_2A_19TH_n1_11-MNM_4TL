<?php

include "./include/session.php";
is_logged_in();
require_once "./views/head.php";
require "./views/home.php";
require_once "./views/foot.php";
?>