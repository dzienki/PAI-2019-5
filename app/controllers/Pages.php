<?php
class Pages extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->Model('Contact');
    }

    public function index()
    {
        $this->view('pages/index');
    }

    public function about()
    {
        $this->view('pages/about');
    }
    public function contactus()
    {
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            $data = [
                'email' => '',
                'name' => '',
                'country' => '',
                'subject' => '',
                'emailErr' => '',
                'nameErr' => '',
                'countryErr' => '',
                'subjectErr' => '',
                'succesfull' => ''
            ];

            return $this->view('pages/contactus', $data);
        }
        header('Content-Type: application/json');
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $data = [
            'email' => trim($_POST['email']),
            'name' => trim($_POST['name']),
            'country' => trim($_POST['country']),
            'subject' => trim($_POST['subject'])
        ];

        if ($this->userModel->sendMessage($data)) {
            print json_encode(array('message' => 'Email successfully sent!', 'code' => 1));
            exit();
        }
        print json_encode(array('message' => 'Email was not successfully sent!', 'code' => 0));
            exit();
    }
}
