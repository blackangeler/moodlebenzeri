<?php
require_once("ayar.php");
session_start();
session_destroy();
@header("location:index.php");
?>
