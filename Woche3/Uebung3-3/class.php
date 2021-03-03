<?php
class DB
{
    protected static $instance;
    
    protected $pdo;
    private $hasRunningTransaction;
    
    private function __construct()
    {
        $hasRunningTransaction = false;

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "northwind";

        $this->pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function __destruct() {
        if ($this->hasRunningTransaction) {
            $this->rollbackTransaction();
        }
    }
    
    public static function get() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        
        return self::$instance;
    }

    public function startTransaction() {
        if (!$this->hasRunningTransaction) {
            $this->pdo->exec("START TRANSACTION");
            $hasRunningTransaction = true;
        } else {
            throw new Exception("Multiple Transactions are not supported");
        }

    }
    
    public function commitTransaction() {
        $this->pdo->exec("COMMIT");
        $hasRunningTransaction = false;
    }

    public function rollbackTransaction() {
        if ($this->hasRunningTransaction) {
            $this->pdo->exec("ROLLBACK");
            $hasRunningTransaction = false;
        }
    }
    
    public function query($sql, $params) {
        $statement = $this->pdo->prepare($sql);
        $statement->execute($params);
    }
    
    public function select($sql, $params) {

        $statement = $this->pdo->prepare($sql);
        $statement->execute($params);
        
        return $statement->fetchAll();
    }
}
?>