<?php
session_start();
$_SESSION['pointsNiv2'] = $_POST['pointsNiv2'];
if (!empty($_SESSION['id'])) {
    if ($_SESSION['page'] == 1) {
        header('location: niveau1.php');
        exit;
    }if ($_SESSION['page'] == 2 || $_SESSION['pointsNiv2'] < 30) {
        header('location: niveau2.php');
    }
    $_SESSION['page'] = 3;
} else {
    header('Location: index.php');
    exit;
}
$_SESSION['totalPoints'] = $_SESSION['pointsNiv1']+$_SESSION['pointsNiv2'];
?>
<!DOCTYPE html>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Stalinist+One&display=swap" rel="stylesheet">
<html lang="en">

<head>
    <meta charset="UTF-8">
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
            margin-top: 10%;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .result{
            max-width: 70vw;
            height: fit-content;
            /*border: 1px solid black;*/
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .congratz{
            width:100%;
            height: 30vh;
            border-radius: 20px;
        }
        .resultat{
            font-size: 45px;
            color: #111D4A;
        }
    </style>
    <title>Results</title>
</head>

<body>
    <section>
        <div class="container">
            <div class="result">
                <img class="congratz" src="./congratz.webp">
                <h1 align="center" style="color: #1E1E24">vous avez obtenu au quiz le résultat suivant :</h1>
                <p>
                    <?php
                        switch ($_SESSION['totalPoints']) {
                            case 60:
                                echo
                            "
                              <h3 style='color:#92140C;'> Passable  </h3>
                              <p class='resultat'> 60/100 </p>
                            ";break;
                            case 70:
                                echo
                                "
                              <h3 style='color:#92140C;'> Assez Bien  </h3>
                              <p class='resultat'> 70/100 </p>
                            ";break;
                            case 80:
                                echo
                                "
                              <h3 style='color:#92140C;'> Bien  </h3>
                              <p class='resultat'> 80/100 </p>
                            ";break;
                            case 90:
                                echo
                                "
                              <h3 style='color:#92140C;'> Tres Bien  </h3>
                              <p class='resultat'> 90/100 </p>
                            ";break;
                            case 100:
                                echo
                                "
                              <h3 style='color:#92140C;'> Parfait  </h3>
                              <p class='resultat'> 100/100 </p>
                            ";break;
                        }
                    ?>
                </p>
            </div>
        </div>
    </section>
</body>

</html>