<?php
    #require'connection.php'

    #$con = connect();
    $con = new PDO('mysql:host=sql6.freesqldatabase.com;dbname=sql6465203', 'sql6465203','vh8gkJhMU2');
    $con->query("create table books (
        id int(11) auto_increment primary key,
        title varchar(30) not null,
        author varchar(30) not null,
        pages int(10) not null,
        isbn int(10) not null,
        available varchar(30) not null
      )");
?>