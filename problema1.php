<?php
//se ingresa el radio del circulo
$radio = 5;
//se calculan el area y el perimetro del circulo
$area = pi() * pow($radio, 2);
$perimetro = 2 * pi() * $radio;
//aqui se mostraran los resultados
echo "<h1>Resultados</h1>";
echo "El radio introducido es: " . $radio . "<br>";
echo "El área del círculo es: " . $area . "<br>";
echo "El perímetro del círculo es: " . $perimetro . "<br>";
