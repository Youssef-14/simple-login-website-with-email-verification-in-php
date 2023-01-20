<html>
<head>

</head>
<body>
<?php
session_start();

if(isset($_SESSION['compteur'])==0) {
    $_SESSION['compteur'] = 0;
}
echo'Vous avez visité cette page'." ".$_SESSION['compteur']." ".'fois';
$_SESSION['compteur']++;
if(isset($_POST['submit'])){
    $_SESSION['compteur'] = 0;
}
if (isset ($_GET['logout'])){
    $_SESSION['compteur'] = 0;
    header("Location: index.php");
}

?>
<hr>
<a href="?logout">Remetre à zero</a>
</body>
</html>