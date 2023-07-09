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
    <title>Mayor o menor de edad</title>
</head>

<body>
    <h1> DESARROLLO FULL STACK BASICO </h1>
    <h2> Unidad 10/ Punto Dos </h2>

    <a href="http://127.0.0.1:5500/portada.html">
        <img class="home" src="img/inicio.png" alt="">
    </a>

    <div class="main-frame-cal">
        <form action="" method="POST">
            <div class="form-group">
                <label for="exampleFormControlInput1">Edad</label>
                <input type="number" name="edad" class="form-control" id="exampleFormControlInput1"
                    placeholder="Digite su edad">
            </div>
            <button type="submit" name="limpiar" class="btn btn-outline-primary"> <strong> Limpiar </strong> </button>
            <button type="submit" name="verificar" class="btn btn-outline-primary"> <strong> Operar </strong> </button>
            <br>
        </form>

        <?php

        $edad = 0;

        if (isset($_POST['verificar'])) {
            $edad = $_POST['edad'];
// Se cambian los h1 y se agregan h3, h4, h5// 
            if ($edad >= 18) {
                echo "<h3> ¡Felicidades! Eres mayor de edad.</h3>";
            } else if (18 > $edad && 0 < $edad) {
                echo "<h4>¡Lo siento! Eres menor de edad.</h4>";
            } else {
                echo "<h5>¡Alerta! No has ingresado ningun dato.</h5>";
            }

        }

        ?>

    </div>
</body>

</html>