<?php    include 'connect_db.php'; ?>

<?php

session_start();
if (!isset ($_SESSION['email'])){
    header("Location: ../dashboard.php ");
}
if (isset ($_POST['submi'])){
    $mail=$_SESSION['email'];
    $subject="Account recovery";
    $alea=rand(10000, 99999);              
    $message="Your recovery code is: ".strval($alea);
    mail($mail,$subject,$message);
    $_SESSION['alea']=$alea;
}

if ((isset ($_POST['submit']))&&(isset ($_SESSION['alea']))){
        $mail=$_SESSION['email'];
        $code = strip_tags($_POST['code']);
        if($code==$_SESSION['alea']){
        $sql2="update clients SET verified=1 WHERE (email='$mail')";
        $result2 = $conn->query($sql2);
        header('Location: ../dashboard.php');
        exit();
        }
        echo'non';
}
?>