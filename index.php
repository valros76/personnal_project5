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

    if($_GET['action'] === 'bonus'){
        bonus();
    }

    if($_GET['action'] === 'shifumi'){
        shifumi();
    }

    if($_GET['action'] === 'contact'){
        contact();
    }

    if($_GET['action'] === 'contact_me'){
        contact_me();
    }

}

else{
    home();
}

?>