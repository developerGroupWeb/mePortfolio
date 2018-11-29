<?php
/**
 * Created by PhpStorm.
 * User: jacknouatin
 * Date: 29/11/2018
 * Time: 11:48
 */

class Validator
{
    public $var, $errors = [];

    function inputText($string)
    {
        if(array_key_exists($string, $_POST)){

            return $this->var = $_POST[$string];
        }
        return $this->var;
    }

    function inputEmail($string)
    {
        if(array_key_exists($string, $_POST)){

            return $this->var = $_POST[$string];
        }
        return $this->var;
    }

    function inputPassword($string)
    {
        if(array_key_exists($string, $_POST)){

            return $this->var = $_POST[$string];
        }
        return $this->var;
    }

    function mdp_check($string){

        if($this->inputPassword($string) != ''){

        }else{

            $this->errors[$string] = 'Password is required!';
        }
    }

    function text_check($string){

        if($this->inputText($string) != ''){

            if(strlen($this->inputText($string)) >= 4){

            }else{

                $this->errors[$string] = 'Taper 4 caracteres minimums!';
            }

        }else{

            $this->errors[$string] = 'Champ is required!';
        }
    }

    function email_check($string){

        if($this->inputText($string) != ''){

            if(strlen($this->inputText($string)) >= 4){

            }else{

                $this->errors[$string] = 'Taper 4 caracteres minimums!';
            }

        }else{

            $this->errors[$string] = 'Champ is required!';
        }
    }

    function errors($string){

        if(isset($this->errors[$string]))
            return $this->errors[$string];
    }

    function success(){

        if(empty($this->errors)){
            echo 'success';
        }
    }
}