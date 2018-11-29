<?php
/**
 * Created by PhpStorm.
 * User: jacknouatin
 * Date: 29/11/2018
 * Time: 12:07
 */
define(
    'URL', str_replace("index.php", "", (isset($_SERVER['HTTPS'])? "https"
            : "http")."://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]")
);
require_once 'submit.php';