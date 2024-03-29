<?php
echo '<h2>Задание №1(а)</h2>';
$text = 'ahb acb aeb aeeb adcb axeb';
$regexp = '/a[a-zA-Z]{2}b/';
$matches = [];
$count = preg_match_all($regexp, $text, $matches);
echo "<b>Найдено строк:</b> {$count}<br/>";
echo '<b>Найденные строки:</b> ';
foreach ($matches[0] as &$str)
    echo "$str ";
echo "<br/>";

echo '<h2>Задание №1(b)</h2>';
$text = 'a1b2c3';
$regexp = '/[0-9]+/';
//Чтобы возвести числа в куб, необходимо ввести функцию в месте $replacement
$result = preg_replace_callback($regexp,
    function ($matches)
    {return pow($matches[0], 3);},
    $text);
echo "<b>Результат замены:</b> {$result}<br/>";

echo "<br/><a href='./task 2/index2a.php'><h2>Задание №2(пункт а)</h2></a>";
echo "<a href='task 2/index2b(file 1).php'><h2>Задание №2(пункт b)</h2></a>";
?>