<?php 
    #require'connection.php'
    if (isset($_POST['title']) && isset($_POST['author']) && isset($_POST['available']) && isset($_POST['pages']) && isset($_POST['isbn']))  {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $pages = $_POST['pages'];
    $isbn = $_POST['isbn'];
    $available = $_POST['available'];
    #$con = connect();
    $con = new PDO('mysql:host=sql6.freesqldatabase.com;dbname=sql6465203', 'sql6465203','vh8gkJhMU2');
    $statement = $con->prepare("insert into books(title,author,pages,isbn,available) values(:title, :author,:pages,:isbn,:available)");
    $statement->execute([
        ':title' => $title,
        ':author' => $author,
        'pages' => $pages,
        'isbn' => $isbn,
        'available' => $available
    ]);
    }

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
       <h2>Add a book</h2>
     </div>
     <div class="card-body">
      <form action="" method="post">
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="form-group">
          <label for="author">Author</label>
          <input type="text" name="author" id="author" class="form-control">
        </div>
        <div class="form-group">
          <label for="pages">Pages</label>
          <input type="text" name="pages" id="pages" class="form-control">
        </div>
        <div class="form-group">
          <label for="isbn">ISBN</label>
          <input type="text" name="isbn" id="isbn" class="form-control">
        </div>
        <div class="form-group">
          <label for="available">Available</label>
          <input type="text" name="available" id="available" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-outline-info">Add a book</button>
        </div>
      </form>
     </div>
   </div>
 </div> 
</body>
</html>