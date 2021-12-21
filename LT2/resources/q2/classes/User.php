<!--
    Name: Lim Yin Yao
    Email: yinyao.lim.2020
-->
<?php

    class User {

        private $username;
        private $password;
        private $fullname;
        private $role;

        function __construct($username, $password, $fullname, $role) {
            $this->username = $username;
            $this->password = $password;
            $this->fullname = $fullname;
            $this->role = $role;
        }

        public function getUsername() {
            return $this->username;
        }

        public function getPassword() {
            return $this->password;
        }

        public function getFullname() {
            return $this->fullname;
        }

        public function getRole() {
            return $this->role;
        }

    }

?>