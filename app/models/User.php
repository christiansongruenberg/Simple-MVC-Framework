<?php
/**
 * Created by PhpStorm.
 * User: Christianson
 * Date: 19/12/2015
 * Time: 8:02 PM
 */

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    public $name;

    protected $fillable = ['username', 'email'];
}