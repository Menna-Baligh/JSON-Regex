<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Form</title>
    </head>
    <?php session_start() ;?>
    <body>
        <h1>Form</h1>
        <?php require_once "../BasicContactManeger/success.php" ;?>
        <form method="post" action="handle.php">
            <div class="form-group">
                <label for="exampleInputname">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputname" placeholder="Name" required>
                
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                <?php
                    if(isset($_SESSION['errors']['email'])){?>
                        <div class="alert alert-danger"><?=$_SESSION['errors']['email'] ?></div>
                    <?php } unset($_SESSION['errors']['email']);
                ?>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                <?php
                    if(isset($_SESSION['errors']['password'])){?>
                        <div class="alert alert-danger"><?=$_SESSION['errors']['password'] ?></div>
                    <?php } unset($_SESSION['errors']['password']);
                ?>
            </div>
            <div class="form-group">
                <label for="exampleInputPhone">Phone</label>
                <input type="text" name="phone" class="form-control" id="exampleInputPhone" placeholder="Phone" required>
                <?php
                    if(isset($_SESSION['errors']['phone'])){?>
                        <div class="alert alert-danger"><?=$_SESSION['errors']['phone'] ?></div>
                    <?php } unset($_SESSION['errors']['phone']);
                ?>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        
    </body>
</html>