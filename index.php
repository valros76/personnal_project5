<?php
session_start();
function loadClass($class){
        $class = str_replace(__NAMESPACE__.'\\', '', $class);
        $class = str_replace('\\', '/', $class);
        require('models/classes/'.$class.'.php');
}
spl_autoload_register('loadClass');

require('controllers/appController.php');

if(isset($_GET['action'])){

    if($_GET['action'] === 'home'):
        home();
    endif;

    if($_GET['action'] === 'inscription'):
        inscription();
    endif;

    if($_GET['action'] === 'new_inscription'):
        newInscription();
    endif;

    if($_GET['action'] === 'connexion'):
        connexion();
    endif;

    if($_GET['action'] === 'connect'):
        connect();
    endif;

    if($_GET['action'] === 'disconnect'):
        disconnect();
    endif;

    if($_GET['action'] === 'portfolio'):
        portfolio();
    endif;

    if($_GET['action'] === 'bonus'):
        bonus();
    endif;

    if($_GET['action'] === 'shifumi'):
        shifumi();
    endif;

    if($_GET['action'] === 'contact'):
        contact();
    endif;

    if($_GET['action'] === 'contact_me'):
        contact_me();
    endif;


    if($_GET['action'] === 'noteProject1_1'):
        $note = 1;
        noteProject1($note);
    elseif($_GET['action'] === 'noteProject1_2'):
        $note = 2;
        noteProject1($note);
    elseif($_GET['action'] === 'noteProject1_3'):
        $note = 3;
        noteProject1($note);
    elseif($_GET['action'] === 'noteProject1_4'):
        $note = 4;
        noteProject1($note);
    elseif($_GET['action'] === 'noteProject1_5'):
        $note = 5;
        noteProject1($note);
    endif;

    if($_GET['action'] === 'noteProject2_1'):
        $note = 1;
        noteProject2($note);
    elseif($_GET['action'] === 'noteProject2_2'):
        $note = 2;
        noteProject2($note);
    elseif($_GET['action'] === 'noteProject2_3'):
        $note = 3;
        noteProject2($note);
    elseif($_GET['action'] === 'noteProject2_4'):
        $note = 4;
        noteProject2($note);
    elseif($_GET['action'] === 'noteProject2_5'):
        $note = 5;
        noteProject2($note);
    endif;

    if($_GET['action'] === 'noteProject3_1'):
        $note = 1;
        noteProject3($note);
    elseif($_GET['action'] === 'noteProject3_2'):
        $note = 2;
        noteProject3($note);
    elseif($_GET['action'] === 'noteProject3_3'):
        $note = 3;
        noteProject3($note);
    elseif($_GET['action'] === 'noteProject3_4'):
        $note = 4;
        noteProject3($note);
    elseif($_GET['action'] === 'noteProject3_5'):
        $note = 5;
        noteProject3($note);
    endif;

    if($_GET['action'] === 'noteProject4_1'):
        $note = 1;
        noteProject4($note);
    elseif($_GET['action'] === 'noteProject4_2'):
        $note = 2;
        noteProject4($note);
    elseif($_GET['action'] === 'noteProject4_3'):
        $note = 3;
        noteProject4($note);
    elseif($_GET['action'] === 'noteProject4_4'):
        $note = 4;
        noteProject4($note);
    elseif($_GET['action'] === 'noteProject4_5'):
        $note = 5;
        noteProject4($note);
    endif;
}

else{
    home();
}

?>