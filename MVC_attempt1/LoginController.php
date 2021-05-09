<?php
include_once("../models/LoginModel.php");
class Controller
{
    public $model;
    public function __construct()
    {
        $this->model = new LoginModel();
    }
    public function invoke()
    {
        $reslt = $this->model->getlogin();    
        if ($reslt > 0) {
           include "../views/profile.php";//poate altceva
          
        } else {
           include "../views/login.php";//sa apara ca e gresit
        }
    }
}
