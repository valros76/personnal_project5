<?php
class User{

    protected $_id;
    protected $_username;
    protected $_password;
    protected $_email;
    protected $_noteP1;
    protected $_noteP2;
    protected $_noteP3;
    protected $_noteP4;

    public function __construct(array $donnees){
        $this->hydrate($donnees);
    }

    public function hydrate(array $donnees){
        foreach($donnees as $key => $value){
            $method = 'set'.ucfirst($key);
            if(method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }

    public function id(){
        return $this->_id;
    }

    public function username(){
        return $this->_username;
    }

    public function password(){
        return $this->_password;
    }

    public function email(){
        return $this->_email;
    }

    public function noteP1(){
        return $this->_noteP1;
    }

    public function noteP2(){
        return $this->_noteP2;
    }

    public function noteP3(){
        return $this->_noteP3;
    }

    public function noteP4(){
        return $this->_noteP4;
    }

    public function setId($id){
        $id = (int) $id;
        if(is_int($id)){
            $this->_id = $id;
        }
    }

    public function setUsername($username){
        if(is_string($username)){
            $this->_username = $username;
        }
    }

    public function setPassword($password){
        $this->_password = $password;
    }

    public function setEmail($email){
        $this->_email = $email;
    }

    function setNoteP1($noteP1){
        $noteP1 = (int) $noteP1;
        if(is_int($noteP1)){
            $this->_noteP1 = $noteP1;
        }
    }

    function setNoteP2($noteP2){
        $noteP2 = (int) $noteP2;
        if(is_int($noteP2)){
            $this->_noteP2 = $noteP2;
        }
    }

    function setNoteP3($noteP3){
        $noteP3 = (int) $noteP3;
        if(is_int($noteP3)){
            $this->_noteP3 = $noteP3;
        }
    }

    function setNoteP4($noteP4){
        $noteP4 = (int) $noteP4;
        if(is_int($noteP4)){
            $this->_noteP4 = $noteP4;
        }
    }

    public function nomValide(){
        return !empty($this->_pseudo);
    }

    public function emailValide(){
        return !empty($this->_email);
    }
}?>