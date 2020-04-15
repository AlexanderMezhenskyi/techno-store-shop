<?php

//1. Создаем подключение и записываем его в переменную
$db = new PDO('mysql:host=localhost;dbname=admin_int-shop;charset=utf8', 'admin_int-shop', 'HKJrzBcTTg');

//2. Описываем запрос к базе данных
$sql = "SELECT * FROM products";

//3. Выполняем запрос к базе данных и результат записываем в переменную
$result = $db->query($sql);

//4. Преобразовываем ответ в ассоциативный массив и зыписываем в переменную
$products = $result->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($products);
echo '</pre>';
