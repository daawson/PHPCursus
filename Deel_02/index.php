<?php

$imgcount = 9;
echo '<div style="margin: auto; width: 450px; height: 450px;"';

for($img = 0; $img <= $imgcount; $img++){
    echo '<img style="height: 150px; width: auto;" src="img/aap'.$img.'.jpg" />';
}

echo '</div>';