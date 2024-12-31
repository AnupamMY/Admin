<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Users;
use App\Models\Products;

class Chat extends Controller
{   
    
    public function getChat()
    {
        //return view('users/chat');
        return view('users/chat');
    }
}
?>