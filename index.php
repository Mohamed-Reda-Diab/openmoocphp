<?php




require 'includes/global.php';


require MODELS.'/userEntity.php';
require  MODELS.'/usersModel.php';


$users=new usersModel();

$uentity=new userEntity();
echo'<pre>';
print_r($users->getUserByActiveStatus('1'));
$users->getErrors();





