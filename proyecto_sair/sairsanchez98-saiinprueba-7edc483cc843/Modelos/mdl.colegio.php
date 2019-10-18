<?php
require_once "mdl.conexion.php";

class mdlColegio
{
    /// CREAR COLEGIO
    static public function CrearColegio($datos)
    {
        $stmt = Conection::conectar()->prepare("INSERT INTO 
        colegios (nombre, email, pass, fecha_registro) 
		VALUES (:nombre, :email, :pass, :fecha_registro)");

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":pass", $datos["pass"], PDO::PARAM_STR);
        $stmt->bindParam(":fecha_registro", $datos["fecha_registro"], PDO::PARAM_STR);
		
		
        
        if($stmt->execute()){
			return true;
		}else{
			return false;
		}
		$stmt->close();
		$stmt = null;        
    }




    //// OBTENER COLEGIOS
    static public function GetColegios($id)
    {
        if (!$id) {
            $stmt = Conection::conectar()->prepare("SELECT * FROM colegios ");
            $stmt-> execute();
            return $stmt->fetchAll();
        }
    }



}