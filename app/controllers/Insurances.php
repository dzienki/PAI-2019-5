<?php
    class Insurances extends Controller{
        public function __construct(){
            if(!isLoggedIn()){
                redirect('users/login');
            }

            $this->postModel= $this->Model("Insurance");
        }
        public function index(){
            $insurances=$this->postModel->getInsurance();
            $data= [
                'insurances'=>$insurances
            ];

            $this->view('insurances/index', $data);
        }
    }