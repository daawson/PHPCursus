<?php
    session_start();
    echo 'Welkom '.$_SESSION['naam']."! Jij bent een ".$_SESSION['role']."!";
    echo '<br><a href="secret.php">TOP SECRET FILES</a>';
    echo '<br><a href="logout.php">Uitloggen</a>';

