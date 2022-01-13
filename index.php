<?php
    #require_once'connection.php' 
    #$con = connect();
    $con = new PDO('mysql:host=sql6.freesqldatabase.com;dbname=sql6465203', 'sql6465203','vh8gkJhMU2');
    $statement = $con->prepare('select * from books order by id');
    $statement->execute();
    $books = $statement->fetchAll(PDO::FETCH_OBJ);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
  <div class="container">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="create.php">Create</a></li>
    </ul>
  </div>
 <div class="container">
   <div class="card mt-5">
     <div class="card-header">
       <h2>All books</h2>
     </div>
     <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>Id</th>
          <th>Title</th>
          <th>Author</th>
          <th>Pages</th>
          <th>ISBN</th>
          <th>Available</th>
          <th>Action</th>
        </tr>
        <?php foreach($books as $book): ?>
        <tr>
          <td><?= $book->id; ?></td>
          <td><?= $book->title; ?></td>
          <td><?= $book->author; ?></td>
          <td><?= $book->pages; ?></td>
          <td><?= $book->isbn; ?></td>
          <td><?= $book->available; ?></td>
          <td>
            <a class="btn btn-warning" href="delete.php?id=<?= $book->id; ?>">Delete</a>
          </td>
        </tr>
      <?php endforeach; ?>


      </table>
     </div>
   </div>
 </div> 
</body>
</html>