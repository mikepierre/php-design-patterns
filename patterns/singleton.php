<?php
class ATMObject
{
   function __construct()
   {
   }
   
   public static function getATMMessage()
   {
      echo 'This is ATM Message Transaction';
   }
}

$singletonOBJ = new ATMObject();

$singletonOBJ->getATMMessage();
