<?php
class Conection{
    static public function conectar(){
        $link = new PDO("mysql:host=localhost;dbname=saiin", "sair", "981129SaIr");
        $link->exec("set name utf8");
        return $link;
    }
}

    