<?php

//Задание №1(1 пункт)
$text = 'ahb acb aeb aeeb adcb axeb';
$regexp = '/a[a-zA-Z]{2}b/';
$matches = [];
$count = preg_match_all($regexp, $text, $matches);
echo "<b>Найдено строк:</b> {$count}<br/>";
echo "<b>Найденные строки:</b> ";
foreach ($matches[0] as &$str)
    echo "$str ";
echo "<br/>";
?>