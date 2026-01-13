<!DOCTYPE html>

<html>

<body>

    <?php
    //arsort() → mayor a menor (mantiene claves) 

    //asort() → menor a mayor

    //krsort() → ordena por clave de Z a A

    //ksort() → ordena por clave de A a Z


    //EJERCICIO 1
    //solicita un array asociativo
    //generar un array con 4 claves 
    $datos = array(
        "Nombre" => " Sara ",
        "Apellido" => " Martinez ",
        "Edad" => 23,
        "Ciudad" => " Barcelona "
    );
    // printamos el ejercicio y colocamos 
    //br para hacer un espacio entre las lineas
    echo "<br>";
    echo "<span style='color: red; font-weight: bold; 
    font-size: 24px;'>Ejercicio 1</span><br>";
    $counter = 1;
    //recorremos el array 
    foreach ($datos as $valor) {
        //printamos el array 
        echo "Dato " . $counter .  " : " .  $valor .  " <br>";
        $counter++;
    }
    //ejercicio 2
    echo "<br>";
    echo "<span style='color: red; font-weight: bold; 
    font-size: 24px;'> Ejercicio 2 </span><br>";

    foreach ($datos as $clau => $valor) {
        //printamos el array 
        echo " $clau  :  $valor " . " <br>";
    }
    //Ejercico 3 
    echo "<br>";
    echo "<span style='color: red; font-weight: bold; 
    font-size: 24px;'>Ejercicio 3</span><br>";
    $count = 1;
    $datos["Edad"] = 24;
    foreach ($datos as $valor) {
        //printamos el array 
        echo "Dato " . $count .  " : " .  $valor .  " <br>";
        $count++;
    }
    //ejercicio 4 
    echo "<br>";
    echo "<span style='color: red; font-weight: bold; 
    font-size: 24px;'>Ejercicio 4</span><br>";
    unset($datos["Ciudad"]);
    var_dump($datos);
    echo "<br>";


    //ejercicio 5 
    echo "<br>";
    echo "<span style='color: red; font-weight: bold; 
    font-size: 24px;'>Ejercicio 5 </span><br>";

    $letters =  "a , b , c , d , e , f";
    $lettersArray = explode(",", $letters);
    $lettersArrayDesc = array_reverse($lettersArray);
    $coun = 6;
    foreach ($lettersArrayDesc as $value) {
        echo "Letter " . $coun . " : " . $value . "<br>";
        $coun--;
    }

    //ejercicio 6 
    echo "<br>";
    echo "<span style='color: red; font-weight: bold; 
    font-size: 24px;'>Ejercicio 6 </span><br>";

    $notas = array(
        "Miguel" => 5,
        "Luis" => 7,
        "Marta" => 10,
        "Isabel" => 8,
        "Aitor" => 4,
        "Pepe" => 1,
    );
    echo "Notas alumnos: ";

    arsort($notas);

    foreach ($notas as $ky => $nota) {
        echo " " . $ky . " : " . $nota;
    }
    echo "<br>";



    echo "<br>";
    echo "<span style='color: red; 
    font-weight: bold; font-size: 24px;
    '>Ejercicio 7 </span><br>";

    $totalnotas = 0;
    $cou = 0;

    foreach ($notas as $ky => $nota) {
        $totalnotas += $nota;
        $cou++;
    }

    $resultado = $totalnotas / $cou; 
    echo "Media de las notas: " . $resultado; 
    echo "<br>";


    $encimaMedia = 0;
    $encimaMedia = 0;
    $alumnosEncima = "";

    foreach ($notas as $nombre => $nota) {
        if ($nota > $resultado) {
            $encimaMedia++;
            $alumnosEncima .= $nombre . " " . " ";
        }
    }

    echo "Alumnos con nota por encima de la media: " . $alumnosEncima;
     
    echo "<br>";
    echo "<span style='color: red; 
    font-weight: bold; font-size: 24px;
    '>Ejercicio 8 </span><br>";
    echo "<br>";
    ?>

</body>

</html>