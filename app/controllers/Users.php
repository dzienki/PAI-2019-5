<?php
    class Users extends Controller{
        public function __construct(){
                $this->userModel = $this->Model('User');
        }

        public function login(){
            if($_SERVER['REQUEST_METHOD']!='POST'){
                $data=[
                    'email'=> '',
                    'password'=>'',
                    'emailErr'=> '',
                    'passwordErr'=>'',
                ];

                return $this->view('users/login', $data);
            }

                $login='';
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
                if($this->userModel->findUserByEmail($data['email'])){
                    $login='email';
                }
                elseif($this->userModel->findUserByLogin($data['email'])){
                    $login='login';
                }
                else{
                    $data['emailErr']= 'Wrong login or email';
                }
                if(empty($data['emailErr']) && empty($data['passwordErr'])){
                    if($login=='email'){
                        $loggedInUser = $this->userModel->loginByEmail($data['email'],$data['password']);
                    }
                    elseif($login=='login'){
                        $loggedInUser = $this->userModel->loginByLogin($data['email'],$data['password']);
                    }
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
        public function register(){
            if(isset($_SESSION['user_id'])){
                redirect('pages/index');
            }
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data=[
                    'login' => trim($_POST['login']),
                    'email'=> trim($_POST['email']),
                    'password'=>trim($_POST['password']),
                    'confirmPassword'=>trim($_POST['confirmPassword']),
                    'acceptTerms'=>'',
                    'loginErr' => '',
                    'emailErr'=> '',
                    'passwordErr'=>'',
                    'confirmPasswordErr'=>'',
                    'acceptTermsErr'=>'',
                ];
                if(isset($_POST['acceptTerms'])){
                    $data['acceptTerms']=trim($_POST['acceptTerms']);
                }
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
                if($data['acceptTerms']!='true'){
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
            unset($_SESSION['user_role']);
            session_destroy();
            redirect('users/login');
        }
        public function profile(){
            if(!isset($_SESSION['user_id'])){
                redirect('pages/index');
            }
            if($_SERVER['REQUEST_METHOD']=='POST'){

                if($this->userModel->findUserData()){
                    $user=$this->userModel->getUserData();
                    if(trim($_POST['name'])!=$user->name || trim($_POST['surname'])!=$user->surname||
                    trim($_POST['adress'])!=$user->adress || trim($_POST['country'])!=$user->country||
                    trim($_POST['city'])!=$user->city || trim($_POST['zipcode'])!=$user->zipcode){
                        $data=[
                            'name' => trim($_POST['name']),
                            'surname'=> trim($_POST['surname']),
                            'adress'=> trim($_POST['adress']),
                            'country'=> trim($_POST['country']),
                            'city'=> trim($_POST['city']),
                            'zipcode'=> trim($_POST['zipcode']),
                            'nameErr'=> '',
                            'surnameErr'=>'',
                            'adressErr'=>'',
                            'countryErr'=>'',
                            'cityErr'=>'',
                            'zipcodeErr'=>'',
                            'countryErr'=>'',
                            'button'=>'UPDATE'
                        ];
                        if($this->userModel->setUserData($data))
                        {
                            flash('dataAdd', 'You sucesfull update your data');
                        }
                        else{
                            flash('dataAdd', 'There is error with updating your data, contact us!');
                        }
                        $this->view('users/profile', $data);
                    }
                    else{
                        //te same dane
                        $data=[
                            'name' => $user->name,
                            'surname'=> $user->surname,
                            'adress'=> $user->adress,
                            'country'=> $user->country,
                            'city'=> $user->city,
                            'zipcode'=> $user->zipcode,
                            'nameErr'=> '',
                            'surnameErr'=>'',
                            'adressErr'=>'',
                            'countryErr'=>'',
                            'cityErr'=>'',
                            'zipcodeErr'=>'',
                            'countryErr'=>'',
                            'button'=>'UPDATE'
                        ];
                        flash('dataAdd', 'You dont change anything');
                        $this->view('users/profile', $data);
                    }
                }
                else {
                    //there is no user data at databese
                    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                    $data=[
                        'name' => trim($_POST['name']),
                        'surname'=> trim($_POST['surname']),
                        'adress'=> trim($_POST['adress']),
                        'country'=> trim($_POST['country']),
                        'city'=> trim($_POST['city']),
                        'zipcode'=> trim($_POST['zipcode']),
                        'nameErr'=> '',
                        'surnameErr'=>'',
                        'adressErr'=>'',
                        'countryErr'=>'',
                        'cityErr'=>'',
                        'zipcodeErr'=>'',
                        'countryErr'=>'',
                        'button'=>'SAVE'
                    ];
                    if(empty($data['name'])){
                        $data['nameErr']= 'Please enter name';
                    }
                    if(empty($data['surname'])){
                        $data['surnameErr']= 'Please enter surname';
                    }
                    if(empty($data['adress'])){
                        $data['adressErr']= 'Please enter adress';
                    }
                    if(empty($data['country'])){
                        $data['countryErr']= 'Please enter country';
                    }
                    if(empty($data['city'])){
                        $data['cityErr']= 'Please enter city';
                    }
                    if(empty($data['zipcode'])){
                        $data['zipcodeErr']= 'Please enter zipcode';
                    }
                    elseif(strlen($data['zipcode']>6)){
                        $data['zipcodeErr']= 'Your zipcode is too long!';
                    }
                    if(empty($data['nameErr'])&&empty($data['surnameErr'])&&empty($data['adressErr'])&&
                    empty($data['countryErr'])&&empty($data['cityErr'])&&empty($data['zipcodeErr'])){
                        if($this->userModel->addUserData($data)){
                            flash('dataAdd', 'Your data was added.');
                            redirect('users/profile');
                        }
                        else {
                            flash('dataAdd', 'Error with data base! Please contact us!');
                            redirect('users/profile');
                        }
                    }
                    $this->view('users/profile', $data);
                }
            }
            else{
                //load page
                if($this->userModel->findUserData()){
                    //load page and have added data elier
                    $user=$this->userModel->getUserData();
                    $data=[
                        'name' => $user->name,
                        'surname'=> $user->surname,
                        'adress'=> $user->adress,
                        'country'=> $user->country,
                        'city'=> $user->city,
                        'zipcode'=> $user->zipcode,
                        'nameErr'=> '',
                        'surnameErr'=>'',
                        'adressErr'=>'',
                        'countryErr'=>'',
                        'cityErr'=>'',
                        'zipcodeErr'=>'',
                        'countryErr'=>'',
                        'button'=>'UPDATE'
                    ];
                    $this->view('users/profile', $data);
                }
                else {
                    //load page and dont added data erlier
                    flash('dataAdd', 'You are not in database!');
                    $data=[
                        'name' => '',
                        'surname'=> '',
                        'adress'=> '',
                        'country'=> '',
                        'city'=> '',
                        'zipcode'=> '',
                        'nameErr'=> '',
                        'surnameErr'=>'',
                        'adressErr'=>'',
                        'countryErr'=>'',
                        'cityErr'=>'',
                        'zipcodeErr'=>'',
                        'countryErr'=>'',
                        'button'=>'SAVE'
                    ];
                    $this->view('users/profile', $data);
                }
            }

        }
        public function admin(){
            if($_SESSION['user_role']=='admin'){
                $data=[];
                $messages=$this->userModel->getMessages();
                $id=0;
                foreach($messages as $message){
                    $onepart=['name'=>$message->name,
                            'country'=>$message->country,
                            'email'=>$message->email,
                            'subject'=>$message->subject
                    ];
                    $data[$id]=$onepart;
                    $id++;
                }
                $this->view('users/admin', $data);
            }
            else{
                flash('data','You have no admin permission!');
                redirect('pages/index');
            }
        }
        public function createUserSession($user){
            $_SESSION['user_id']=$user->id;
            $_SESSION['user_email']=$user->email;
            $_SESSION['user_login']=$user->login;
            $_SESSION['user_role']=$user->role;
            redirect('pages/index');
        }
    }