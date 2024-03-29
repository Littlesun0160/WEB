<?php
session_start();
if (isset($_POST["Name"]) && isset($_POST["Age"]) && isset($_POST["Emotion"]) && isset($_POST["Choice"]))
{
    $_SESSION["Info"] = [$_POST["Name"], $_POST["Age"],$_POST["Emotion"],$_POST["Choice"]];
}
if (isset($_SESSION["Info"]))
{
    $InfoAboutUser = $_SESSION["Info"];
    echo "<h1>Информация о вас:</h1><ul>";
    foreach ($InfoAboutUser as $item)
    {
        echo "<p><li>$item</li></p>";
    }
    echo "</ul>";
}
?>