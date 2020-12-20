<?php 
    class Customer{
        private $id;
        private $name;
        private $phone;
        private $address;
        private $cmnd;
        private $birthdate;

        //Constructor
        public function __construct($id, $name, $phone, $address, $cmnd, $birthdate)
        {
            $this->id = $id;
            $this->name = $name;
            $this->phone = $phone;
            $this->address = $address;
            $this->cmnd = $cmnd;
            $this->birthdate = $birthdate;
        }
        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }
    }
?>