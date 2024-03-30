<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Счетчик слов</title>
</head>
<body>
<header>
    <h1>Счетчик слов!</h1>
</header>
<form method="post">
    <label>
        <textarea name ="TextInput" cols="100" rows="15" placeholder="Введите текст! Введите текст! Введите текст!"></textarea>
    </label>
    <p><input type="submit" value="Отправить"></p>
</form>
<?php
if(isset($_POST["TextInput"]))
{
    $text = $_POST['TextInput'];
}
else {$text ='';}
$regexp = '/[a-zа-яё0-9]+/ui';
$matches = [];
$count = preg_match_all($regexp, $text, $matches);
?>
<p>Количество слов в тексте: <?php echo $count?></p>
<p>Длина текста: <?php echo mb_strlen($text)?></p>
</body>
</html>