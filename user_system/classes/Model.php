<?php

require_once('Database.php');

class Model extends Database
{
    public function verifyUserExistance($email, $password)
    {
        $query = "SELECT * FROM user_system where email =? ";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([$email]);
        $user = $stmt->fetch();
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
    }
    public function addUser($first_name, $last_name, $password, $email)
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $query = "insert into user_system(first_name,last_name,password,email)
                 VALUES(?,?,?,?)";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([$first_name, $last_name, $hashedPassword, $email]);
    }

    public function emailExists($email)
    {
        $query = "select id from user_system where email=?";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([$email]);
        return $stmt->fetch();
    }
}
