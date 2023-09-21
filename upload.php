<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получите имя папки из поля ввода
    $slider_name = $_POST["slider_name"];

    // Проверьте, что имя папки не пусто
    if (!empty($slider_name)) {
        // Путь к директории, в которую будет загружен файл (папка sliders в корне проекта)
        $upload_dir = "../sliders/" . $slider_name . '/';

        // Создайте директорию, если она не существует
        if (!file_exists($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }
        // Проверьте, был ли файл успешно загружен
        if (isset($_FILES["fileToUpload"])) {
            $target_file = $upload_dir . $_FILES["fileToUpload"]["name"];
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "Файл успешно загружен.";
            } else {
                echo "Ошибка при загрузке файла.";
            }
        } else {
            echo "Выберите файл для загрузки.";
        }
    } else {
        echo "Пожалуйста, введите имя папки.";
    }
}
?>