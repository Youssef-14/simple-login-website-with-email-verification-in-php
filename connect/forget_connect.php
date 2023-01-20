<?php    include 'connect_db.php'; ?>

<?php

session_start();
if (isset ($_SESSION['email'])){
    header("Location: ../dashboard.php ");
}

if (isset ($_POST['submit'])){
    $email      = strip_tags($_POST['email']);
    $sql1="select email FROM clients WHERE email='$email'";
    $result1 = $conn->query($sql1);

    if ($result1->num_rows > 0) {
        echo"email envoyée";
        $subject="Account recovery";
        $alea=rand(10000, 99999);
        /*$sql2="update users SET recovery='$alea' WHERE (email='$email')";
        $result2 = $conn->query($sql1);*/
        $message="Your recovery code is: ".strval($alea);
        mail($email,$subject,$message);
        $_SESSION['code']=$alea;
        $_SESSION['mail']=$email;
        header('Location: forget2.php');
        exit();
    }else{
        echo"email non trouvé";
    }
    $conn->close();
}
?>