<?php
include_once 'db.php';

$errors = false;
if(empty($_POST['email'])){
    $errors = true;
}
if(empty($_POST['password'])){
    $errors = true;
}
if(empty($_POST['firs_name'])){
    $errors = true;
}
if(empty($_POST['last_name'])){
    $errors = true;
}
if ($_POST['password']!= $_POST["passwords"]){
    $errors = true;
}
//var_dump($_POST);
if ($errors) {
header('Location:index.php?page=3&error');
 } else{
      $query= $conn->prepare("INSERT INTO user SET email = ?, password =?, name =?, lastname = ?");
        $result = $query-> execute(){
            $_POST['email'],
            md5($_POST['passwords']),
            $_POST['first_name'],
            $_POST['last_name'],
            ]);
            if($result) {
                $_SESSION['success']
                
            }  
        }
    }

