<?php
class Insurances extends Controller
{
    public function __construct()
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }

        $this->postModel = $this->Model("Insurance");
    }
    public function index()
    {
        $insurances = $this->postModel->getInsurance();
        $iter = 0;
        $data = [];
        foreach ($insurances as $insurance) {
            $row = [
                'id' => $insurance->id,
                'user_id' => $insurance->user_id,
                'img' => $insurance->image,
                'license_plate' => $insurance->license_plate,
                'capacity'=> $insurance->capacity,
                'power'=> $insurance->power,
                'year_of_production'=> $insurance->year_of_production,
                'costOfInsurance'=> $insurance->costOfInsurance,
                'discount' => $insurance->discount,
                'validTo' => $insurance->validTo,
                'validFrom' => $insurance->validFrom
            ];
            $data[$iter]=$row;
            $iter++;
        }
        $this->view('insurances/index', $data);
    }
}
