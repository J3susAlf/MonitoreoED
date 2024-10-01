<?php 
session_start();
if (!empty($_POST["Aceptar"])) {
   if (!empty($_POST["Correo"] and !empty($_POST["Contrasena"]))) {
    $Correo = $_POST["Correo"];
    $Contrasena = $_POST["Contrasena"];

    $sql = "SELECT personas.*, usuarios.contrasena, usuarios.rol 
    FROM personas 
    JOIN usuarios ON personas.id_persona = usuarios.id_persona 
    WHERE personas.Correo = '$Correo' AND usuarios.contrasena = '$Contrasena'";


    $result = mysqli_query($conexion, $sql);
    $filas = mysqli_fetch_array($result);

    if ($filas['rol'] == "ADMINISTRADOR") {
        header("Location: Models/Administrador.php");
        exit;
    } else if ($filas['rol'] == "SUPERVISOR") {
        header("Location: Models/Supervisor.php");
        exit;
    } else {
        echo '<div class="alert alert-warning">ACCESO INVÁLIDO</div>';
    }
   }
}

?>