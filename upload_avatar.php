<?php
// Передаем значения
session_start();
// Подключение к базе данных
$db = mysqli_connect("localhost", "root", null, "blogout");
// Если директории uploads нет, то создаем ее
if (!file_exists('uploads')) {
    mkdir('uploads', 0777, true);
}
// Если метод запроса - пост, то создаем переменную загруженной аватарки
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $file = $_FILES["avatar"];

    // Если была ошибка при загрузке, то выводим сообщение
    if ($file["error"] != UPLOAD_ERR_OK) {
        die("Ошибка загрузки файла");
    }

    // Создаем переменную с допустимыми типами файла: пнг и жпг. Если загруженное не входит в
    // аррай допустимых типов файлов, выдаем ошибку
    $allowed_types = ["image/jpeg", "image/png"];
    if (!in_array($file["type"], $allowed_types)) {
        die("Недопустимый тип файла");
    }

    // Генерируем уникальное имя для файла и перемещаем его в папку uploads
    $filename = "avatar_" . time() . "_" . rand(1000, 9999) . ".jpg"; // Генерация уникального имени файла
    move_uploaded_file($file["tmp_name"], "uploads/" . $filename);

    // Выбираем id того пользователя которого зовут $name
    $sql = "SELECT id FROM users WHERE name = '{$_SESSION['name']}'";
    $result = mysqli_query($db, $sql);
    // Вытаскиваем id
    $row = mysqli_fetch_assoc($result);
    $user_id = $row['id'];
    // Приписываем к файлу путь uploads
    $avatar_url = "uploads/" . $filename;
    // Обновляем строку avatar в таблице users у того пользователя, у кого id равен $user_id
    $query = "UPDATE users SET avatar = '$avatar_url' WHERE id = $user_id";
    mysqli_query($db, $query);
    // Перенаправляемся на edit.php
    header("Location: main.php");
    exit;

}
?>