<?php

namespace App\Controllers;

use App\App;
use App\DB\Json;

class UserController {

    public function create()
    {

        return App::view('user_create', [
            'title' => 'New user'
        ]);
    }

    public function store()
    {
        Json::connect()->create([
            'name' => $_POST['name'],
            'surname' => $_POST['surname'],
            'pid' => $_POST['pid'],
            'accnumber' => $_POST['accnumber'],
            'balance' => $_POST['balance'],
            // 'tail' => isset($_POST['tail']) ? 1 : 0 
        ]);
        return App::redirect('users');
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