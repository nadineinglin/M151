<?php
    class DB
    {
        protected static $instance;
        protected $isTransactionRunning =false;
        
        protected $pdo;
        
        private function __construct()
        {
            $servername = "localhost";
            $username = "vmadmin";
            $password = "sml12345";
            $database = "northwind";
    
            $this->pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        
        public static function get() {
            if (self::$instance === null) {
                self::$instance = new self();
            }
            
            return self::$instance;
        }
        
        $db = DB::get();
        
        public startTransaction(){
            if($this->$isTransactionRunning){
                    throw new Exception("Multiple Transactions are not supported");
            }
            else{
                $this->pdo ->exec('START TRANSACTION');
                $this->$isTransactionRunning =true;
            }
            
            
        }
        
        public commitTransaction(){
            $this->pdo ->exec('COMMIT');
            $this->$isTransactionRunning=false;
        }

        public rollbackTransaction(){
            $this->pdo ->exec('ROLLBACK');
            $this->$isTransactionRunning=false;
        }
        public function query($sql,$params){
            $statement =$this-> prepare($sql):
            $statement= execute($params)
        }
        public function select($sql,$params){
            $statement = $this ->pdo->prepare($sql);
            $statement ->execute($params);
            return $statement->fetchAll();
        }
        
    }
?>
