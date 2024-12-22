<?php
defined('_JEXEC') or die;
use Joomla\CMS\Factory;





$session = Factory::getSession();
/*$session->set('myvalue', '123');
$temp= $session->get('myvalue');
var_dump($temp);*/

require_once dirname(__FILE__) . '/helper.php';

//$params = $session;
//$str = modCapchaHelper::getCapcha($params);


//require JModuleHelper::getLayoutPath('mod_capcha');


$value = JFactory::getApplication()->input->post->get('capcha', '');

//echo $temp


//$session->clear();

if($session->get('myVa') == null ){
    //echo $session->get('myVa');
    $str = modCapchaHelper::getCapcha($params);
    require JModuleHelper::getLayoutPath('mod_capcha');
    exit();
}