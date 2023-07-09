<?php
$fecha_nacimiento = new DateTime('1990-01-01');
$hoy = new DateTime();
$edad = $hoy->diff($fecha_nacimiento);
if ($edad->y >= 18) {
    echo "Es mayor de edad";
} else {
    echo "Es menor de edad";
}
?>