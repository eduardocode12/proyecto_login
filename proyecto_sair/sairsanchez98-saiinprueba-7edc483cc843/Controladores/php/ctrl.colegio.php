<?php
require_once "../../Modelos/mdl.colegio.php";






////////////////7
////VALIDAR_email
////////////////
if (isset($_GET["validar_email"])) {
    if (filter_var($_GET["validar_email"], FILTER_VALIDATE_EMAIL) ) {
        $rest["respuesta"] = "ok";
    }else{
        $rest["respuesta"] = "err";
    }
    
    header("Content-Type: application/json");
	echo json_encode($rest);
}







///////////////////////
////// CREAR COLEGIO 
///////////////////////

if ($_POST["CrearColegio"]) 
{

    $datos = array("nombre" => $_POST["nombre_colegio"],
                   "email" => $_POST["email_colegio"],
                   "pass" => $_POST["contrasena"],
                   "fecha_registro" => date('Y-m-d H:i:s') );

    $crear_colegio = mdlColegio::CrearColegio($datos);

    //// conocer el id para crear la sesion 
    $colegios = mdlColegio::GetColegios(null);
    foreach ($colegios as $colegio) {}
    $id_colegio = $colegio["id_token"];

    if ($crear_colegio) {
        $rest["respuesta"] = "ok";
        $rest["idSession"] = $id_colegio;
    }else{
        $rest["respuesta"] = "err";
    }
        
    header("Content-Type: application/json");
	echo json_encode($rest);
}

