<!DOCTYPE html>
<html lang="en">
<head>
    -	<meta charset="utf-8">
    <meta name="author" content="Kodinger">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>My Login Page &mdash; Bootstrap 4 Login Page Snippet</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>
<body class="my-login-page">
<section class="h-100">
    <div class="container h-100">
        <div class="row justify-content-md-center h-100">
            <div class="card-wrapper">
                <div class="brand">
                    <a href="../"><img src="img/logo.jpg" alt="logo" ><a/>
                </div>
                <div class="card fat">
                    <div class="card-body">
                        <h4 class="card-title">Login</h4>
                        <form method="POST" name="submit" class="my-login-validation" novalidate="" action="">

                            <div class="form-group">
                                <label for="email">E-Mail Address</label>
                                <input id="email" type="email" class="form-control" name="email" required>
                                <div class="invalid-feedback">
                                    Your email is invalid
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password">Password

                                </label>
                                <input id="password" type="password" class="form-control" name="password" required data-eye>
                                <div class="invalid-feedback">
                                    Password is required
                                </div>
                            </div>
                            <div class="form-group m-0">
                                <button type="submit" name="submit" class="btn btn-primary btn-block">
                                    LOGIN
                                </button>
                            </div>
                        <?php
                        session_start();
                        if(isset($_POST['submit'])){
                            $email = $_POST['email'];
                            $password = $_POST['password'];
                            if($email=="user"&&$password=="123"){
                                    $_SESSION['email'] = $email;
                                    header('location: dashboard.php');
                            }else if($email=="admin"&&$password=="123"){
                                    $_SESSION['email'] = $email;
                                    header('location: dashboard.php');
                            }else{
                                echo "email or password is incorrect";
                            }
                        }

                        ?>

                        </form>
                        <br>

                    </div>
                </div>
                <div class="footer">
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/my-login.js"></script>
</body>
</html>