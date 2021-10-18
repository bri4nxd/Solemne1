<?php 
require_once('vendor/autoload.php');
require_once('models/Database/Database.php');

use Illuminate\Database\Capsule\Manager as DB;

class Temas{
    //mostrar todas las pesonas asco
    public function index()
    {
        $temas = DB::table('temas')->get();
        return $temas;
    }
}