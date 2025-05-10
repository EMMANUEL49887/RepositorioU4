<?php
abstract class UsuarioCorreo {
    private static $contadorID = 1;
    private $id;
    private $nombre;
    private $apellidoPaterno;
    private $apellidoMaterno;
    private $edad;
    private $departamento;

    public function __construct($nombre, $apellidoPaterno, $apellidoMaterno, $edad, $departamento) {
        $this->id = self::$contadorID++;
        $this->nombre = $nombre;
        $this->apellidoPaterno = $apellidoPaterno;
        $this->apellidoMaterno = $apellidoMaterno;
        $this->edad = $edad;
        $this->departamento = $departamento;
    }
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }
    public function setDepartamento($departamento) {
        $this->departamento = $departamento;
    } 
    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidoPaterno() {
        return $this->apellidoPaterno;
    }

    public function getApellidoMaterno() {
        return $this->apellidoMaterno;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function getDepartamento() {
        return $this->departamento;
    }

    abstract public function obtenerNombreCompleto();
}
?>

