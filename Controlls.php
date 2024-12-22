<?php 
defined('_JEXEC') or die;

use Joomla\CMS\Factory;
$session = Factory::getSession();

include_once('capcha.php');




if(isset($_POST['capcha']) && $session->get('myVa') == $_POST['capcha'] ){
    echo $session->get('myVa');
    header('Location: http://joomlatest');
    
}
else{
    $session->clear();
    
   
}



?>


<form  method='POST'>
<input type='text' name='capcha' placeholder='введите тест'>
<input type='submit' name='submit' value='Отправить'>
</form>