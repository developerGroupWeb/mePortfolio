<?php
/**
 * Created by PhpStorm.
 * User: jacknouatin
 * Date: 29/11/2018
 * Time: 12:02
 */

spl_autoload_register(function ($class){

    require_once 'class/'.$class.'.php';
});