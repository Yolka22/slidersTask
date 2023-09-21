<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $slider_name = $_POST["slider_name"];

    if (!empty($slider_name)) {
        if (mkdir("./sliders/".$slider_name)) {
            echo "Папка успешно создана!";
        } else {
            echo "Не удалось создать папку.";
        }
    } else {
        echo "Пожалуйста, введите имя папки.";
    }
}
?>