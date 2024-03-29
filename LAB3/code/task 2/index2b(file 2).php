<?php
session_start();
if (isset($_POST["Surname"]) && isset($_POST["Name"]) && isset($_POST["Age"])) {
    $_SESSION["Surname"] = $_POST["Surname"];
    $_SESSION["Name"] = $_POST["Name"];
    $_SESSION["Age"] = $_POST["Age"];
}
if (isset($_SESSION["Surname"]) && isset($_SESSION["Name"]) && isset($_SESSION["Age"]))
{
    $surname = $_SESSION["Surname"];
    $name = $_SESSION["Name"];
    $age = $_SESSION["Age"];
    echo "<h1>Приветствуем,</h1> <h2>$surname $name, $age лет</h2>";
}
?>