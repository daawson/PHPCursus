<?php

$rkosten = 10;
$leeftijd = 13;

if($leeftijd >= 65){
    echo "Kosten voor een ".$leeftijd." jarige zijn ".($rkosten/2). " euro";
}else if($leeftijd <= 12 && $leeftijd > 3){
    echo "Kosten voor een ".$leeftijd." jarige zijn ".($rkosten/2). " euro";
}else if($leeftijd <= 3){
    echo "Kosten voor een ".$leeftijd." jarige zijn 0 euro";
}
else{
    echo "Kosten voor een ".$leeftijd." jarige zijn ".$rkosten. " euro";
}