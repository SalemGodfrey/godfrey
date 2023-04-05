<?php
// Подключаемся к БД
$mysqli = new mysqli("localhost", "root", null, "blogout");
// Если директории uploads нет, то создаем ее
if (!file_exists('uploads')) {
    mkdir('uploads', 0777, true);
}

// Проверяем подключение
if ($mysqli->connect_error) {
    die("Ошибка подключения: " . $mysqli->connect_error);
}

// Задаем кодировку utf-8
$mysqli->set_charset("utf8");

// Если метод запроса POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Заголовок
    $heading = $_POST['article_heading'];
    // Автор
    $author = $_POST['article_author'];
    // Текст
    $text = $_POST['article_text'];
    // Картинка
    $thumb = $_FILES["article_image"];
    // Если была ошибка при загрузке картинки, то выводим сообщение
    if ($thumb["error"] != UPLOAD_ERR_OK) {
        die("Ошибка загрузки файла");
    }
    // Создаем переменную с допустимыми типами файла: пнг и жпг. Если загруженное не входит в
    // аррай допустимых типов файлов, выдаем ошибку
    $allowed_types = ["image/jpeg", "image/png"];
    if (!in_array($thumb["type"], $allowed_types)) {
        die("Недопустимый тип файла");
    }
    // Генерируем уникальное имя для файла и перемещаем его в папку uploads
    $filename = "thumbnail_" . time() . "_" . rand(1000, 9999) . ".jpg"; // Генерация уникального имени файла
    move_uploaded_file($thumb["tmp_name"], "uploads/" . $filename);
    // Приписываем к файлу путь uploads
    $thumb_url = "uploads/" . $filename;
    // Записываем данные в таблицу
    $stmt = $mysqli->query("INSERT INTO `article` (`heading`, `text`, `who`, `thumb`, `date`) VALUES ('$heading', '$text', '$author', '$thumb_url', NOW())");
    // $date = date("Y-m-d H:i:s");
    // $stmt->bind_param("sssss", $heading, $text, $author, $thumb_url, $date);   
    // $stmt->execute();
    // $stmt->close();

    // Перенаправляем на главную страницу
    header("Location: main.php");
}

// Закрываем соединение с БД
$mysqli->close();
?>
