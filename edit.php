<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile - blogout</title>
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

        .textarea {
            font-family: 'Source Sans Pro', sans-serif;
            width: 100%;
            border-radius: 5px;
            color: #F4B3E2;
            padding: 10px;


        }

        .textarea::placeholder {
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
                            <a class="nav-link" href="read.php">Read Articles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="edit.php">Edit Profile</a>
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
                            </div>

                            <div class="col-md-7">
                                <span
                                    style="padding: 0; margin: 0; font-family: 'DM Serif Display', serif; font-size: 40px;"> <?php echo $_SESSION["name"] ?></span><br>
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

    <main class="container p-3">
        <div class="box p-3 ">
            <ol>
                <li> <a href="#main">Main</a></li>
                <li><a href="#avatar">Avatar</a></li>
                <li><a href="#opt">Optional</a></li>
                <li><a href="#pass">Password</a></li>
            </ol>
        </div>
        <div class="box p-3 mt-3 text-center" id="main">
            <h2>Main</h2>
            <form action="">
                <input type="text" name="nickname" class="textarea night" placeholder="Your Nickname...">
                <input type="text" name="proffesion" class="textarea night mt-2" placeholder="Your Proffesion...">
                <input type="text" name="geolocation" class="textarea night mt-2"
                    placeholder="Your Country and City...">
                <input type="text" name="quote" class="textarea night mt-2" placeholder="Your Favorite Quote...">
                <select name="typeOfBlog" class="textarea night mt-2">
                    <option value="anime">Anime Blog</option>
                    <option value="movie">Movie Blog</option>
                    <option value="books">Literature Blog</option>
                    <option value="politic">Political Blog</option>
                    <option value="music">Music Blog</option>
                    <option value="sport">Sport Blog</option>
                    <option value="science">Science Blog</option>
                    <option value="travel">Travel Blog</option>
                    <option value="web">Web Blog</option>
                    <option value="health">Health Blog</option>
                    <option value="busness">Business Blog</option>
                    <option value="photo">Photo Blog</option>
                    <option value="art">Art Blog</option>
                </select>
                <button class="button-post">Submit</button>
            </form>
        </div>
        <div class="box p-3 mt-3 text-center" id="avatar">
            <h2>Avatar</h2>
            <form action="upload_avatar.php" method="post" enctype="multipart/form-data">
                <div class="border-top border-end border-bottom border-start">
                    <label for="inputTag" class="fileUpload p-5">
                        <input id="inputTag" name="avatar" class="fileOriginal" type="file">
                        Select Image <br>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-camera-fill" viewBox="0 0 16 16">
                            <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                            <path
                                d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z" />
                        </svg>
                    </label>
                </div>
                <button class="button-post">Submit</button>

            </form>
        </div>
        <div class="box p-3 mt-3 text-center" id="opt">
            <h2>Optional</h2>
            <form action="">
                <select name="sex" class="night textarea">
                    <option value="Fem">Female</option>
                    <option value="Mal">Male</option>
                </select>
                <input type="number" class="night textarea mt-2" placeholder="Your age...">
                <button class="button-post">Submit</button>
            </form>
        </div>
        <div class="box p-3 mt-3 text-center" id="pass">
            <h2>Password</h2>
            <form action="">
                 
                <input type="password" class="night textarea mt-2" placeholder="Your old Password...">
                <input type="password" class="night textarea mt-2" placeholder="Your new Password...">
                <input type="password" class="night textarea mt-2" placeholder="Repeat your new Password...">
                <button class="button-post">Submit</button>
            </form>
        </div>
    </main>
</body>

</html>