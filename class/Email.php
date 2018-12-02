<?php
/**
 * Created by PhpStorm.
 * User: jacknouatin
 * Date: 01/12/2018
 * Time: 23:32
 */

class Email
{
    static private $recipient, $subject, $contents, $headers;

    static function sendEmail($name, $subject, $email, $message){

       self::$recipient  = "myportfolio@myprojets.site";
       self::$subject    = $subject;
       self::$contents    = " 
            <!DOCTYPE html>
            <html>
            <body>
                   <div>
                         <p><strong>$name.</strong></p><br>
                         <h3>$subject</h3><br/>
                         <p>$message</p>
                   </div>
            </body>
            </html>
       ";
       self::$headers ="From: $email\n";
       self::$headers.="Cc: senamathias17@gmail.com\n";
       self::$headers.="Content-Type: text/html; charset=iso-8859-1";

       if(mail(self::$recipient, self::$subject, self::$contents, self::$headers))
          return true;
       else
          return false;
        }
}