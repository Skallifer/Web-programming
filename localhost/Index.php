<?php
$link = mysqli_connect("localhost", "root", "");

if ($link == false){
    print("Помилка: Неможливо підключити до MySQL " . mysqli_connect_error());
}
else {
    header("Location: /Lab_6.html");
    print("зв'язок успішно встановлений");
}

$url = basename(__FILE__);
print($url);
?>