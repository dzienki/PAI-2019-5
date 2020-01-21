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
    public function loginByEmail($email,$password){
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
    public function loginByLogin($email,$password){
        $this->db->query('SELECT * FROM user WHERE login = :login');
        $this->db->bind(':login', $email);

        $row = $this->db->single();

        $hashedPassword=$row->password;
        if(password_verify($password, $hashedPassword)){
            return $row;
        }
        else{
            return false;
        }
    }
    public function findUserData(){
        $this->db->query('SELECT * FROM userdata WHERE user_id= :user_id');
        $this->db->bind(':user_id', $_SESSION['user_id']);

        $row = $this->db->single();

        if($this->db->rowCount()>0){
            return true;
        }
        else{
            return false;
        }

    }
    public function getUserData(){
        $this->db->query('SELECT * FROM userdata WHERE user_id= :user_id');
        $this->db->bind(':user_id', $_SESSION['user_id']);

        $row = $this->db->single();

        if($this->db->rowCount()>0){
            return $row;
        }
        else{
            return false;
        }

    }
    public function addUserData($data){
        $this->db->query('INSERT INTO userdata (`user_id`, `name`, `surname`, `adress`, `country`, `city`, `zipcode`) VALUES (:user_id, :name, :surname, :adress, :country, :city, :zipcode);');
        $this->db->bind(':user_id', $_SESSION['user_id']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':surname', $data['surname']);
        $this->db->bind(':adress', $data['adress']);
        $this->db->bind(':country', $data['country']);
        $this->db->bind(':city', $data['city']);
        $this->db->bind(':zipcode', $data['zipcode']);
        if($this->db->execute()){
            return true;
        }
        else{
            return false;
        }
    }
    public function setUserData($data){
        $this->db->query('UPDATE userdata SET name=:name, surname=:surname, adress=:adress, country=:country, city=:city, zipcode=:zipcode WHERE user_id=:user_id;');
        $this->db->bind(':user_id', $_SESSION['user_id']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':surname', $data['surname']);
        $this->db->bind(':adress', $data['adress']);
        $this->db->bind(':country', $data['country']);
        $this->db->bind(':city', $data['city']);
        $this->db->bind(':zipcode', $data['zipcode']);
        if($this->db->execute()){
            return true;
        }
        else {
            return false;
        }
    }
    public function getMessages(){
        $this->db->query('SELECT * FROM contact;');
        $rows = $this->db->resultSet();

        return $rows;
    }
}