<html>
<head>
</head>
<body>
<?php
setcookie('compteur', 1) ;
if(isset($_COOKIE['compteur'])==0) {
    $_COOKIE['compteur'] = 0;
}
echo'Vous avez visité cette page'." ".$_COOKIE['compteur']." ".'fois';
$_COOKIE['compteur']++;
if(isset($_POST['submit'])){
    $_COOKIE['compteur'] = 0;
}
if (isset ($_GET['logout'])){
    $_COOKIE['compteur'] = 0;
    header("Location: index.php");
}
?>
<hr>
<a href="?logout">Remetre à zero</a>
</body>
</html>