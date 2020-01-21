<?php
    class Pages extends Controller{
        public function __construct(){
            $this->userModel = $this->Model('Contact');
        }

        public function index(){
            $data =['title' => 'Welcome'
                    ];
            $this->view('pages/index', $data);

         
        }

        public function about(){
            $this->view('pages/about');
        }
        public function contactus(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $data=[
                    'email'=> trim($_POST['email']),
                    'name'=>trim($_POST['name']),
                    'country'=>trim($_POST['country']),
                    'subject'=>trim($_POST['subject']),
                    'emailErr'=> '',
                    'nameErr'=> '',
                    'countryErr'=> '',
                    'subjectErr'=>'',
                    'succesfull'=>''
                ];
                if(empty($data['email'])){
                    $data['emailErr']='Please insert email';
                }
                if(empty($data['name'])){
                    $data['nameErr']='Please insert name';
                }
                if(empty($data['country'])){
                    $data['countryErr']='Please insert country';
                }
                if(empty($data['subject'])){
                    $data['subjectErr']='Please type your message';
                }
                if(empty($data['emailErr']) && empty($data['nameErr'])
                && empty($data['countryErr']) && empty($data['subjectErr'])){
                    if($this->userModel->sendMessage($data)){
                        $data['succesfull']='Message succesfull send';
                        $this->view('pages/contactus', $data);
                    }
                    else{
                        $data['succesfull']='Error with sending message';
                        $this->view('pages/contactus', $data);
                    }
                }
                $this->view('pages/contactus', $data);
        }
        else{
            $data=[
                'email'=> '',
                    'name'=>'',
                    'country'=>'',
                    'subject'=>'',
                    'emailErr'=> '',
                    'nameErr'=> '',
                    'countryErr'=> '',
                    'subjectErr'=>'',
                    'succesfull'=>''
            ];

            $this->view('pages/contactus', $data);
        }
    }
    }