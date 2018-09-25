<?php
class UsersManager{
    private $_bdd;

    public function __construct($bdd){
        $this->setBdd($bdd);
    }

    public function add(User $user){
        $req = $this->_bdd->prepare('INSERT INTO user(username,password,email,noteP1, noteP2, noteP3, noteP4) VALUES(:pseudo,:password,:email,:noteP1,:noteP2,:noteP3,:noteP4)');
    
        $req->bindValue(':pseudo', $user->username());
        $req->bindValue(':password', $user->password());
        $req->bindValue(':email', $user->email());
        $req->bindValue(':noteP1', $user->noteP1());
        $req->bindValue(':noteP2', $user->noteP2());
        $req->bindValue(':noteP3', $user->noteP3());
        $req->bindValue(':noteP4', $user->noteP4());

        $req->execute();

        $user->hydrate([
            'id' => $this->_bdd->lastInsertId(),
        ]);
    }

    public function count(){
        return $this->_bdd->query('SELECT COUNT(*) FROM user')->fetchColumn();
    }

    public function delete(User $user){
        $this->_bdd->exec('DELETE FROM user WHERE id = '.$user->id());
    }

    public function exists($info)
    {
        if (is_int($info)){
        return (bool) $this->_bdd->query('SELECT COUNT(*) FROM user WHERE id = '.$info)->fetchColumn();
        }
        
        // Sinon, c'est qu'on veut vérifier que le nom existe ou pas.
        
        $req = $this->_bdd->prepare('SELECT COUNT(*) FROM user WHERE username = :username');
        $req->execute([':username' => $info]);
        
        return (bool) $req->fetchColumn();
    }

    public function exists_email($info){
        if(is_int($info)){
            return (bool) $this->_bdd->query('SELECT COUNT(*) FROM user WHERE id ='.$info)->fetchColumn();
        }
        
        $req = $this->_bdd->prepare('SELECT COUNT(*) FROM user WHERE email = :email');
        $req->execute([':email' => $info]);

        return (bool) $req->fetchColumn();
    }

    public function get($info){
        if (is_int($info)){
            $req = $this->_bdd->query('SELECT id,username,password,email,noteP1,noteP2,noteP3,noteP4 FROM user WHERE id = '.$info);
            $donnees = $req->fetch(PDO::FETCH_ASSOC);
            
            return new User($donnees);
        }
        else{
            $req = $this->_bdd->prepare('SELECT id,username,password,email,noteP1,noteP2,noteP3,noteP4 FROM user WHERE username = :username');
            $req->execute([':username' => $info]);
            
            return new User($req->fetch(PDO::FETCH_ASSOC));
        }
    }

    public function getList($users){
        $users = [];
    
        $req = $this->_bdd->prepare('SELECT id,username,email,noteP1,noteP2,noteP3,noteP4 FROM user WHERE username <> :username ORDER BY username');
        $req->execute([':username' => $pseudo]);
        
        while ($donnees = $req->fetch(PDO::FETCH_ASSOC)){
        $users[] = new User($donnees);
        }
        
        return $users;
    }

    public function update(User $user){
        $req = $this->_bdd->prepare('UPDATE user SET username = :username, password = :password, email = :email WHERE id = :id');
    
        $req->bindValue(':username', $user->username(), PDO::PARAM_INT);
        $req->bindValue(':password', $user->password(), PDO::PARAM_INT);
        $req->bindValue(':email', $user->email(), PDO::PARAM_INT);

        $req->execute();
    }

    public function updateMail(User $user){
        $req = $this->_bdd->prepare('UPDATE user SET email = :email WHERE id ='. $user->id() .'');
    
        $req->bindValue(':email', $user->email(), PDO::PARAM_INT);
        
        $req->execute();
    }

    public function updateNoteP1(User $user){
        $req = $this->_bdd->prepare('UPDATE user SET noteP1 = :noteP1 WHERE id='.$user->id().'');

        $req->bindValue(':noteP1', $user->noteP1(), PDO::PARAM_INT);

        $req->execute();
    }

    public function updateNoteP2(User $user){
        $req = $this->_bdd->prepare('UPDATE user SET noteP2 = :noteP2 WHERE id='.$user->id().'');

        $req->bindValue(':noteP2', $user->noteP2(), PDO::PARAM_INT);

        $req->execute();
    }

    public function updateNoteP3(User $user){
        $req = $this->_bdd->prepare('UPDATE user SET noteP3 = :noteP3 WHERE id='.$user->id().'');

        $req->bindValue(':noteP3', $user->noteP3(), PDO::PARAM_INT);

        $req->execute();
    }

    public function updateNoteP4(User $user){
        $req = $this->_bdd->prepare('UPDATE user SET noteP4 = :noteP4 WHERE id='.$user->id().'');

        $req->bindValue(':noteP4', $user->noteP4(), PDO::PARAM_INT);

        $req->execute();
    }



    public function setBdd($bdd){
        $this->_bdd = $bdd;
    }
}?>