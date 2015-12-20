<?php
/**
 * Created by PhpStorm.
 * User: Christianson
 * Date: 19/12/2015
 * Time: 2:23 AM
 */

class Home extends Controller
{

    public function index($name = '')
    {
        $this->view('home/index', ['name' => $name]);
    }

    public function create($username = '', $email = ''){
        User::create([
            'username'=> $username,
            'email' => $email
        ]);
    }
}
