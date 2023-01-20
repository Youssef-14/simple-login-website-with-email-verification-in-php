<?php    include 'connect_db.php'; ?>

<?php

session_start();
if (isset ($_SESSION['email'])){
    header("Location: ../dashboard.php ");
}

if (isset ($_POST['submit'])){
    $pass=$_POST['password'];

    $sql1="update clients SET pwd='$pass' WHERE (email='$email')";
    $result1 = $conn->query($sql1);

    //if ($result1->num_rows > 0) {
        echo"operation avec success";
        $_SESSION['email']=$_SESSION['mail'];;
        header('Location: ../dashboard.php');
        exit();
    /*}else{
        echo"email non trouvé";
    }
    $conn->close();*/
}
?>