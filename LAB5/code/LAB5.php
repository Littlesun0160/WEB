<?php
function extracted()
{
$hostname = 'sql';
$username = 'root';
$port = 6603;
$password = 'byeworld';
$database = 'web';

$test = new mysqli($hostname, $username, $password, $database, $port);

if (mysqli_connect_errno())
{
echo "<p>" . "Нет подключения к SQL" . mysqli_connect_error() . "</p>";
}
return $test;
}