<?php

require_once('../vendor/autoload.php'); 
require_once('../models/Database/Database.php');
require_once '../models/CRUD/InterfaceCrud.php';

use Illuminate\Database\Capsule\Manager as DB;


class Usuario 
{

    public static function login($email, $password)
    {
        DB::table('usuario')->select()->where('email', '=' ,$email)->get();

    }

    public static function register($nombre,$email, $password)
    {
        DB::table('usuario')->insert([
            'nombre'   => $nombre,
            'email'    => $email,
            'password' => $password
        ]);
    }

    public static function index()
    {

    }
    public static function create()
    {

    }
    public static function update()
    {

    }
    public static function delete()
    {

    }
}