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

    if($_GET['action'] === 'inscription'){
        inscription();
    }

    if($_GET['action'] === 'new_inscription'){
        newInscription();
    }

    if($_GET['action'] === 'connexion'){
        connexion();
    }

    if($_GET['action'] === 'connect'){
        connect();
    }

    if($_GET['action'] === 'disconnect'){
        disconnect();
    }

    if($_GET['action'] === 'portfolio'){
        portfolio();
    }

}

else{
    home();
}

?>