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
    <!-- Se realiza cambio de icono-->
    <link rel="shorcut icon" href="img/logo.png">

    <title>Metodo GET</title>
</head>

<body>
    <h1> DESARROLLO FULL STACK BASICO </h1>
    <h2> Unidad 10/ Punto Tres </h2>

    <a href="http://127.0.0.1:5500/portada.html">
        <img class="home" src="img/inicio.png" alt="">
    </a>

    <div class="main-frame-cal">

        <!-- Se trabaja metodo GET-->
        <!-- en la línes 30 se cambia de "POST" A GET -->
        <form action="" method="GET">

            <div class="form-group">
                <label for="exampleFormControlInput1"> Nombre</label>
                <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1"
                    placeholder="Registre su Nombre">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Apellido</label>
                <input type="text" name="apellido" class="form-control" id="exampleFormControlInput1"
                    placeholder="Registre su Apellido">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Cédula</label>
                <input type="text" name="cc" class="form-control" id="exampleFormControlInput1"
                    placeholder="Registre su Documento">
            </div>
            <!-- Se anexa boton de limpiar-->
            <button type="submit" name="limpiar" class="btn btn-outline-primary"> <strong> Limpiar </strong> </button>
            <button type="submit" name="verificar" class="btn btn-outline-primary"> <strong> Envíar </strong> </button>
        </form>

        <?php

        $edad = 0;

        if (isset($_GET['verificar'])) {
            $nombre   = $_GET['nombre'];
            $apellido = $_GET['apellido']; //Se genera cambio de "POST" A "GET"//
            $cedula   = $_GET['cc'];

            echo "El Nombre es: " . $nombre . "<br>";
            echo "El Apellido es: " . $apellido . "<br>";
            echo "El Documento es: " . $cedula . "<br>";

        }

        ?>

    </div>
</body>

</html>