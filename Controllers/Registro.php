<?php
session_start();
include 'Models/Conexion.php';
if (!empty($_POST["Registro"])) {
    if (
        !empty($_POST["Salon"]) && !empty($_POST["Ventidalores"]) &&
        !empty($_POST["Sillas"]) && !empty($_POST["escritorio"]) &&
        !empty($_POST["Luces"]) && !empty($_POST["Pantalla"]) &&
        !empty($_POST["piso"]) && !empty($_POST["puerta"]) &&
        !empty($_POST["repetidor"])
    ) {
        $salon = $_POST["Salon"];
        $ventiladores = $_POST["Ventidalores"];
        $sillas = $_POST["Sillas"];
        $escritorio = $_POST["escritorio"];
        $luces = $_POST["Luces"];
        $pantalla = $_POST["Pantalla"];
        $piso = $_POST["piso"];
        $puerta = $_POST["puerta"];
        $repetidor = $_POST["repetidor"];

        $sql = "INSERT INTO salones (salon, ventiladores, sillas, escritorio, luces, pantalla, piso, puerta, repetidor
                ) VALUES ('$salon', '$ventiladores', '$sillas', '$escritorio', '$luces', '$pantalla', '$piso', '$puerta', '$repetidor')";

        if (mysqli_query($conexion, $sql)) {
            echo '<div class="alert alert-success">Datos guardados correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al guardar los datos: ' . mysqli_error($conexion) . '</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Por favor, completa todos los campos</div>';
    }
}
?>
