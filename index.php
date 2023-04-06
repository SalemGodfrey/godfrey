
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blogout - Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            background-size: border-box;
        }

        body {
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            height: 100vh;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        form {
            background-color: #191919;
            width: 20rem;
            padding: 2rem;

        }

        h2 {
            color: white;
        }

        input {
            border: 2px solid #739dbc;
            border-radius: 50px;
            margin: 0.4rem;
            padding: 0.4rem;
            background-color: transparent;
            color: grey;
            width: 100%;
        }

        .submitBtn {
            border: 2px solid #73bc7f;
            color: white;
            width: 100%;
        }
    </style>

</head>

<body>
    <?php
    // Подключаемся к phpMyAdmin
    $mysql = new mysqli("localhost", "root", null, "blogout");

    // Задаем кодировку utf-8
    $mysql->query("SET NAMES 'utf8'");

    // Проверяем подключение
    if ($mysql->connect_error) {
        echo 'Error number: ' . $mysql->connect_errno . '<br>';
        echo 'Error:' . $mysql->connect_error;
    } else {
        // Если никаких ошибок нет, 
    
        // Если метод запроса пост, то...
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Создаем переменную ссылающуюся на ник
            $name = $_POST['Rnickname'];
            // И на пароль 
            $pass = $_POST['Rpasscode'];
            // Записываем данные в таблицу
            $mysql->query("INSERT INTO `users` (`name`, `password`) VALUES('$name','$pass') ");
            // Ура!
            echo "<p class='text-center'>Registration passed succefully. You can log in with these data now</p>";
        }
    }

    // Закрываем соединение с БД
    $mysql->close();
    ?>
    <div class="d-flex align-items-center justify-content-center h-100">
        <div class="row text-center">
            <div class="col text-center">
                <!-- Форма регистрации-->
                <form method="post" class="text-center" action="index.php">
                    <img src="logo.svg" class="w-100" alt="">
                    <h2>REGISTER</h2>
                    <br>
                    <div class="Rdiv container none">
                        <input type="text" name="Rnickname" placeholder="Username*" id="Rnickname" required><br>
                        <input type="password" name="Rpasscode" placeholder="Password*" id="Rpasscode_1" required><br>
                        <input type="email" name="Remail" placeholder="Email" id="Remail"><br>
                        <input type="submit" value="REGISTER" class="submitBtn">
                    </div>
                    <a href="login.php">Already have an account? Log In!</a>
                </form>
            </div>

        </div>
    </div>
</body>

</html>
