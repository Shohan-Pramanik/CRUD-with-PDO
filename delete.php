<?php
    #require'connection.php' 
    $id = $_GET['id'];
    #$con = connect();
    $con = new PDO('mysql:host=sql6.freesqldatabase.com;dbname=sql6465203', 'sql6465203','vh8gkJhMU2');
    $statement = $con->prepare('delete from books where id=:id');
    $statement->execute([
    ':id' => $id
    ]);

    header('location: /');
?>