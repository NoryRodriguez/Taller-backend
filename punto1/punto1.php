<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CND BOOTSTARP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--Se adiciona opcion de css-->
    <link rel="stylesheet" href="css/calculadora.css">
    <!--Se cambia el icono-->
    <link rel="shorcut icon" href="img/logo.png">
    <title>Calculadora</title>
</head>

<body>

    <h1> DESARROLLO FULL STACK BASICO </h1>
    <h2> Unidad 10/ Punto Uno </h2>

    <a href="http://127.0.0.1:5500/portada.html">
        <img class="home" src="img/inicio.png" alt="">
    </a>
    <div class="main-frame-cal">
        <form action="punto1.php" method="POST">
            <div class="form-group">
                <label for="exampleFormControlInput1">Número 1:</label>
                <input type="number" name="numero1" class="form-control" id="exampleFormControlInput1"
                    placeholder="Digite Número 1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Número 2:</label>
                <!-- se agrega la opcion faltante "name"-->
                <input type="number" name="numero2" class="form-control" id="exampleFormControlInput2"
                    placeholder="Digite número 2">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Seleccione la operación:</label>
                <select class="form-control" name="tipo" id="exampleFormControlSelect1">
                    <option value="">Seleccione una opción</option>
                    <option value="suma">Suma</option>
                    <!-- se agrega la opcion faltante "value"-->
                    <option value="resta">Resta</option>
                    <option value="multiplicacion">Multiplicación</option>
                    <option value="division">División</option>
                </select>
            </div>

            <!-- se agrega la opcion de limpiar-->
            <button type="submit" name="limpiar" class="btn btn-outline-primary"> <strong> Limpiar </strong> </button>
            <button type="submit" name="operar" class="btn btn-outline-primary"> <strong> Resultado </strong> </button>

        </form>

        <?php

        $numero1 = $numero2 = $tipo = $result = 0;

        if (isset($_POST['operar'])) {
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];
            $tipo    = $_POST['tipo'];

            switch ($tipo) {
                case 'suma':
                    $result = $numero1 + $numero2;
                    break;
                case 'resta':
                    $result = $numero1 - $numero2;
                    break;
                case 'multiplicacion':
                    $result = $numero1 * $numero2;
                    break;
                case 'division':
                    $result = $numero1 / $numero2;
                    break;
            }

            echo "<h3> El resultado es: $result </h3>";
            #echo "<script>alert(".$result.");</script>";
        
        }

        ?>

    </div>
</body>

</html>