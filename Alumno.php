<?php
require_once 'UsuarioCorreo.php';

class Alumno extends UsuarioCorreo {
    private $promedio;
    private $semestre;

    public function __construct($nombre, $apellidoPaterno, $apellidoMaterno, $edad, $departamento, $promedio, $semestre) {
        parent::__construct($nombre, $apellidoPaterno, $apellidoMaterno, $edad, $departamento);
        $this->promedio = $promedio;
        $this->semestre = $semestre;
    }

    // Setters
    public function setPromedio($promedio) {
        $this->promedio = $promedio;
    }

    public function setSemestre($semestre) {
        $this->semestre = $semestre;
    }

    // Getters
    public function getPromedio() {
        return $this->promedio;
    }

    public function getSemestre() {
        return $this->semestre;
    }

    // Método sobrescrito
    public function obtenerNombreCompleto() {
        return "Alumno {$this->getNombre()} {$this->getApellidoPaterno()} {$this->getApellidoMaterno()}";
    }
}
?>
