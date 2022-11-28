<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>TAREA</h1>
    <p>Crear un archivo “tp1_backend.php” y realizar los siguientes ejercicios:
        1. Imprima por pantalla: “Hola mundo”.
        2. Cargue en una variable la cadena de caracteres “Hola mundo” y luego la imprima por pantalla.
        3. Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división
        entera y el resto de la división entera.
        4. Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por
        pantalla.
        5. Implementar algoritmos que permitan:
        a) Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.
        b) Calcular el perímetro y el área de un círculo dado que su radio es de 30cm.</p>

    <h1>1</h1>
    <h2>Hola mundo</h2>
    <br>
    <h1>2</h1>

    <?php
    //comentario en php
    $mensaje = "hola mundo";
    echo "<h3> $mensaje </h3>";
    ?>

    <hr>
    <h1>3</h1>

    <?php
    //declaro 2 variables
    $n1 = 8;
    $n2 = 5;
    echo "n1 es igual a $n1 <br>";

    echo "n2 es igual a $n2 <br>";

    echo "Operaciones matematicas <br>";

    //operaciones matematicas
    $suma = $n1 + $n2;
    $resta = $n1 - $n2;
    $multi = $n1 * $n2;
    $divi = $n1 / $n2;
    $mod = $n1 % $n2;
    //muestra operaciones y resultados
    echo "$n1 + $n2 = $suma <br>";
    echo "$n1 - $n2 = $resta <br>";
    echo "$n1 * $n2 = $multi <br>";
    echo "$n1 / $n2 = $divi <br>";
    echo "$n1 % $n2 = $mod <br>";

    ?>
    <hr>
    <h1> 4</h1>
    <?php
    echo "Celcius a farenheit <br>";
    $celcius = 20;
    $farenheit = $celcius * 1.8 + 32;
    echo "20 grados celcius es igual a $farenheit  grados farenheit";
    ?>

    <hr>
    <h1>5 a</h1>
    <?php
    $base = 18;
    $altura = 12;
    $perimetro = $base + $altura + $base + $altura;
    echo "el perimetro es $perimetro";
    ?>
    <h1>5 b</h1>
    <?php
    $pi = 3.1418;
    $radio = 30;
    $area = $pi * pow($radio, 2);
    echo "el area es $area";
    ?>



</body>

</html>