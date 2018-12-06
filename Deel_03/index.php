<?php

    function ToFahrenheit($cels){
        return ($cels * 1.8) + 32;
    }

    echo ToFahrenheit(4).' graden Fahrenheit<br><br>';

    function IsDeelbaarDoorDrie($isit){
        if ($isit % 3 == 0) return "true";
        return "false";
    }

    echo "It is ".IsDeelbaarDoorDrie(6).'<br><br>';

    function ReverseMe($text){
        return strrev($text);
    }

    echo ReverseMe("Reverse me!");