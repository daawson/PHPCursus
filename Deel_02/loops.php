<?php

$imgcount = 9;
echo '<div style="width: 800px; height: 300px; margin: auto; text-align: center;"';

for($img = 0; $img <= $imgcount; $img++){
    if($img == 6) echo "<br>";
    echo '<img style="border: 1px solid red; height: 150px; width: 150px;" src="img/aap'.$img.'.jpg" />';
}

echo '</div>';