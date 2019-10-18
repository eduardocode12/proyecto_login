<?php
session_start();
if (!isset($_SESSION["logged"])) {
    $_SESSION["logged"]= $_GET["id_user"];
    $rest = $_SESSION["logged"];
}else{
    $rest = $_SESSION["logged"] . " existe sesion";
}
 

header("Content-Type: application/json");
echo json_encode($rest);