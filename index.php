<?php
session_start();
$_SESSION['id'] = 'session1';
$_SESSION['page'] = 0;
$_SESSION['points'] = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Stalinist+One&display=swap" rel="stylesheet">
    <title>Home Page</title>
    <style>
        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: inherit;
        }

        html {
            box-sizing: border-box;
            font-family: 'Stalinist One', cursive;
            font-weight: 200;
            background-color: #FFF8F0;
        }

        .container {
            margin: 20px;
            max-height: 70vh;
        }

        img {
            border-radius: 10px;
            display: block;
            margin: auto;
            width: 70%;
        }

        button {
            display: block;
            margin: 10px auto;
            color: #fff;
            width: 68%;
            font-family: 'Stalinist One', cursive;
            font-size: 30px;
            border: none;
            border-radius: 10px;
            background-color: #111D4A;
        }
    </style>
</head>

<body>
    <section>
        <div class="container">
            <form action="niveau1.php">
                <h1 align="center" style="color: #1E1E24;">Le quiz JavaScript étonnamment difficile</h1>
                <img src=" ./jsQuiz.jpg" alt="javascript code on an interface">
                <p align="center" style="color:gray">Que savez-vous vraiment de JavaScript?</p>
                <button type="submit">Répondre au Quiz</button>
            </form>
        </div>
    </section>
</body>

</html>