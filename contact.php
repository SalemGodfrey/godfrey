<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - blogout</title>
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

        #navigation {
            background-color: #212529;
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

        h2 {
            font-family: 'DM Serif Display', serif;
        }

        p {
            font-family: 'Source Sans Pro', sans-serif;
        }

         

        h1 {
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            background-clip: border-box;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-family: 'DM Serif Display', serif;
            font-size: 80px;
            text-align: center;
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
                            <a class="nav-link " aria-current="page" href="main.php">My profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="read.php">Read Articles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="edit.php">Edit Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="contact.php">Contact us</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="search input  me-2  " type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light " type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        <section>
            <h1>We'd love to hear from you!</h1>
                <div class="box p-3">
                    <form action="" method="post">
                    <input type="text" class="night textarea mb-2" placeholder="Your email" name="email"  required>
                    <input type="text" class="night textarea mb-2" placeholder="Theme" name="theme" >
                    <textarea class="night textarea" name="message" placeholder="Your message"  cols="30" rows="10" required></textarea>
                    <div class="post-but-block  w-100 ">
                        <button class="button-post">Send Message</button>
                    </div>
                </form>
                </div>
        </section>
    </main>
</body>

</html>