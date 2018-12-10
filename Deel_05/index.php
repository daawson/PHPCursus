<?php
    $host = 'localhost';
    $port = '3306';
    $user = 'root';
    $pass = '';
    $db = 'school';

    $dbh = new PDO('mysql:host='.$host.';dbname='.$db.';port='.$port, $user, $pass);


    $sql = "SELECT * FROM `cursist`";
    $cursisten = $dbh->query($sql);
    ?>

    <table>
        <?php
            foreach ($cursisten as $c){
                echo '<tr>';
                echo '<td>' . $c['cursistnr'] . '</td>';
                echo '<td>' . $c['naam'] . '</td>';
                echo '<td>' . $c['roepnaam'] . '</td>';
                echo '<td>' . $c['straat'] . '</td>';
                echo '<td>' . $c['postcode'] . '</td>';
                echo '<td>' . $c['plaats'] . '</td>';
                echo '<td>' . $c['geslacht'] . '</td>';
                echo '<td>' . $c['geb_datum'] . '</td>';
                echo '</tr>';
            }
        ?>
    </table>