<?php
    defined('_JEXEC') or die; 
    use Joomla\CMS\Factory;


class modCapchaHelper
{
     
    public static function getCapcha($params)
    {
        $a = rand(1, 10);
        $b = rand(1, 10);
        $c = $a + $b;
        $str = $a."+".$b."= ?";

      
     
        $session = Factory::getSession();
        $session->set('myVa', $c); 

        return $str;
    }
}