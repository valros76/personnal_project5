<?php

require('models/database.php');

    function home(){
        require('views/homeView.php');
    }

    function inscription(){
        require('views/pages/inscription.php');
    }

    function newInscription(){
        if($_POST['username'] != null && $_POST['password'] != null && $_POST['confirmPassword'] && $_POST['mail'] != null){
                $pass_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
                $user = new User([
                    'username' => $_POST['username'],
                    'password' => $pass_hash,
                    'email' => $_POST['mail']
                ]);
                
                $bdd = dbConnect();
        
                $manager = new UsersManager($bdd);
        
                if(!$user->nomValide()){
                    echo 'Le nom choisi est invalide.';
                    unset($user);
                }
                elseif($manager->exists($user->username())){
                    echo 'Ce nom est déjà pris.';
                    unset($user);
                }
                elseif(!$user->emailValide()){
                    echo 'Cet email est invalide.';
                    unset($user);
                }
                elseif($manager->exists($user->email())){
                    echo 'Cet email est déjà utilisé.';
                    unset($user);
                }
                else{
                    $manager->add($user);
                }
                }
                else{
                    echo 'Un des champs est mal rempli / les mots de passes ne correspondent pas.';
                }
            
            
        header('Location:'.connexion());
    }

    function connexion(){
        require('views/pages/connexion.php');
    }

    function connect(){
        $pseudo = $_POST['username'];
        $bdd = dbConnect();
        $req = $bdd->prepare('SELECT id,password FROM user WHERE username = :username');
        $req->execute(array(
            'username' => $pseudo));
        $resultat = $req->fetch(PDO::FETCH_ASSOC);
        $req->closeCursor();

        $isPasswordCorrect = password_verify($_POST['password'], $resultat['password']);

        if(!$resultat){
            echo 'Mauvais identifiant ou mot de passe.';
        }
        else{
            if($isPasswordCorrect){
                $_SESSION['id'] = $resultat['id'];
                $_SESSION['username'] = $pseudo;
                echo 'Vous êtes connecté !';
            }
            else{
                echo 'Mauvais identifiant ou mot de passe.';
            }
        }

        header('Location:'.home());
    }

    function disconnect(){
        $_SESSION = array();
        session_destroy();

        echo 'Vous êtes déconnectés !';

        header('Location:'.home());
    }

    function portfolio(){
        require('views/pages/portfolio.php');
    }

?>