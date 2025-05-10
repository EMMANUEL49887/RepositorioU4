<?php
require_once 'Docente.php';
require_once 'Alumno.php';

$docente1 = new Docente("Roberto", "Solis", "Robles", 45, "Sistemas", "M.C.", 15);
$docente2 = new Docente("Ana", "Lopez", "Martinez", 38, "Matemáticas", "Dr.", 10);
$alumno1 = new Alumno("Alonso", "Lira", "Espinoza", 20, "Sistemas", 9.3, 5);
$alumno2 = new Alumno("María", "Gomez", "Perez", 19, "Matemáticas", 8.7, 3);

// Nuevos objetos
$docente3 = new Docente("Luis", "Fernandez", "Cruz", 50, "Física", "Ing.", 25);
$docente4 = new Docente("Elena", "Mendoza", "Suarez", 42, "Química", "Dra.", 18);
$alumno3 = new Alumno("Carlos", "Ramos", "Luna", 22, "Física", 9.0, 7);
$alumno4 = new Alumno("Lucía", "Martinez", "Ortiz", 21, "Química", 8.5, 6);

// Modificaciones con setters
$docente1->setGradoAcademico("Dr.");
$alumno1->setPromedio(9.5);
$alumno2->setSemestre(4);
$docente3->setAntiguedad(30);
$alumno4->setNombre("Luciana");

// Mostrar resultados
$usuarios = [$docente1, $docente2, $docente3, $docente4, $alumno1, $alumno2, $alumno3, $alumno4];

foreach ($usuarios as $usuario) {
    echo "ID: " . $usuario->getId() . "<br>";
    echo "Nombre Completo: " . $usuario->obtenerNombreCompleto() . "<br>";
    echo "Edad: " . $usuario->getEdad() . "<br>";
    echo "Departamento: " . $usuario->getDepartamento() . "<br>";

    if ($usuario instanceof Docente) {
        echo "Grado Académico: " . $usuario->getGradoAcademico() . "<br>";
        echo "Antigüedad: " . $usuario->getAntiguedad() . " años<br>";
    } elseif ($usuario instanceof Alumno) {
        echo "Promedio: " . $usuario->getPromedio() . "<br>";
        echo "Semestre: " . $usuario->getSemestre() . "<br>";
    }

    echo "<hr>";
}
?>
