<?php 

require_once('../vendor/autoload.php'); 
require_once('../models/Database/Database.php');
require_once '../models/CRUD/InterfaceCrud.php';

use Illuminate\Database\Capsule\Manager as DB;

class Posts 
{

    public static function edit($id)
    {
       return DB::table('post')->where('id', '=', $id)->get();
    }
   
    public static function agregar($autor, $titulo, $contenido, $fecha){
        DB::table('post')->insert([
            'autor'   => $autor,
            'titulo' => $titulo,
            'contenido' => $contenido,
            'fecha' => $fecha
        ]);
    }

    public static function update($autor, $titulo, $contenido, $fecha, $id)
    {
        DB::table('post')->where('id', '=',$id)->update([
            'autor'   => $autor,
            'titulo' => $titulo,
            'contenido'  => $contenido,
            'fecha'   => $fecha
        ]);
    }
    
    public static function delete($id)
    {
        DB::table('post')->where('id', '=', $id)->delete();
    }
   
}