<?php
// Проверяем, есть ли параметр 'name' в URL
if (isset($_GET['name'])) {
    // Извлекаем значение параметра 'name'
    $name = $_GET['name'];
    
    // Выводим значение 'name'
    echo "Name: " . htmlspecialchars($name);
} else {
    echo "Параметр 'name' не передан.";
}
?>
