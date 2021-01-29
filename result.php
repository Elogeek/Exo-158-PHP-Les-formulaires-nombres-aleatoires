<?php
if (isset($_POST['go'], $_POST['number1'], $_POST['number2'])) {
    $numberOne = trim(strip_tags($_POST['number1']));
    $numberTwo = trim(strip_tags($_POST['number2']));
    if ((intval($numberOne)) && (intval($numberTwo))) {
        if (($numberOne <= getrandmax()) || ($numberTwo <= getrandmax())) {
            if ($numberOne < $numberTwo) {
                echo rand($numberOne, $numberTwo);
            }
            else {
                echo rand($numberTwo, $numberOne);
            }
        }
        else {
            header('location: index.php?error = 3');
        }
    }
    else {
        header('location: index.php?error = 2');
    }
}
else {
    header('location = index.php?error = 1');
}