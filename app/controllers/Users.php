<?php
    class Users extends Controller{
        public function __construct(){
                $this->userModel = $this->Model('User');
        }

        public function login(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $data=[
                    'email'=> trim($_POST['email']),
                    'password'=>trim($_POST['password']),
                    'emailErr'=> '',
                    'passwordErr'=>'',
                ];
                if(empty($data['email'])){
                    $data['emailErr']= 'Please enter email';
                }
                if(empty($data['password'])){
                    $data['passwordErr']= 'Please enter password';
                }
                if($this->userModel->findUserByEmail($data['email'])||$this->userModel->findUserByLogin($data['email'])){
                    //znaleziono
                }
                else{
                    $data['emailErr']= 'Wrong login or email';
                }
                if(empty($data['emailErr']) && empty($data['passwordErr'])){
                    $loggedInUser = $this->userModel->login($data['email'],$data['password']);

                    if($loggedInUser){
                        $this->createUserSession($loggedInUser);
                    }
                    else{
                        $data['passwordErr']='Wrong Password';
                        $this->view('users/login', $data);
                    }
                }
                else{
                $this->view('users/login', $data);
                }
            }
            else{
                $data=[
                    'email'=> '',
                    'password'=>'',
                    'emailErr'=> '',
                    'passwordErr'=>'',
                ];

                $this->view('users/login', $data);
            }
        }
        public function register(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data=[
                    'login' => trim($_POST['login']),
                    'email'=> trim($_POST['email']),
                    'password'=>trim($_POST['password']),
                    'confirmPassword'=>trim($_POST['confirmPassword']),
                    'acceptTerms'=>trim($_POST['acceptTerms']),
                    'loginErr' => '',
                    'emailErr'=> '',
                    'passwordErr'=>'',
                    'confirmPasswordErr'=>'',
                    'acceptTermsErr'=>'',
                ];
                if(empty($data['email'])){
                    $data['emailErr']= 'Please enter email';
                }
                else{
                    if($this->userModel->findUserByEmail($data['email'])){
                        $data['emailErr']= 'Email is allredy taken';
                    }
                }
                if(empty($data['login'])){
                    $data['loginErr']= 'Please enter login';
                }
                else{
                    if($this->userModel->findUserByLogin($data['login'])){
                        $data['loginErr']= 'Login is allredy taken';
                    }
                }
                if(empty($data['password'])){
                    $data['passwordErr']= 'Please enter password';
                }
                elseif(strlen($data['password'])<6){
                    $data['passwordErr']= 'Password must be at least 6 characters';
                }
                if(empty($data['confirmPassword'])){
                    $data['confirmPasswordErr']= 'Confirm password';
                }
                elseif($data['password']!=$data['confirmPassword']){
                    $data['confirmPasswordErr']= 'Passwords are not the same';
                }
                if($data['acceptTerms']!='on'){
                    $data['acceptTermsErr']= 'You have to accept Terms';
                }
                if(empty($data['emailErr']) && empty($data['loginErr']) 
                && empty($data['passwordErr']) && empty($data['confirmPasswordErr'])
                && empty($data['acceptTermsErr'])){

                    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                    if($this->userModel->register($data)){
                        flash('register_success', 'You are registered and can log in');
                        redirect('users/login');
                    }
                    else{
                        die('STH WENT WRONG');
                    }
                }
                else{
                $this->view('users/register', $data);
                }
            }
            else{
                $data=[
                    'login' => '',
                    'email'=> '',
                    'password'=>'',
                    'confirmPassword'=>'',
                    'acceptTerms'=>'',
                    'loginErr' => '',
                    'emailErr'=> '',
                    'passwordErr'=>'',
                    'confirmPasswordErr'=>'',
                    'acceptTermsErr'=>'',
                ];

                $this->view('users/register', $data);
            }
        }
        public function logout(){
            unset($_SESSION['user_id']);
            unset($_SESSION['user_email']);
            unset($_SESSION['user_login']);
            session_destroy();
            redirect('users/login');
        }
        public function profile(){
            $data=[];
            $this->view('users/profile', $data);
        }
        public function createUserSession($user){
            $_SESSION['user_id']=$user->id;
            $_SESSION['user_email']=$user->email;
            $_SESSION['user_login']=$user->login;
            redirect('pages/index');
        }
    }