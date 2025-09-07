<?php 

class Database{
    public $connection;

    public function __construct(){
        $dsn = "mysql:host=localhost;port=3306;dbname=anime_tracker;charset=utf8mb4;user=root";

        $this->connection = new PDO($dsn);
    }

    public function checkIfExist(string $tableName, string $username): bool{

        $sql = "SELECT COUNT(*) FROM {$tableName} WHERE username = :username";

        $stmt = $this->connection->prepare($sql);

        $stmt->execute([
            ":username" => $username,
        ]);

        $count = $stmt->fetchColumn();

        return $count > 0;

    }

}