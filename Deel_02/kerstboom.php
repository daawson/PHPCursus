<?php
    // I dOnT uNdErStAnD DiS bUt iT wOrKs
    $rows = 30;
    $k = 0;
    for($i=1; $i<=$rows; ++$i, $k=0)
    {
        for($space=1; $space<=$rows-$i; ++$space)
        {
            echo "&nbsp; ";
        }

        while($k != 2*$i-1)
        {
            echo '*';
            $k++;
        }

        echo '<br>';
    }