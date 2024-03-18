
<?php

Class ConectDataBase {

        public $link;
        public $dsn;
     

        function __construct() {

        }
        
        public function __sleep (){
            return array('dsn', 'usernameDb', 'passwordDb');
        }

        public function __wakeup (){
            $this->connect();
        }

               
        private function connect(){
            $this->link = new PDO($this->dsn, $this->username, $this->password);
        }
            

        public function set_dsn ($dsn){
            $this->dns = $dns;
        }
      

        
}

?>