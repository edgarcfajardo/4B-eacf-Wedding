<?php 
class Conexion{
    static public function conectar(){
        $link = new PDO(
            "mysql:host=localhost;port=3308;dbname=4b-eacf-wedding", 
            "soporte_3b_eacf", 
            "122333");

        $link->exec("set names utf8");

        return $link;
    }
}
?>
