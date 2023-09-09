<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos del formulario
    $nombre = $_POST["nombre"];
    $departamento = $_POST["departamento"];
    $peticion = $_POST["peticion"];

    // Crear variables para almacenar el nombre del cliente y el departamento
    $cliente = $nombre;
    $departamentoEscogido = $departamento;

    // Arreglos de empleados por departamento
    $empleados = array(
        "atencioncliente" => array("Juan Perez", "Maria Rodriguez", "Luisa Gonzalez", "Carlos Martinez"),
        "soportetecnico" => array("Pedro Sanchez", "Ana Gomez", "Raul Ramirez", "Laura Jimenez"),
        "facturacion" => array("Sofia Fernandez", "Miguel Torres", "Elena Lopez", "Diego Herrera")
    );

    // Respuesta al usuario
    echo "Hola, $cliente.<br>";
    echo "Tu petición para el departamento de $departamentoEscogido ha sido recibida.<br>";
    echo "Descripción de la petición: $peticion<br>";

    // Muestra los empleados del departamento seleccionado
    echo "Empleados del departamento de $departamentoEscogido:<br>";
    foreach ($empleados[$departamentoEscogido] as $empleado) {
        echo $empleado . "<br>";
    }
}
?>
