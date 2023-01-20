<?php    include 'connect_db.php'; ?>

<?php
session_start();

if (isset ($_SESSION['email'])){
    header("Location: ../dashboard.php ");
}

function validateEmail($email) {
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return 1;
    }
    else {
        return 0;
    }
}

if (isset ($_POST['submit'])){
    $email      = strip_tags($_POST['email']);
    $user       = strip_tags($_POST['name']);
    $pass       = strip_tags($_POST['password']);

    if((validateEmail($email)==true)){

        $sql2="select email FROM clients WHERE email='$email'";
        $result = $conn->query($sql2);

        if ($result->num_rows < 1) {
            $sql = "INSERT INTO clients (id,email,user_name,pwd,verified) VALUES ('','$email','$user','$pass','0')";
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
                $_SESSION['email']=$email;
                $_SESSION['user']=$result2;
                header('Location: ../dashboard.php');
                exit();
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        }else{
        echo'email deja saisi';
        }
    }else{
        echo 'format email inavlide';
    }
    $conn->close();
}

?>