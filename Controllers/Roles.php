<?php 
session_start();
if (!empty($_POST["Aceptar"])) {
   if (!empty($_POST["Correo"] and !empty($_POST["Contrasena"]))) {
    $Correo = $_POST["Correo"];
    $Contrasena = $_POST["Contrasena"];

    $sql = "SELECT * FROM personas WHERE Correo='$Correo' AND Contrasena='$Contrasena'";
    $result = mysqli_query($conexion, $sql);
    $filas = mysqli_fetch_array($result);

    if ($filas['Id_Roll'] == 1) {
        header("Location: Models/Administrador.php");
        exit;
    } else if ($filas['Id_Roll'] == 2) {
        header("Location: Models/Supervisor.php");
        exit;
    } else {
        echo '<div class="alert alert-warning">ACCESO INVÁLIDO</div>';
    }
   }
}

?>