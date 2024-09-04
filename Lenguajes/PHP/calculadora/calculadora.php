<?php

$opcion = $_POST['operation'];
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

function operacionMatematica($opcion, $num1, $num2){
    $resultado;
    switch($opcion){
        case "suma":
            $resultado = $num1 + $num2;
            echo $resultado;
            break;
        case "resta":
            if($num1 > num2){
                $resultado = $num1 - $num2;
                echo $resultado;
            }else{
                echo "El numero primer numero ingresado debe ser mayor al segundo.";
            }
            break;
        case "multiplicacion":
            $resultado = $num1 * $num2;
            echo $resultado;
            break;
        case "division":
            if($num1 > $num2 && $num2 != 0){
                $resultado = $num1 / $num2;
                echo $resultado;
            }else{
                echo "Para poder realizar la division el primer numero ingresado debe ser mayor al segundo y el segundo debe ser mayor a 0.";
            }
            break;
        default:
            echo "Opcion no valida.";
            break
    }
}

operacionMatematica($opcion, $num1, $num2);

header("Location: calculadora.html?result=".urlencode($resultado));
exit;

?>