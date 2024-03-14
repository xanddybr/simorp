
<?php

Class ConectDataBase {

        public $link;
        public $dsn;
        public $username;
        public $password;
        
               
        private function connect()
        {
            $this->link = new PDO($this->dsn, $this->username, $this->password);
        }
        
        public function __sleep ()
        {
            return array('dsn', 'username', 'password');
        }


        public function set_dsn ($dsn) {
            $this->dns = $dns;
        }


        public function set_username ($username) {
            $this->username = $username;
        }
        

        public function set_password ($password) {
            $this->password = $password;
        }



        public function __wakeup ()
        {
            $this->connect();
        }

}

?>