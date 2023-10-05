<?php
class Persona {
    protected $nombre;
    protected $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function presentarse() {
        echo "Soy {$this->nombre} y tengo {$this->edad} años." . PHP_EOL;
    }
}

class Estudiante extends Persona {
    private $carrera;

    public function __construct($nombre, $edad, $carrera) {
        parent::__construct($nombre, $edad);
        $this->carrera = $carrera;
    }

    public function estudiar() {
        echo "Estoy estudiando." . PHP_EOL;
    }

    public function presentarse() {
        echo "Soy {$this->nombre}, tengo {$this->edad} años y estudio {$this->carrera}." . PHP_EOL;
    }
}

// Ejemplo de uso
$persona = new Persona("Juan", 25);
$persona->presentarse();

$estudiante = new Estudiante("Maria", 20, "Ingeniería");
$estudiante->presentarse();
$estudiante->estudiar();

