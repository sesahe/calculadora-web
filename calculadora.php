<?php

if(isset($_POST['submit'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = 0;

    switch ($operation) {
         case 'sum':
            $result = $num1 + $num2;
            break;
        case 'sub':
            $result = $num1 - $num2;
            break;
        case 'mult':
            $result = $num1 * $num2;
            break;
        case 'div':
            if($num2 != 0) {
                $result = $num1 / $num2;
            }else{
                $result = "Error!";
            }
            break;
        default:
            $result = "Error!";
            break;
    }

    echo "<p>Result is " . $result . "</p>";
}