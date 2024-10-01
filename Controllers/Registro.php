<?php
session_start();

if (!empty($_POST["Registro"])) {
    if (
        !empty($_POST["NumeroSalon"]) && !empty($_POST["Ventiladores"]) &&
        !empty($_POST["Sillas"]) && !empty($_POST["Zurdas"]) &&
        !empty($_POST["escritorio"]) && !empty($_POST["Luces"]) &&
        !empty($_POST["Pantalla"]) && !empty($_POST["piso"]) &&
        !empty($_POST["puerta"]) && !empty($_POST["repetidor"])
    ) {
        $salon = "FIEL-AUL" . $_POST["NumeroSalon"];
        $ventiladores = $_POST["Ventiladores"];
        $sillas = $_POST["Sillas"];
        $zurdas = $_POST["Zurdas"];
        $escritorio = $_POST["escritorio"];
        $luces = $_POST["Luces"];
        $pantalla = $_POST["Pantalla"];
        $piso = $_POST["piso"];
        $puerta = $_POST["puerta"];
        $repetidor = $_POST["repetidor"];

        $sql = "INSERT INTO salones (salon, ventiladores, sillas, sillas_zurdas, escritorio, luces, pantalla, piso, puerta, repetidor) 
                VALUES ('$salon', '$ventiladores', '$sillas', '$zurdas', '$escritorio', '$luces', '$pantalla', '$piso', '$puerta', '$repetidor')";

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
