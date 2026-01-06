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

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #0a0e1a 0%, #1a1f35 50%, #0f1419 100%);
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
        }

        /* Animated background particles */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 50%, rgba(255, 126, 95, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(255, 215, 0, 0.08) 0%, transparent 50%),
                radial-gradient(circle at 40% 20%, rgba(138, 43, 226, 0.1) 0%, transparent 50%);
            animation: bgShift 20s ease infinite;
            pointer-events: none;
            z-index: 0;
        }

        @keyframes bgShift {
            0%, 100% { transform: translate(0, 0) scale(1); }
            33% { transform: translate(30px, -30px) scale(1.1); }
            66% { transform: translate(-30px, 30px) scale(0.9); }
        }

        .main {
            margin-top: 100px;
            min-height: 550px;
            position: relative;
            z-index: 1;
        }

        .oswald {
            font-family: 'Oswald', Sans-Serif;
        }

        .roboto {
            font-family: 'Roboto', Sans-Serif;
        }

        /* Icons Animation */
        .icons {
            width: 65%;
            animation: fadeInDown 1s ease;
        }

        img[alt="chatbot_icon"] {
            width: 50px;
            height: 50px;
            filter: drop-shadow(0 0 20px rgba(255, 126, 95, 0.5));
            animation: float 3s ease-in-out infinite;
            transition: transform 0.3s ease;
        }

        img[alt="chatbot_icon"]:hover {
            transform: scale(1.1) rotate(5deg);
        }

        img[alt="chatbot_icon"]:first-child {
            animation-delay: 0s;
        }

        img[alt="chatbot_icon"]:last-child {
            animation-delay: 0.5s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
        }

        /* Project Name with Enhanced Gradient */
        .proj_name {
            font-size: 4em;
            background: linear-gradient(135deg, #ff7e5f 0%, #feb47b 25%, #ffd700 50%, #ff6b9d 75%, #c471ed 100%);
            background-size: 200% 200%;
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            animation: gradientShift 4s ease infinite, fadeInDown 1.2s ease;
            text-shadow: 0 0 30px rgba(255, 126, 95, 0.3);
            letter-spacing: 2px;
        }

        @keyframes gradientShift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .subtitle-text {
            animation: fadeInUp 1.4s ease;
        }

        @media(max-width: 350px) {
            .proj_name {
                font-size: 2.5em;
            }
        }

        /* Modern Glass Form */
        .proj_form {
            background: rgba(33, 40, 50, 0.4);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            animation: fadeInRight 1.2s ease;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .proj_form::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255, 126, 95, 0.1), transparent);
            transform: rotate(45deg);
            animation: shine 3s infinite;
        }

        @keyframes shine {
            0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
            100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
        }

        .proj_form:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px rgba(255, 126, 95, 0.3);
            border-color: rgba(255, 126, 95, 0.3);
        }

        .proj_form > * {
            position: relative;
            z-index: 1;
        }

        .proj_form input {
            height: 50px;
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #fff;
            padding: 0 20px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .proj_form input:focus {
            outline: none;
            border-color: #ff7e5f;
            background: rgba(255, 255, 255, 0.08);
            box-shadow: 0 0 20px rgba(255, 126, 95, 0.3);
            transform: scale(1.02);
        }

        .proj_form input::placeholder {
            color: rgba(255, 255, 255, 0.4);
        }

        .btn-secondary {
            background: linear-gradient(135deg, #ff7e5f, #feb47b);
            border: none;
            border-radius: 12px;
            padding: 12px 30px;
            font-weight: 600;
            letter-spacing: 1px;
            box-shadow: 0 4px 15px rgba(255, 126, 95, 0.4);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-secondary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s ease;
        }

        .btn-secondary:hover::before {
            left: 100%;
        }

        .btn-secondary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 25px rgba(255, 126, 95, 0.6);
        }

        .btn-secondary:active {
            transform: translateY(0);
        }

        /* Details Cards */
        .details {
            padding: 30px;
            border-radius: 16px;
            background: rgba(33, 40, 50, 0.6);
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: all 0.4s ease;
            animation: fadeInUp 1s ease;
            position: relative;
            overflow: hidden;
        }

        .details::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, #ff7e5f, #feb47b, #ffd700);
            transform: scaleX(0);
            transition: transform 0.4s ease;
        }

        .details:hover::before {
            transform: scaleX(1);
        }

        .details:nth-child(1) {
            animation-delay: 0.2s;
        }

        .details:nth-child(2) {
            animation-delay: 0.4s;
        }

        .details:nth-child(3) {
            animation-delay: 0.6s;
        }

        .details:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 40px rgba(255, 126, 95, 0.3);
            background: rgba(33, 40, 50, 0.8);
            border-color: rgba(255, 126, 95, 0.2);
        }

        .details p {
            line-height: 1.8;
            color: rgba(255, 255, 255, 0.9);
        }

        /* Welcome heading animation */
        .welcome-heading {
            animation: fadeInLeft 1s ease;
        }

        .welcome-subtext {
            animation: fadeInLeft 1.2s ease;
        }

        /* Pulse animation for emphasis */
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }

        /* Smooth scroll behavior */
        html {
            scroll-behavior: smooth;
        }

        /* Loading state for form */
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <div class="container-fluid mb-5 d-flex align-items-center justify-content-center main">
        <div class="container d-grid justify-content-center align-content-center">
            <div class="row mb-3">
                <!-- Project Title-->
                <div class="col-12 col-md-6 d-grid justify-content-center align-content-center">
                    <div class="icons d-flex justify-content-center">
                        <img src="chatbot.jpg" alt="chatbot_icon" class="img-fluid">
                        <span class="mx-1"></span>
                        <img src="nyan.png" alt="chatbot_icon" class="img-fluid">
                    </div>
                    <p class="proj_name oswald fw-bold text-center">
                        IntelliChat
                    </p>
                    <p class="roboto text-light text-center subtitle-text">
                        Your intelligent AI assistant, ready to help you communicate effortlessly and efficiently.
                    </p>
                </div>
                <!-- Username-->
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <div class="d-grid p-4 proj_form">
                        <p class="text-light roboto fw-bold h3 welcome-heading">
                            Welcome!
                        </p>
                        <p class="text-light roboto welcome-subtext">
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

    <div class="container-fluid mb-5 pb-5">
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