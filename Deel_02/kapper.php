<html>
    <body>
        <table>
            <?php
                $kappersagenda = array(
                    array("Mevr. Pietersen", "9:15"),
                    array("Mevr. Willems", "9:30"),
                    array("", "9:45"),
                    array("Paul van den Broek", "10:00"),
                    array("Karel de Meeuw", "10:15"),
                    array("", "10:30")
                );

                print("De volgende momenten zijn nog beschikbaar:<ul>");
                foreach($kappersagenda as $afspraak) {
                    if($afspraak[0] == "") {
                        print("<li>".$afspraak[1]."</li>");
                    }
                }
                print("</ul>")
            ?>
        </table>
    </body>
</html>