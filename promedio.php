<?php
$i=0;
$acumulable=0;
$calificaciones= array(87,98,87,73,100,89,76);
echo" Isaac Murillo Arzeta";
echo "<br>";

foreach($calificaciones as $calificaciones){
		$i++;
	$acumulable=$acumulable+$calificaciones;

echo "Calificacion ". $i." = ". $calificaciones;
echo "<br>";
}

$promedio=$acumulable/$i;
echo"El promedio es: ". $promedio;


?>