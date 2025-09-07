<?php

require 'Database.php';

class Users extends Database{

    public $id;
    public $username;
    public $password;

    public function __construct(){
        parent::__construct();
    }

    public function login(array $data){
        $sql = "SELECT * FROM users WHERE username = :username";

        $stmt = $this->connection->prepare($sql);

        $stmt->execute([
            ":username" => $data['username'],
        ]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user){
            if(password_verify($data['password'], $user['password'])){
                $_SESSION['user_login'] = [
                "id" => $user['id'],
                "username" => $user['username'],
                ];
            }else{
                return ["error" => "Credentials do not match"];
            }
        }else{
            return ["error" => "Credentials do not match"];
        }

        

        return ['success' => "Successfully sign in!"];
    }

    public function register(array $data){
        
        if($this->checkIfExist("users", $data['username'])){
            return ["error" => "This username is taken."];
        }
        
        if($data['password'] === $data['passwordConfirmation']){
            $hashedPassword = password_hash($data['password'], PASSWORD_DEFAULT);
        }else{
            return ["error" => "Password do not match."];
        }
        //query
        $stmt = $this->connection->prepare("INSERT INTO users (username, password) VALUES(:username, :password)");
        //execute
        $stmt->execute([
            ":username" => $data['username'],
            ":password" => $hashedPassword,
        ]);

        $lastId = $this->connection->lastInsertId();

        $stmt = $this->connection->prepare("SELECT id, username FROM users WHERE id = :id");

        $stmt->execute([
            ":id" => $lastId,
        ]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        $_SESSION['user_login'] = [
            "id" => $user['id'],
            "username" => $user['username'],
        ];

        return ["success" => "Successfully register!"];
        
    }
}