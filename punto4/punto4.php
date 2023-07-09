<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CND BOOTSTARP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="shorcut icon" href="img/logo.png">
    <title>Edad_Exacta </title>
</head>

<body>

    <h1> DESARROLLO FULL STACK BASICO </h1>
    <h2> Unidad 10/ Punto Cuatro </h2>
    <a href="http://127.0.0.1:5500/portada.html">
        <img class="home" src="img/inicio.png" alt="">
    </a>

    <div class="main-frame-cal">
        <form action="" method="POST">
            <div class="form-group">
                <label for="exampleFormControlInput1">Ingrese su fecha de nacimiento:</label>
                <input type="date" name="f_n" class="form-control" id="exampleFormControlInput1">
            </div>

            <button type="submit" name="limpiar" class="btn btn-outline-primary"> <strong> Limpiar </strong> </button>
            <button type="submit" name="verificar" class="btn btn-outline-primary"> <strong> Evíar </strong></button>
        </form>

        <?php

        const constante_18 = 18;
        define("constante0", "0");

        if (isset($_POST['verificar'])) {
            $fecha = new DateTime($_POST['f_n']);

            $date2 = new DateTime(date("y-m-d"));

            $fecha_actual = $fecha->diff($date2);

            $edad_actual = $fecha_actual->y;
            $edad_meses  = $fecha_actual->m;
            $edad_dias   = $fecha_actual->d;

            if ($edad_actual >= constante_18) {
                echo "<h3> ¡Felicidades! Eres mayor, tu edad es:" . $edad_actual . "años </h3>";
            } else if ($edad_actual < constante_18 && $edad_actual > constante0) {
                echo "<h4>¡Lo siento! Eres menor, tu edad es:" . $edad_actual . "años</h4>";
            } else {
                echo "<h5>¡Alerta! No has ingresado ningun dato.</h5>";

            }

            echo "<br> Tu edad es años: ".$edad_actual."<br> meses: ".$edad_meses."<br> dias:".$edad_dias;
        }


        ?>


    </div>
</body>

</html>