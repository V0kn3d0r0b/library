<?php
include 'inc/header.php';
Session::CheckSession();
Session::destroy();
header ('Location:index.php');
