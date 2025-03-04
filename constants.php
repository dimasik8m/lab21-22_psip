<?php
// Создание константы
define("NUM_E", 2.71828);
echo "Число e равно " . NUM_E . "<br>";

// Присваивание значения переменной
$num_e1 = NUM_E;
echo "Тип переменной num_e1: " . gettype($num_e1) . "<br>";

// Преобразование типов
$num_e1 = (string)$num_e1;
echo "Тип после преобразования в строку: " . gettype($num_e1) . ", значение: $num_e1<br>";

$num_e1 = (int)$num_e1;
echo "Тип после преобразования в целое: " . gettype($num_e1) . ", значение: $num_e1<br>";

$num_e1 = (bool)$num_e1;
echo "Тип после преобразования в булевское: " . gettype($num_e1) . ", значение: $num_e1<br>";
?>
