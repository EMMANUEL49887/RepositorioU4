<?php
require_once 'UsuarioCorreo.php';

class Docente extends UsuarioCorreo {
    private $gradoAcademico;
    private $antiguedad;

    public function __construct($nombre, $apellidoPaterno, $apellidoMaterno, $edad, $departamento, $gradoAcademico, $antiguedad) {
        parent::__construct($nombre, $apellidoPaterno, $apellidoMaterno, $edad, $departamento);
        $this->gradoAcademico = $gradoAcademico;
        $this->antiguedad = $antiguedad;
    }

    // Setters
    public function setGradoAcademico($gradoAcademico) {
        $this->gradoAcademico = $gradoAcademico;
    }

    public function setAntiguedad($antiguedad) {
        $this->antiguedad = $antiguedad;
    }

    // Getters
    public function getGradoAcademico() {
        return $this->gradoAcademico;
    }

    public function getAntiguedad() {
        return $this->antiguedad;
    }

    // Método sobrescrito
    public function obtenerNombreCompleto() {
        return "{$this->gradoAcademico} {$this->getNombre()} {$this->getApellidoPaterno()} {$this->getApellidoMaterno()}";
    }
}
?>
