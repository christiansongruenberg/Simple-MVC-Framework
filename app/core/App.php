<?php
/**
 * Created by PhpStorm.
 * User: Christianson
 * Date: 19/12/2015
 * Time: 2:16 AM
 */

class App
{
    //default controller and method
    protected $controller = 'home';
    protected $method = 'index';

    //init the parameters from the url
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseUrl();

        if(file_exists('../app/controllers/' . $url[0] . '.php')){
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once '../app/controllers/' . $this->controller . '.php';

        $this->controller = new $this->controller;

        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    //exploding and trimming the sanitized URL, will provide the controller, the method, and the params after that
    public function parseUrl()
    {
        if(isset($_GET['url'])){
            return $url = explode('/',filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
}