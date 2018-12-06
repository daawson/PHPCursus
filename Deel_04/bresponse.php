<?php
    foreach($_GET['beast'] as $b){
        echo $b . "<br>";
        if($b == "Dragon"){
            echo '<img src="img/dragon.jpg">';
        }else if($b == "Wolf"){
            echo '<img src="img/wolf.jpg">';
        }else if($b == "Dog"){
            echo '<img src="img/dog.jpg">';
        }else if($b == "Cat"){
            echo '<img src="img/cat.jpg">';
        }else if($b == "Fish"){
            echo '<img src="img/fish.jpg">';
        }
        echo "<br>";
    }