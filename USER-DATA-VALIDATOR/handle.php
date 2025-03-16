<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // extract data
    $name = trim(htmlspecialchars($_POST['name']));
    $email = trim(htmlspecialchars($_POST['email']));
    $password = trim(htmlspecialchars($_POST['password']));
    $phone = trim(htmlspecialchars($_POST['phone']));
    // validate it
    $errors = [] ;
    // Validate email format
    if(!preg_match("/^\w+@\w+\.\w{2,}$/", $email)){
        $errors['email'] = 'Invalid email format';
    }
    //  Ensure phone number contains only digits and is of valid length
    if(!preg_match("/^\d{11}$/", $phone)){
        $errors['phone'] = 'Invalid phone number';
    }
    // password at least 8 characters, including uppercase, lowercase, number, and symbol
    if(!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[*@#$%&])[A-Za-z\d*@#$%&]{8,}$/" , $password)){
        $errors['password'] = 'Password must be at least 8 characters, including uppercase, lowercase, number, and symbol';
    }
    // check if there are errors
    if(empty($errors)){
        $users = file_get_contents('users.json') ?? [];
        $users = json_decode($users, true);
        $newUser = [
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'phone' => $phone
        ];
        $users[] = $newUser;
        file_put_contents('users.json', json_encode($users , JSON_PRETTY_PRINT));
        $_SESSION['success'] = 'User added successfully';
        header("location:index.php"); exit ;
    }else{
        $_SESSION['errors'] = $errors ;
        header("location:index.php"); exit ;
    }
}else{
    header("location:index.php");
}