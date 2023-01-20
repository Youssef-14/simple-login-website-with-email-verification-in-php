<?php    include 'connect_db.php'; ?>

<?php

session_start();
if (isset ($_SESSION['email'])){
    header("Location: ../dashboard.php ");
}

if (isset ($_POST['submit'])){
    $email      = strip_tags($_POST['email']);
    $pass       = strip_tags($_POST['password']);

    $sql1="select email,pwd FROM clients WHERE (email='$email')AND(pwd='$pass')";
    $result1 = $conn->query($sql1);

    $sql2="select user_name FROM clients WHERE email='$email'";
    $result2 = $conn->query($sql2);

    if ($result1->num_rows > 0) {
        echo"connextion avec succes";
        $_SESSION['email']=$email;
        header('Location: ../dashboard.php');
        exit();
    }else{
        echo"email ou passwors non valide";
    }
    $conn->close();
}
?>