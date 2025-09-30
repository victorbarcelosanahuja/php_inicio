<?php 
// lo de a bajo es para que detecte el nombre completo de mis archivos php ya que si no buscaria seccion1, seccion2...
$archivos = [
  1 => "part1-profile.php",
  2 => "part2-music.php",
  3 => "part3-movies.php",
  4 => "part4-menu.php",
  5 => "part5-event.php",
  6 => "part6-travel.php"
];

include "includes/header.php"; //inserta la cabecera y el menú.

if ($_GET['seccion']) { //comprueba si la clave seccion está en la URL con el método GET
    $seccion = $_GET['seccion']; //si está, asigna su valor a $seccion.
} else {
    $seccion = 1; // y si no pues le manda al 1 que es el perfil.
}

include "sections/" . $archivos[$seccion]; //$seccion vale 1,2,3,4,5 o 6 entonces 
// el php lo lee y busca el archivo correspondiente en la carpeta sections.
include "includes/footer.php"; //inserta el pie de página.
?>

