<?php
// Función para saludar
function saludar() {
    echo "¡Hola a todos!";
}

// Función para sumar dos números
function sumar($numero1, $numero2) {
    return $numero1 + $numero2;
}

// Función para obtener la edad actual
function obtener_edad($anio_nacimiento) {
    $anio_actual = date("Y");
    return $anio_actual - $anio_nacimiento;
}

// Función para convertir una cadena a mayúsculas
function convertir_a_mayusculas($cadena) {
    return strtoupper($cadena);
}

// Función para calcular el promedio de un array de números
function calcular_promedio($numeros) {
    $total = array_sum($numeros);
    $cantidad = count($numeros);
    return $total / $cantidad;
}

// Función para calcular el área de un círculo
function calcular_area_circulo($radio) {
    $pi = 3.14159265359;
    return $pi * pow($radio, 2);
}

// Ejemplos de uso de las funciones
saludar();
echo "<br>";

$resultado_suma = sumar(5, 3);
echo "Resultado de la suma: " . $resultado_suma . "<br>";

$edad = obtener_edad(1990);
echo "Edad: " . $edad . " años<br>";

$cadena_mayusculas = convertir_a_mayusculas("Hola, mundo");
echo "Cadena en mayúsculas: " . $cadena_mayusculas . "<br>";

$numeros = array(1, 2, 3, 4, 5);
$promedio = calcular_promedio($numeros);
echo "Promedio de los números: " . $promedio . "<br>";

$radio = 2.5;
$area = calcular_area_circulo($radio);
echo "Área del círculo: " . $area;
?>
