<html>
    <body>
        <table>
            <?php
                $clubs = array(
                    array("De spartakuikens", 6),
                    array("De waterbuffels", 29),
                    array("Plonsmderin", 36),
                    array("Bommetje", 15),
                    array("Discotheek", 45),
                    array("Singlesclub", 1)
                );

                for($i = 0; $i < count($clubs); $i++){
                    echo '<tr>';
                    echo '<td>'.$clubs[$i][0].'</td>';
                    echo '<td>'.$clubs[$i][1].'</td>';

                    if($clubs[$i][1] >= 5){
                        $c = round($clubs[$i][1]/5);
                        if($c>=1){
                            for($ic = 0; $ic < $c; $ic++){
                                echo '<td><img style="width: 25px; height:auto;" src="img/swim.png"></td>';
                            }
                        }
                    }
                    echo '</tr>';
                }
            ?>
        </table>
    </body>
</html>