<?php
defined('_JEXEC') or die;
use Joomla\CMS\Factory;
$session = Factory::getSession();

$a = 2;
$b = 2;
$c = $a + $b;






$session->set('myVa', $c); 



?>