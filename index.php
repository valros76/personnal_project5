<?php
session_start();
function loadClass($class){
    require('models/classes/'.$class.'.php');
}
spl_autoload_register('loadClass');

require('controllers/appController.php');

if(isset($_GET['action'])){

    if($_GET['action'] === 'home'){
        home();
    }

}
else{
    home();
}

?>