
<?php    include 'connect_db.php'; ?>

<?php
    $email      = $_POST['email'];
    $user       = $_POST['name'];
    $message    = $_POST['message'];

    $sql = "INSERT INTO comments (id,email,user_name,messages) VALUES ('','$email','$user','$message')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
  
    $conn->close();
?>
