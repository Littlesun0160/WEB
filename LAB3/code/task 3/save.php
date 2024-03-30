<?php
if(false===isset($_POST['email'],$_POST['category'],$_POST['name'],$_POST['description']))
{
    redirectToHome();
}
$category = $_POST['category'];
$name = $_POST['name'];
$desc = $_POST['description'];
$email = $_POST['email'];
$filePath = "{$category}/{$name}.txt";
if(false===file_put_contents($filePath, $desc) || false===file_put_contents($filePath, $email))
{
    throw new Exception('Something went wrong');
}
redirectToHome();
function redirectToHome():void
{
    header('Location:index3.php');
    exit();
}
?>