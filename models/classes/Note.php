<?php
class Note{

        protected $_id;
        protected $_name;
        protected $_note;

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

        public function name(){
            return $this->_name;
        }

        public function note(){
            return $this->_note;
        }

        public function setId($id){
            $id = (int) $id;
            if(is_int($id)){
                $this->_id = $id;
            }
        }

        public function setName($name){
            $this->_name = $name;
        }

        public function setNote($note){
            $note = (int) $note;
            if(is_int($note)){
                $this->_note = $note;
            }
        }
}?>