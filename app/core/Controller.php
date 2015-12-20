<?php
/**
 * Created by PhpStorm.
 * User: Christianson
 * Date: 19/12/2015
 * Time: 2:18 AM
 */

class Controller
{
    public function model($model){
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
}