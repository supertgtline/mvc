<?php
include_once('config/connect.php');
switch($_GET['controller']){
    case 'user': include_once('controller/user.php');
        break;
    case 'product': include_once('controllers/product.php');
        break;
}
?>