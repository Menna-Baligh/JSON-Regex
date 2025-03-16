<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Manager</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
    <?php session_start();?>
<body>
    <form action="search.php" method="post">
        <input type="text" name="search" placeholder="Search">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
    <?php require_once "searchResult.php" ;?>
    <hr>
    <h2>Add New Contact</h2>
    <?php require_once "errors.php" ;?>
    <?php require_once "success.php" ;?>
    <form action="add.php" method="post">
        <input type="text" name="name" placeholder="enter name" required><br>
        <input type="text" name="email" placeholder="enter email" required><br>
        <input type="text" name="phone" placeholder="enter phone" required><br>
        <button type="submit"><i class="fa fa-plus"></i></button>
    </form>
</body>
</html>