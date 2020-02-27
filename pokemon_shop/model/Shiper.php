<?php
    namespace Model;
    class Shiper
    {
        public $id_shiper;
        public $name;
        public $birthday;
        public $phone;
        public $email;
        public $timework;
        
        public function __construct($name,$birthday,$phone,$email,$timework)
        {
            $this->name = $name;
            $this->birthday = $birthday;
            $this->phone = $phone;
            $this->email = $email;
            $this->timework = $timework;
        }
    }
?>