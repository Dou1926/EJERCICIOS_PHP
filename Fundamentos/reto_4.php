<?php
class Persona {
    // Atributos
    private $nombre;
    private $edad;
    private $altura;

    // Constructor
    public function __construct($nombre, $edad, $altura) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->altura = $altura;
    }

    // Método para saludar
    public function saludar() {
        echo "¡Hola, soy {$this->nombre}!";
    }

    // Método para obtener la edad
    public function obtener_edad() {
        return $this->edad;
    }

    // Método para obtener la altura
    public function obtener_altura() {
        return $this->altura;
    }
}

// Crear una instancia de Persona
$persona = new Persona("Juan", 30, 1.75);

// Usar los métodos de la clase
$persona->saludar();
echo "<br>";
echo "Edad: " . $persona->obtener_edad() . " años<br>";
echo "Altura: " . $persona->obtener_altura() . " metros";
?>
