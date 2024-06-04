<?php
require_once __DIR__ . '/LAB5.php';
function redirectToHome(): void
{
    header('Location:index.php');
    exit();
}

if(false===isset($_POST['email'],$_POST['category'],$_POST['name'],$_POST['description']))
{
    redirectToHome();
}
$sql = extracted();

$category = $_POST['category'];
$name = $_POST['name'];
$desc = $_POST['description'];
$email = $_POST['email'];
$mysqli = extracted();
$mysqli->query("INSERT INTO web.ad (category, title, description, email) VALUES ('$category', '$name', '$desc', '$email')");
redirectToHome();