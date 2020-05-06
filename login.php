
<?php
    
    $usernamelog = 'alfin';
    $emaillog = 'alf@gmail.com';
    $passlog = '455';
    
    session_start();

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if ($username == $usernamelog && $email == $emaillog && $password == $passlog) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: welcome2.php");
    } 
    else {
        header("Location: login.php");
   }
?>