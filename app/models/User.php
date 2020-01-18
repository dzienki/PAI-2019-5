<?php

class User {
    private $db;

    public function __construct() {
        $this->db=new Database;
    }
    public function findUserByEmail($email){
        $this->db->query('SELECT * FROM user WHERE email = :email');
        $this->db->bind(':email',$email);

        $row=$this->db->single();

        if($this->db->rowCount()>0){
            return true;
        }
        else{
            return false;
        }

    }
    public function findUserByLogin($login){
        $this->db->query('SELECT * FROM user WHERE login = :login');
        $this->db->bind(':login',$login);

        $row=$this->db->single();

        if($this->db->rowCount()>0){
            return true;
        }
        else{
            return false;
        }
    }
    public function register($data){
        $this-> db-> query('INSERT INTO user (login, email, password) VALUES (:login, :email, :password)');
        $this->db->bind(':login',$data['login']);
        $this->db->bind(':email',$data['email']);
        $this->db->bind(':password',$data['password']);

        if($this->db->execute()){
            return true;
        }
        else{
            return false;
        }

    }
    public function login($email,$password){
        $this->db->query('SELECT * FROM user WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        $hashedPassword=$row->password;
        if(password_verify($password, $hashedPassword)){
            return $row;
        }
        else{
            return false;
        }

    }

    public function getEmail(): string 
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getRole(): array
    {
        return $this->role;
    }
}