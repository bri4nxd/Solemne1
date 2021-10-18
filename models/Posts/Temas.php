<?php 

require_once('../vendor/autoload.php'); 
require_once('../models/Database/Database.php');
require_once '../models/CRUD/InterfaceCrud.php';

use Illuminate\Database\Capsule\Manager as DB;

class Temas 
{

    public static function edit($id)
    {
       return DB::table('temas')->where('id', '=', $id)->get();
    }
 
    public static function agregar($autor, $tema){
        DB::table('temas')->insert([
            'autor'   => $autor,
            'tema' => $tema,

        ]);
    }

    public static function update($autor, $tema, $contenido, $fecha, $id)
    {
        DB::table('temas')->where('id', '=',$id)->update([
            'autor'   => $autor,
            'tema' => $tema,
            'contenido'  => $contenido,
            'fecha'   => $fecha
        ]);
    }
    
    public static function delete($id)
    {
        DB::table('temas')->where('id', '=', $id)->delete();
    }
   
}