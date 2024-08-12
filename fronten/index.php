<?php
include('username.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IntelliChat</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
        /* OSWALD FONT */
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        /* ROBOTO FONT */
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

        body {
            background: #151923;
        }

        * {
            /*
            outline: 1px solid red;
            */
        }
        .main {
            margin-top: 200px;
            height: 450px;
        }
        .proj_name {
            font-size: 4em;
            background: linear-gradient(to right, #ff7e5f, yellow);
            -webkit-background-clip: text;
            color: transparent;
        }
        @media(max-width: 350px) {
            .proj_name {
                font-size: 2.5em;
            }
        }
        .oswald {
            font-family: 'Oswald', Sans-Serif;
        }
        .roboto {
            font-family: 'Roboto', Sans-Serif;
        }
        .proj_form {
            background: rgba(33,40,50,0.5);
            border-radius: 6px;

        }
        .proj_form input {
            height: 40px;
            border-radius: 6px;
            background: transparent;
            border: .5px solid #6c747e;
        }
        .details {
            padding: 20px;
            border-radius: 5px;
            background: rgb(33,40,50);
            box-shadow: 5px 5px 20px  black;
            width: 320px;
        }
        
        img[alt="chatbot_icon"]{
            width: 40px;
            height: 40px;
        }
        .icons{
            width: 65%;
        }
    </style>
</head>
<body>
    <div class="container-fluid mb-5 d-flex align-items-center justify-content-center main">


        <div class="container d-grid justify-content-center align-content-center">
            <div class="row mb-3">
                <!-- Project Title-->
                <div class="col-12 col-md-6  d-grid justify-content-center align-content-center">
                    <div class="icons d-flex justify-content-center">
                        <img src="chatbot.jpg" alt="chatbot_icon" class="img-fluid">
                        <span class="mx-1"></span>
                        <img src="nyan.png" alt="chatbot_icon" class="img-fluid">
                    </div>
                    <p class="proj_name oswald fw-bold text-center">
                        IntelliChat
                    </p>
                    <p class="roboto text-light text-center">
                        Your intelligent AI assistant, ready to help you communicate effortlessly and efficiently.
                    </p>
                </div>
                <!-- Username-->
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <div class="d-grid p-3 proj_form">
                        <p class="text-light roboto fw-bold h3">
                            Welcome!
                        </p>
                        <p class="text-light roboto">
                            Please enter your Username!
                        </p>
                        <form action="index.php" method="get">
                            <!-- Input Username -->
                            <input type="text" name="username" class="text-light roboto w-100" required placeholder="Username">
                            <button name="submit" class="btn btn-secondary roboto mt-3 mb-3 w-100">Get Started!</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-4 details mx-3 mt-3">
                    <p class="text-light roboto">
                        IntelliChat leverages advanced artificial intelligence to understand and respond to your queries in a natural, human-like manner. Whether you need assistance with day-to-day tasks, quick answers to your questions, or just someone to chat with, IntelliChat is here to make your life easier.
                    </p>
                </div>
                <div class="col-12 col-md-4 details mx-3 mt-3">
                    <p class="text-light roboto">
                        With continuous learning and adaptation, IntelliChat improves over time to provide more accurate and personalized responses. Enjoy seamless communication across multiple platforms, and let IntelliChat assist you with its powerful, user-friendly interface.
                    </p>
                </div>
                <div class="col-12 col-md-4 details mx-3 mt-3">
                    <p class="text-light roboto">
                        Experience the future of AI communication with IntelliChat, where technology meets convenience, and efficiency meets intelligence.
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>