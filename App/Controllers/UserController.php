<?php

namespace App\Controllers;

use App\App;
use App\DB\Json;

class UserController {

    private $error = [];

    public function create()
    {

        return App::view('user_create', [
            'title' => 'New user'
        ]);
    }

    public function store()
    {
        if(strlen($_POST['name']) <3)  {
            $this->error += ['name' => 'Your name is too short'];
        }
        if(preg_match("/^([A-Z][a-z]+)$/",$_POST['name'])){
        }else{
            $this->error += ['name' => 'Not valid name given'];
        }
    
        if(strlen($_POST['surname'])<3){
            $this->error += ['surname' => 'Your surname cannot be real'];
        }
        if(preg_match("/^([A-Z][a-z]+)$/",$_POST['surname'])){
        }else{
            $this->error += ['surname' => 'Not valid surname given'];
        }
        if(isset($_POST['pid']) &&  !preg_match("/^[3-5][0-9]{2}(0[1-9]|1[0-2])(0[1-9]|[1-2][0-9]|3[0-1])[0-9]{4}$/", $_POST['pid'])){
            $this->error += ['pid' => 'Your Personal ID cannot be real'];
        }

        $userspid = Json::connect()->showAll();

        foreach ($userspid as $userpid){
            if(in_array($_POST['pid'], $userpid)){
                 $this->error += ['pid' => 'ID already exist!'];
                 break;
            }
        }
    if($this->error == null){
        Json::connect()->create([
            'name' => $_POST['name'],
            'surname' => $_POST['surname'],
            'pid' => $_POST['pid'],
            'accnumber' => $_POST['accnumber'],
            'balance' => $_POST['balance'],
            // 'tail' => isset($_POST['tail']) ? 1 : 0 
        ]);
        return App::redirect('users');
    }else{
        return App::view('user_create', ['title'=> 'New User', 'error' => $this->error]);
    

    }
    
}


    public function list()
    {

        return App::view('user_list', [
            'title' => 'Users List',
            'users' => Json::connect()->showAll()
        ]);
    }

    public function edit(int $id)
    {
        return App::view('user_edit', [
            'title' => 'User Edit',
            'user' => Json::connect()->show($id)
        ]);
    }
    
    public function update(int $id)
    {
        Json::connect()->update($id, [
            'name' => $_POST['name'],
            'surname' => $_POST['surname'],
            'pid' => $_POST['pid'],
            'accnumber' => $_POST['accnumber'],
            'balance' => $_POST['balance'],
            // 'tail' => isset($_POST['tail']) ? 1 : 0 
        ]);
        return App::redirect('users');
    }

    public function delete(int $id)
    {
        Json::connect()->delete($id);
        return App::redirect('users');
    }


}