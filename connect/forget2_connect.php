<?php    include 'connect_db.php'; ?>

<?php

session_start();
if (isset ($_SESSION['email'])){
    header("Location: ../dashboard.php ");
}
if (isset ($_POST['submit'])){
        $code      = strip_tags($_POST['code']);
        if($code==$_SESSION['code']){
        
        header('Location: reset.php');
        exit();
        }
        echo'non';
}
?>