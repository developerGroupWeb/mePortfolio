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

$validate = new Validator;

$error = '';

$name    = $validate->inputText('name');
$email   = strtolower($validate->inputEmail('email'));
$subject = $validate->inputText('subject');
$message = $validate->inputText('message');

if(isset($name) && isset($email) && isset($subject) && isset($message)){

    if(Email::sendEmail($name, $subject, $email, $message) != true){

        $error = 'A problem has occurred. Try Again';
    }

}else{

    $error = 'All fields are required!';
}
echo $error;