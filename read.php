<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read - blogout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Libre+Franklin:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <style>
        /* font-family: 'DM Serif Display', serif;
        font-family: 'Libre Franklin', sans-serif;
        font-family: 'Source Sans Pro', sans-serif; */
        .venom {
            font-family: 'DM Serif Display', serif;
        }

        .slim {
            font-family: 'Libre Franklin', sans-serif;
        }

        .solid {
            font-family: 'Source Sans Pro', sans-serif;
        }

        .logotype {
            width: 9rem;
        }

        .input {
            background-color: transparent;
            border: 1px solid white;
            padding: 5px;
            color: white;
            outline: none;
        }

        .btn,
        .btn-outline-light {
            border-radius: 0 !important;
        }

        body {
            background-color: #1b1d1f;
            color: #F4B3E2;
        }

        .bg {
            background-image: url('270156.webp');
            background-size: cover;
            background-position: center;
            height: 20rem;
        }

        .avatar {
            border-radius: 100%;
            width: 200px;
            margin: 1rem auto;
            justify-content: center;

            display: flex;
        }


        #navigation {
            background-color: #212529;
        }

        .flexing-bottom {
            display: flex;
            align-items: flex-end;
        }

        .avatar {
            border: #212529 2px solid;
        }

        .button-follow {
            background-color: purple;
            border: 0;
            outline: 0;
            color: #F4B3E2;
            padding: 0.7rem;
            width: 90%;
            margin: 1rem;
            font-family: 'DM Serif Display', serif;
            font-weight: bold;
            box-shadow: rgb(61, 0, 85) 5px 5px;
            display: flex;
            justify-content: center;
            text-align: center;

        }

        .button-follow:hover {
            animation: heartBeat;
            animation-duration: 1s;
        }

        .button-follow:active {
            box-shadow: rgb(61, 0, 85) 1px 1px;
            transition: ease-in 0.1s;
        }

        a {
            color: rgb(255, 0, 255);
            font-family: 'Libre Franklin', sans-serif;
            font-weight: 200;
        }

        a:hover {
            color: palevioletred;
        }

        .box {
            background-color: #242628;
            width: 100% !important;

        }

        .followers {
            text-decoration: none;
        }

        .night {
            background-color: #1b1d1f;
            outline: none;
            border: none;
        }

        .button-post {
            background-color: purple;
            border: 0;
            outline: 0;
            color: #F4B3E2;
            padding: 0.7rem;
            margin-top: 0.7rem;
            font-family: 'DM Serif Display', serif;
            font-weight: bold;
            box-shadow: rgb(61, 0, 85) 5px 5px;
            display: flex;
            justify-content: center;
            text-align: center;
            width: 100%;

        }

        .button-post:hover {
            animation: heartBeat;
            animation-duration: 1s;
        }

        .button-post:active {
            box-shadow: rgb(61, 0, 85) 1px 1px;
            transition: ease-in 0.1s;
        }

        textarea {
            font-family: 'Source Sans Pro', sans-serif;
            width: 100%;
            border-radius: 5px;
            color: #F4B3E2;
            padding: 10px;


        }

        textarea::placeholder {
            font-family: 'Libre Franklin', sans-serif;
            font-weight: 100;
        }

        .post-label {
            font-family: 'Source Sans Pro', sans-serif;
            width: 100%;
            border-radius: 5px;
            color: #F4B3E2;
            padding: 10px;
            margin-bottom: 10px;
        }

        .post-label::placeholder {
            font-family: 'Libre Franklin', sans-serif;
            font-weight: 100;
        }

        .fileOriginal {
            display: none;
        }

        .fileUpload {
            cursor: pointer;
            width: 100%;
            text-align: center;
        }

        h2 {
            font-family: 'DM Serif Display', serif;
        }

        p {
            font-family: 'Source Sans Pro', sans-serif;
        }

        .date {
            color: gray;
            font-family: 'Libre Franklin', sans-serif;
            font-weight: 100;
            font-style: italic;
        }

        .readMore {
            font-family: 'Libre Franklin', sans-serif;
            font-weight: 700;
        }

        .likes,
        .dislikes,
        .comments {
            font-family: 'DM Serif Display', serif;
            font-size: 30px;
        }

        .userName {
            font-size: 25px;
            width: 100%;
            display: block;
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <nav id="navigation" class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="LOGO.svg" class="logotype" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="main.php">My profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="read.php">Read Articles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="edit.php">Edit Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact us</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="search input  me-2  " type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light " type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <header>
            <div class="container">
                <div class="row">
                    <aside class="col-md-3  p-4 ">
                        <div class="sticky-top ">
                            <div class="box p-3">
                            <?php
                                // Подключаемся к phpMyAdmin
                                $mysql = new mysqli("localhost", "root", null, "blogout");

                                // Задаем кодировку utf-8
                                $mysql->query("SET NAMES 'utf8'");

                                // Проверяем подключение
                                if ($mysql->connect_error) {
                                    echo 'Error number: ' . $mysql->connect_errno . '<br>';
                                    echo 'Error:' . $mysql->connect_error;
                                }
                                // Если все ок, то
                                else {

                                    // Получение информации о пользователе из базы данных
                                    $user_id_query = "SELECT id FROM users WHERE name = '{$_SESSION["name"]}'";
                                    $user_id_result = mysqli_query($mysql, $user_id_query);
                                    $user_id_row = mysqli_fetch_assoc($user_id_result);
                                    $user_id = $user_id_row["id"]; // ID пользователя, чей профиль отображаем
                                    $query = "SELECT * FROM users WHERE id = $user_id";
                                    $result = mysqli_query($mysql, $query);
                                    $user = mysqli_fetch_assoc($result);

                                    // Отображение аватара
                                    echo "<img class='avatar' src='" . $user['avatar'] . "'>";
                                }
                                 ?>
                                <span class="venom userName"><?php echo $_SESSION["name"] ?></span>
                            </div>
                            <div class="box p-3 mt-2">
                                <div class="text-center venom" style="font-size: 25px ">Tags</div>
                                <ul class="row list">
                                    <div class="col-md-6">
                                        <li class="list-group-item" style="width: fit-content;"> Anime</li>
                                        <li class="list-group-item" style="width: fit-content;"> Movies</li>
                                        <li class="list-group-item" style="width: fit-content;"> Literature</li>
                                        <li class="list-group-item" style="width: fit-content;"> Politics</li>
                                        <li class="list-group-item" style="width: fit-content;"> Music</li>
                                        <li class="list-group-item" style="width: fit-content;"> Sports</li>
                                        <li class="list-group-item" style="width: fit-content;"> Science</li>
                                    </div>
                                    <div class="col-md-6">

                                        <li class="list-group-item" style="width: fit-content;">Travel</li>
                                        <li class="list-group-item" style="width: fit-content;">Web</li>
                                        <li class="list-group-item" style="width: fit-content;">Health</li>
                                        <li class="list-group-item" style="width: fit-content;">Business</li>
                                        <li class="list-group-item" style="width: fit-content;">Photo</li>
                                        <li class="list-group-item" style="width: fit-content;">Art</li>
                                    </div>
                                </ul>
                            </div>

                        </div>
                    </aside>
                    <main class="col-md-9 ">
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
                            $sql = "SELECT * FROM article ORDER BY id DESC";
                            $result = mysqli_query($mysql, $sql);

                            while ($row = mysqli_fetch_assoc($result)) {
                                include('article.php');
                            }

                        }



                        // Закрываем соединение с БД
                        $mysql->close();
                        ?>

                    </main>
                </div>
            </div>
        </header>