<?php
class Persona {
    private $nombre;
    private $edad;
    private $correo;
    private $telefono;

    public function __construct($nombre, $edad, $correo, $telefono) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->correo = $correo;
        $this->telefono = $telefono;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function presentarse() {
        echo "Soy {$this->nombre}, tengo {$this->edad} años. Mi correo es {$this->correo} y mi teléfono es {$this->telefono}." . PHP_EOL;
    }
}

class Estudiante extends Persona {
    private $carrera;
    private $matricula;

    public function __construct($nombre, $edad, $correo, $telefono, $carrera, $matricula) {
        parent::__construct($nombre, $edad, $correo, $telefono);
        $this->carrera = $carrera;
        $this->matricula = $matricula;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function presentarse() {
        echo "Soy {$this->nombre}, tengo {$this->edad} años, estudio {$this->carrera}. Mi correo es {$this->getCorreo()}, mi teléfono es {$this->getTelefono()} y mi número de matrícula es {$this->matricula}."x. PHP_EOL;
    }
}

// Crear un objeto de la clase "Estudiante"
$estudiante = new Estudiante("Maria", 20, "maria@example.com", "123-456-7890", "Ingeniería", "12345");

// Mostrar la información del estudiante
$estudiante->presentarse();

// Prueba de los métodos de acceso y modificación de los atributos
$estudiante->setCorreo("nuevo_email@ejemplo.com");
$estudiante->setTelefono("987-654-3210");
$estudiante->setMatricula("54321");

echo "Nuevos datos del estudiante:" . PHP_EOL;
$estudiante->presentarse();



