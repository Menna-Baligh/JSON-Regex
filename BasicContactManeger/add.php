<?php
session_start();
if($_SERVER['REQUEST_METHOD'] === "POST"){
    // extract data
    $name = trim(htmlspecialchars($_POST['name']));
    $email = trim(htmlspecialchars($_POST['email']));
    $phone = trim(htmlspecialchars($_POST['phone']));
    // validate it
    $errors = [];
    // name only letters and space allowed at least 3 chars
    if(!preg_match("/^[a-zA-Z\s]{3,}$/", $name)){
        $errors[] = "name must be at least 3 chars and only letters and space allowed";
    }
    // email
    if(!preg_match("/^\w+@\w+\.\w{2,}$/", $email)){
        $errors[] = "email is not valid";
    }
    // phone
    if(!preg_match("/^\d{11}$/", $phone)){
        $errors[] = "phone is not valid";
    }
    // check if there are errors
    if(empty($errors)){
        // store data in json file
        $contacts =json_decode(file_get_contents('contacts.json'), true) ?? [];
        $data = [
            'name' => $name ,
            'email' => $email , 
            'phone' => $phone
        ];
        $contacts[] = $data;
        $jsonData = json_encode($contacts, JSON_PRETTY_PRINT);
        file_put_contents("contacts.json", $jsonData);
        $_SESSION['success'] = "contact added successfully";
        header("Location: index.php");
        exit;
    }else{
        $_SESSION['errors'] = $errors;
        header("Location: index.php");
        exit;
    }


}else{
    header("Location: index.php");
}