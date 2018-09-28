<?php
class NotesManager{

    private $_bdd;

    public function __construct($bdd){
        $this->setBdd($bdd);
    }

    public function add(Note $note){
        $req = $this->_bdd->prepare('INSERT INTO notesprojects(name,note) VALUES(:name,:note)');
    
        $req->bindValue(':name', $note->name());
        $req->bindValue(':note', $note->note());

        $req->execute();

        $user->hydrate([
            'id' => $this->_bdd->lastInsertId(),
        ]);
    }

    public function count(){
        return $this->_bdd->query('SELECT COUNT(*) FROM notesprojects')->fetchColumn();
    }

    public function countUsers(){
        return $this->_bdd->query('SELECT COUNT(*) FROM user')->fetchColumn();
    }

    public function sumP1(){
        return $this->_bdd->query('SELECT SUM(notep1) AS noteP1 FROM user')->fetchColumn();
    }

    public function sumP2(){
        return $this->_bdd->query('SELECT SUM(notep2) AS noteP2 FROM user')->fetchColumn();
    }

    public function sumP3(){
        return $this->_bdd->query('SELECT SUM(notep3) AS noteP3 FROM user')->fetchColumn();
    }

    public function sumP4(){
        return $this->_bdd->query('SELECT SUM(notep4) AS noteP4 FROM user')->fetchColumn();
    }

    public function delete(Note $note){
        $this->_bdd->exec('DELETE FROM notesprojects WHERE id = '.$note->id());
    }

    public function exists($info)
    {
        if (is_int($info)){
        return (bool) $this->_bdd->query('SELECT COUNT(*) FROM notesprojects WHERE id = '.$info)->fetchColumn();
        }
        
        // Sinon, c'est qu'on veut vérifier que le nom existe ou pas.
        
        $req = $this->_bdd->prepare('SELECT COUNT(*) FROM notesprojects WHERE name = :name');
        $req->execute([':name' => $info]);
        
        return (bool) $req->fetchColumn();
    }

    public function get($info){
        if (is_int($info)){
            $req = $this->_bdd->query('SELECT id,name,note FROM notesprojects WHERE id ='.$info);
            $donnees = $req->fetch(PDO::FETCH_ASSOC);
            
            return new Note($donnees);
        }
        else{
            $req = $this->_bdd->prepare('SELECT id,name,note FROM notesprojects WHERE name = :name');
            $req->execute([':name' => $info]);
            
            return new Note($req->fetch(PDO::FETCH_ASSOC));
        }
    }

    public function getList($users){
        $notes = [];
    
        $req = $this->_bdd->prepare('SELECT id,name,note FROM notesprojects WHERE name <> :name ORDER BY name');
        $req->execute([':name' => $pseudo]);
        
        while ($donnees = $req->fetch(PDO::FETCH_ASSOC)){
        $notes[] = new Note($donnees);
        }
        
        return $notes;
    }

    public function update(Note $note){
        $req = $this->_bdd->prepare('UPDATE notesprojects SET name = :name, note = :note WHERE id = :id');
    
        $req->bindValue(':name', $note->name());
        $req->bindValue(':note', $note->note(), PDO::PARAM_INT);
        $req->bindValue(':id', $note->id(), PDO::PARAM_INT);

        $req->execute();
    }

    public function setBdd($bdd){
        $this->_bdd = $bdd;
    }

}?>
