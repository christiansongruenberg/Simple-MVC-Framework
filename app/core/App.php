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
    }

    //exploding and trimming the sanitized URL, will provide the controller, the method, and the params after that
    public function parseUrl()
    {
        if(isset($_GET['url'])){
            return $url = explode('/',filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
}