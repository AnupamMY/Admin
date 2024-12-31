<?php

namespace App\Controllers;
use App\Models\Users;   
use App\Models\Level;
use App\Models\Camp;
class Home extends BaseController
{   
    public function __construct(){
        $this->model = new Users();
        $this->level = new Level();
        $this->camp = new Camp();
    }
    public function index(): string
    {
        // return view('welcome_message');
       
        $home = ["data"=> "Admin Dashboard"];
        $data['page'] = "users/home";
        $data['data'] = $home;
        return view('template',$data);
    }
    
    public function user(){

        $users = $this->model->paginate(2);
        
        
        $acess = $this->level->findAll();
        $filterRole = $this->request->getGet('filter');
        $search = $this->request->getGet('search');
        

        $query = $this->model;
        if($filterRole){
            $query->where('role', $filterRole);
        }
        if($search){
            $query->like('name',  "$search%", 'after');
        }
        $users = $query->paginate(2);   
        $data['page'] = 'users/userPage';
        $data['pager'] = $this->model->pager;
        $data['data'] = ['acess'=>$acess,'user' => $users];
        return view('template',$data);
    }

    public function createUser(){   
        $acess = $this->level->findAll();
        $data['page'] = "users/createUser";
        $data['data'] = ['acess'=>$acess];
        return view('template',$data);    
    }
    
    public function registerUser(){
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $confirmpassword = $this->request->getPost('confirmpassword');
        $role = $this->request->getPost('role');
        $userameExists = $this->model->where('name', $name)->first();
        $emailExists = $this->model->where('email',$email)->first();

        

        if($userameExists) {
            session()->setFlashData('username', 'Username already exists');
            return redirect()->to('/createUser');
        } else if($emailExists) {
            session()->setFlashData('email', 'Email already exists');
            return redirect()->to('/createUser');
        }else {
            if($password == $confirm_password) {
                $this->model->save([
                    'username' => $username,
                    'email' => $email,
                    'password' => $password,
                    'role' => $role
                ]);
                return redirect()->to('/user');
            } else {
                session()->setFlashData('password', 'Password and Confirm Password does not match');
                return redirect()->to('/createuserpage');
            }
        }
       // echo($data[0]['level_id']);
        //var_dump($data);
      
            $this->model->save([
                'name' => $name,
                'email' => $email,
                'password' => $password,
                'role' => $role 
            ]);
            return redirect()->to('/user');
    
        
    }



    public function editUser($id){
        $editdata = $this->model->where('user_id', $id)->first();       
        $acess = $this->level->findAll();
        $data['page'] = "users/editUser";
        $data['data'] = ['acess'=>$acess,'editdata'=>$editdata];
        return view('template',$data);
    }  
    
    public function updateUser($id){  
        $name = $this->request->getVar('name');
        $email = $this->request->getVar('email');
        $role = $this->request->getVar('role');
        $this->model->update($id,[
            'name' => $name,  
            'email' => $email,
            'role' => $role,
        ]);
        //var_dump($name,$email,$role);
        return redirect()->to('/user');
    }

    public function deleteUser($id){
        $this->model->delete($id);
        return redirect()->to('/user');
    }

    /// Camp

    public function gettCamp(){
        //$db = \Config\Database::connect();
        $users = new Users();
        $value = $users->where('role',2)->findAll();
        $data['page'] = "users/campaign";
        $data['data'] = ["value"=>$value];
        return view("template",$data);
    }

    public function campTable(){
        $camp = $this->camp->findAll();
        $data['page'] = "users/campTable";
        $data['data'] = ['data'=>$camp];
        return view('template',$data);
    }

    public function addCamp(){
        $name = $this->request->getVar('name');
        $description = $this->request->getVar('description');
        $client = $this->request->getVar('client');
        $role = $this->request->getVar('role');
      
        $this->camp->save([
            'camp_name' => $name,
            'camp_description' => $description,
            'client' => $client,
            'role' => $role
        ]);
        return redirect()->to('/campPage');
    }
  

    public function editCamp($id){
        $editdata = $this->camp->where('camp_id', $id)->first();       
        $acess = $this->level->findAll();
        $data['page'] = "users/editCamp";
        
        $data['data'] = ['acess'=>$acess,'editdata'=>$editdata];
        return view('template',$data);
    }

    public function updateCamp($id){  
        $name = $this->request->getVar('name');
        $description = $this->request->getVar('description');
        $client = $this->request->getVar('client');
        $role = $this->request->getVar('role');
        $this->camp->update($id,[
            'camp_name' => $name,  
            'camp_description' => $description,
            'client' => $client,
            'role' => $role,
        ]);
        //var_dump($name,$email,$role);
        return redirect()->to('/campPage');
    }   
    

    public function deleteCamp($id){
        $this->camp->delete($id);
        return redirect()->to('/campPage');
    }

  
}