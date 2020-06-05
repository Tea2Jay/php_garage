<?php

function dd($var)
{
    echo '<pre>';
    die(var_dump($var));
    echo '</pre>';
}

function checkAge($age)
{
    if ($age > 21) {
        return true;
    } else {
        return false;
    }
}
