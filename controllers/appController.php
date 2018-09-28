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
            
            
        header('Location:?action=connexion');
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
        portfolio();
    }

    function disconnect(){
        $_SESSION = array();
        session_destroy();
        echo 'Vous êtes déconnectés !';
        home();
    }

    function portfolio(){
        if(isset($_SESSION['username'])){
            require('views/pages/portfolio.php');
        }
        else{
            echo 'Veuillez vous connecter pour avoir accès au contenu.';
            connexion();
        }
    }

    function portfolioP1(){
        if(isset($_SESSION['username'])){
            $ancre = "p1";
            header("Location:?action=portfolio#".$ancre);
        }
        else{
            echo 'Veuillez vous connecter pour avoir accès au contenu.';
            connexion();
        }
    }

    function portfolioP2(){
        if(isset($_SESSION['username'])){
            $ancre = "p2";
            header("Location:?action=portfolio#".$ancre);
        }
        else{
            echo 'Veuillez vous connecter pour avoir accès au contenu.';
            connexion();
        }
    }

    function portfolioP3(){
        if(isset($_SESSION['username'])){
            $ancre = "p3";
            header("Location:?action=portfolio#".$ancre);
        }
        else{
            echo 'Veuillez vous connecter pour avoir accès au contenu.';
            connexion();
        }
    }

    function portfolioP4(){
        if(isset($_SESSION['username'])){
            $ancre = "p4";
            header("Location:?action=portfolio#".$ancre);
        }
        else{
            echo 'Veuillez vous connecter pour avoir accès au contenu.';
            connexion();
        }
    }

    function noteProject1($note){
    
        $idProject = 1;
        $bdd = dbConnect();
        $notesManager = new NotesManager($bdd);
        $noteTotale = $notesManager->sumP1();
        $nbUsers = $notesManager->countUsers();
        $roundNote = $noteTotale / $nbUsers;
        $noteP1 = new Note([
            'id' => $idProject,
            'name' => 'projet1',
            'note' => $noteTotale
        ]);
        $notesManager->update($noteP1);
        $manager = new UsersManager($bdd);
        $user = $manager->get($_SESSION['username']);
        $user->setNoteP1($note);
        $manager->updateNoteP1($user);
        portfolioP1();
    }

    function getNoteP1(){
        $bdd = dbConnect();
        $notesManager = new NotesManager($bdd);
        $noteTotale = $notesManager->sumP1();
        $nbUsers = $notesManager->countUsers();
        $roundNote = floor($noteTotale / $nbUsers);
        return $roundNote;
    }

    function noteProject2($note){
        $noteP2 = $note;
        $idProject = 2;
        $bdd = dbConnect();
        $manager = new UsersManager($bdd);
        $user = $manager->get($_SESSION['username']);
        $user->setNoteP2($noteP2);
        $manager->updateNoteP2($user);
        portfolioP2();
    }

    function getNoteP2(){
        $bdd = dbConnect();
        $notesManager = new NotesManager($bdd);
        $noteTotale = $notesManager->sumP2();
        $nbUsers = $notesManager->countUsers();
        $roundNote = floor($noteTotale / $nbUsers);
        return $roundNote;
    }

    function noteProject3($note){
        $noteP3 = $note;
        $idProject = 3;
        $bdd = dbConnect();
        $manager = new UsersManager($bdd);
        $user = $manager->get($_SESSION['username']);
        $user->setNoteP3($noteP3);
        $manager->updateNoteP3($user);
        portfolioP3();
    }

    function getNoteP3(){
        $bdd = dbConnect();
        $notesManager = new NotesManager($bdd);
        $noteTotale = $notesManager->sumP3();
        $nbUsers = $notesManager->countUsers();
        $roundNote = floor($noteTotale / $nbUsers);
        return $roundNote;
    }

    function noteProject4($note){
        $noteP4 = $note;
        $idProject = 4;
        $bdd = dbConnect();
        $manager = new UsersManager($bdd);
        $user = $manager->get($_SESSION['username']);
        $user->setNoteP4($noteP4);
        $manager->updateNoteP4($user);
        portfolioP4();
    }

    function getNoteP4(){
        $bdd = dbConnect();
        $notesManager = new NotesManager($bdd);
        $noteTotale = $notesManager->sumP4();
        $nbUsers = $notesManager->countUsers();
        $roundNote = floor($noteTotale / $nbUsers);
        return $roundNote;
    }

    

    function bonus(){
        if(isset($_SESSION['username'])){
            require('views/pages/bonus/bonus.php');
        }
        else{
            echo 'Veuillez vous connecter pour avoir accès au contenu.';
            connexion();
        }
    }

    function shifumi(){
        if(isset($_SESSION['username'])){
            require('views/pages/bonus/shifumi.php');
        }
        else{
            echo 'Veuillez vous connecter pour avoir accès au contenu.';
            connexion();
        }
    }

    function contact(){
        require('views/pages/contact.php');
    }

    function contact_me(){
        if(isset($_SESSION['username'])){
            require('views/pages/giveContact.php');
        }
        else{
            echo 'Veuillez vous connecter pour avoir accès au contenu.';
            contact();
        }
    }
?>