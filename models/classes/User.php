<?php
class User{

    protected $_id;
    protected $_username;
    protected $_password;
    protected $_email;

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

    public function nomValide(){
        return !empty($this->_pseudo);
    }

    public function emailValide(){
        return !empty($this->_email);
    }
}?>