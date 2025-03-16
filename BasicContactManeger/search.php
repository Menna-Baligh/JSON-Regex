<?php
session_start();
if($_SERVER['REQUEST_METHOD'] === "POST"){
    $pattern = trim(htmlspecialchars($_POST['search']));

    $contacts = json_decode(file_get_contents('contacts.json'), true) ?? [];
    if(empty($pattern)){
        header("location:index.php"); exit ;
    }else{
        $pattern = "/$pattern/i" ;
        $matchedValues = [] ;
        foreach ($contacts as $contact) {
            if (preg_match($pattern, $contact['name'])) {
                $matchedValues[] = $contact;
            }
        }
        $_SESSION['search'] = $matchedValues ;
        header("location:index.php"); exit ;
    }

}else{
    header("location:index.php");
}