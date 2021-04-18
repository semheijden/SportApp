<?php
  class Database {
    protected static $instance = null;
    private $connection = null;

    protected function __construct() {
      self::$instance = $this;
      $this->connect();
    }

    public function __destruct() {
      $this->disconnect();
      if (isset(self::$instance)) {
        self::$instance = null;
      }
    }

    /**
     * Execute a raw query (return a Database_Result object)
     * @param  string
     * @return object
     */
    public function query($sql) {
      if(!$this->connect()) return;
      return $this->connection->query($sql);
    }

    /**
     * Prepare a statement (return a Database_Statement object)
     * @param  string
     * @return object
     */
    public function prepare($sql) {
      if(!$this->connect()) return;
      return $this->connection->prepare($sql);
    }

    /**
     * Execute a query (return a Database_Result object)
     * @param  string
     * @return object
     */
    public function execute($sql) {
      if(!$this->connect()) return;
      return $this->connection->prpeare($sql)->execute();
    }

    public function connect() {
      $this->connection = new mysqli("localhost:3306","root","","summasport");
      if ($this->connection->connect_error) {
        return false;
      }
      return true;
    }

    private function disconnect() {
      if(!$this->connection) return false;
      $this->connection->close();
    }

    /**
     * Instantiate a database instance object
     * @return Database
     */
    public static function getInstance() {
      if (!self::$instance) new Database();
      return self::$instance;
    }
    
    /**
     * Prevent cloning of the object (Singleton)
     */
    final private function __clone() {}
  }

?>