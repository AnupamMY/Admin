<?php 
namespace App\Controllers;
use App\Controllers\BaseController;

class Users extends BaseController
{
    public function login()
    {
        return view('login');
    }

    public function validateUser()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        var_dump($email);
    }
}   
?>