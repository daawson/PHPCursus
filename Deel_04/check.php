<?php
    $logins = array(
        array("piet@worldonline.nl", "doetje123"),
        array("klaas@carpets.nl", "snoepje777"),
        array("truushendriks@wegweg.nl", "arkiearkie201")
    );
    $pass = $_GET['password'];
    $login = $_GET['login'];
    $logged = false;
    foreach($logins as $log){
        if($log[0] == $login && $log[1] == $pass){
            echo "WELKOM!";
            $logged = true;
            break;
        } else {
            $logged = false;
            echo "- GEEN TOEGANG -";
        }
    }

    echo "<br>Login status ".$logged;

