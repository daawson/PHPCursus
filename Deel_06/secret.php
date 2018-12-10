 <?php
    session_start();
    if($_SESSION['role'] == 'admin'){
        echo 'You have acces to these very cute photos of monkeys!';
        echo '<img src="../Deel_02/img/aap1.jpg">';
    }
    else{
        echo 'Sorry, you don`t have access to our very important photos of monkeys :(';
    }

     if($_SESSION['role'] != ''){
         echo '<br><a href="panel.php">User Panel</a>';
         echo '<br><a href="logout.php">Uitloggen</a>';
     }