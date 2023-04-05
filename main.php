<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile - blogout</title>
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
            margin: 2rem;
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
            display: inline-block;
            margin-top: 10px;
        }

        .likes,
        .dislikes,
        .comments {
            font-family: 'DM Serif Display', serif;
            font-size: 30px;
        }

        .text {
            overflow: hidden;
            height: 1em;
            line-height: 1.2em;
        }

        .text.show-more {
            height: auto;
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
                            <a class="nav-link active" aria-current="page" href="main.php">My profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="read.php">Read Articles</a>
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

        <section id="hero">
            <div class="container-fluid" style="--bs-gutter-x: 0 !important;">
                <div class="bg  h-100">
                    <div class="container ">
                        <div class="row flexing-bottom">
                            <div class="col-md-3">
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

                                    // Выбираем id того пользователя которого зовут $name
                                    $user_id_query = "SELECT id FROM users WHERE name = '{$_SESSION["name"]}'";
                                    $user_avatar_query = "SELECT avatar FROM users WHERE name = '{$_SESSION["name"]}'";
                                    $user_id_result = mysqli_query($mysql, $user_id_query);
                                    $user_avatar_result = mysqli_query($mysql, $user_avatar_query);
                                    // Получаем столбец id
                                    $user_id_row = mysqli_fetch_assoc($user_id_result);
                                    $user_avatar_row = mysqli_fetch_assoc($user_avatar_result);
                                    $user_id = $user_id_row["id"];
                                    $user_avatar = $user_avatar_row["avatar"];
                                    // Выбираем всех пользователей из таблицы users у кого id - $user_id
                                    $query = "SELECT * FROM users WHERE id = $user_id";
                                    $result = mysqli_query($mysql, $query);
                                    $user = mysqli_fetch_assoc($result);


                                    // Отображение аватара
                                    if ($user_avatar === null) {
                                        echo "<img class='avatar' src='defaoult_user_image.svg'>";
                                    } else {
                                        echo "<img class='avatar' src='" . $user['avatar'] . "'>";
                                    }
                                }
                                ?>
                            </div>

                            <div class="col-md-7">
                                <span
                                    style="padding: 0; margin: 0; font-family: 'DM Serif Display', serif; font-size: 40px;"><?php echo $_SESSION["name"] ?></span><br>
                                <span
                                    style="font-family:'Times New Roman', Times, serif; font-size: 20px; font-weight: bold;">Anime
                                    Blog</span> <br>
                                <span> <i style="  font-family: 'Libre Franklin', sans-serif; font-weight: 600;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-briefcase-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5z" />
                                            <path
                                                d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z" />
                                        </svg> &nbsp; Journalist</i></span><br><i
                                    style="font-family: 'Libre Franklin', sans-serif;font-weight: 600;"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                    </svg> &nbsp;Georgia, Tbilisi</i><br>
                                <blockquote> <i
                                        style="  font-family: 'Libre Franklin', sans-serif; font-weight: 300;">-“Life is
                                        a waterfall. We're one in the river and one again after the fall„</i>
                                </blockquote>
                            </div>
                            <div class="col-md-2">
                                <button class="button-follow ">FOLLOW</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>
    </header>
    <div class="container">
        <div class="row">



            <!-- <div > -->
            <aside class="col-md-3  p-3">
                <div>
                    <div class="box p-3">
                        <div
                            style="font-variant: small-caps;font-family: 'DM Serif Display', serif; font-size: 30px; text-align: center; width: 100%; padding: 0; margin: 0;">
                            social
                            accounts</div>
                        <hr>
                        <ul>

                            <li class="social"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                    <path
                                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                </svg> <a href="#">
                                    <?php echo $_SESSION["name"] ?>'s Twitter
                                </a> </li>
                            <li class="social"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                </svg> <a href="#">
                                    <?php echo $_SESSION["name"] ?>'s Facebook
                                </a> </li>
                            <li class="social"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-pinterest" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z" />
                                </svg> <a href="#">
                                    <?php echo $_SESSION["name"] ?>'s Pinterest
                                </a> </li>
                            <li class="social"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                </svg> <a href="#">
                                    <?php echo $_SESSION["name"] ?>'s Instagram
                                </a> </li>
                        </ul>
                    </div>
                    <br>
                    <div class="box p-3">
                        <div
                            style="font-variant: small-caps;font-family: 'DM Serif Display', serif; font-size: 30px; text-align: center; width: 100%; padding: 0; margin: 0;">
                            followers 315</div>
                        <hr>
                        <ul>

                            <li> <a href="#" class="followers"> Nerian Fieldhouse</a> </li>
                            <li> <a href="#" class="followers"> Steadman Hartshorn</a> </li>
                            <li> <a href="#" class="followers"> Barton Burks</a> </li>
                            <li> <a href="#" class="followers"> Galan Carll</a> </li>
                            <li> <a href="#" class="followers"> Montgomery Fildes</a> </li>
                            <li> <a href="#" class="followers"> Algar Hazle</a> </li>
                        </ul>
                        <a href="#"> Show all...</a>

                    </div>
                    <br>
                    <div class="box p-3">
                        <div
                            style="font-variant: small-caps;font-family: 'DM Serif Display', serif; font-size: 30px; text-align: center; width: 100%; padding: 0; margin: 0;">
                            following 27</div>
                        <hr>
                        <ul>

                            <li> <a href="#" class="followers"> Ilon Musk</a> </li>
                            <li> <a href="#" class="followers"> Eminem</a> </li>
                            <li> <a href="#" class="followers"> Jenna Ortega</a> </li>
                            <li> <a href="#" class="followers"> Hideo Kojima</a> </li>
                            <li> <a href="#" class="followers"> Jason Schreier</a> </li>
                            <li> <a href="#" class="followers"> Peter Parker</a> </li>
                        </ul>
                        <a href="#"> Show all...></a>

                    </div>
                </div>
            </aside>


            <main class="col-md-9 p-3">

                <div class="box p-3 ">
                    <div class="form-block">

                        <form action="add_article.php" method="post" enctype="multipart/form-data">
                            <div class="inp-block">
                                <input type="text" name="article_heading" placeholder="Your article name..."
                                    class="night post-label" required>
                                <textarea name="article_text" class="night" placeholder="Your article text..." cols="30"
                                    rows="7" required></textarea>
                                <label for="inputTag" class="fileUpload">
                                    <input id="inputTag" name="article_image" class="fileOriginal" type="file">
                                    Select Image
                                </label>
                                <input type="hidden" name="article_author" value="<?php echo $_SESSION["name"] ?>">
                            </div>
                            <div class="post-but-block  w-100 ">
                                <input type="submit" value="Post Article" class="button-post">
                            </div>
                        </form>
                    </div>
                </div>
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
                    // Команда sql запроса где выбираются все записи в таблице article где строка who равна 
                    // введенному нами логину, и сортируем все по убыванию id
                    $sql = "SELECT * FROM article WHERE who = '{$_SESSION["name"]}' ORDER BY id DESC";
                    // Выполняем sql запрос
                    $result = mysqli_query($mysql, $sql);
                    // И печатаем все посты
                    while ($row = mysqli_fetch_assoc($result)) {
                        include('article.php');
                    }

                }
                // Закрываем соединение с БД
                $mysql->close();
                ?>

                <div class="text-center p-3">
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-secondary">
                            1
                            <span class="visually-hidden">Button</span>
                        </button>
                        <button type="button" class="btn btn-outline-secondary">
                            2
                            <span class="visually-hidden">Button</span>
                        </button>
                        <button type="button" class="btn btn-outline-secondary">
                            3
                            <span class="visually-hidden">Button</span>
                        </button>
                    </div>
                </div>

            </main>


        </div>
    </div>
</body>

</html>