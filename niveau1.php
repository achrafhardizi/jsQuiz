<?php
session_start();
if (!empty($_SESSION['id'])) {
    $_SESSION['page'] == 1;
} else {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Stalinist+One&display=swap" rel="stylesheet">
    <title>Niveau 1</title>
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

        header {
            display: flex;
            justify-content: center;
            color: white;
            align-items: center;
            background-color: #111D4A;
            min-height: 3em;
        }

        .displayNone {
            display: none !important;
        }

        .quizBox {
            margin: 20px;
        }

        .question {
            color: #1E1E24;
            font-size: 24px;
            font-weight: 400;
        }

        .radiocontainer {
            position: relative;
            background-color: #FFCF99;
            display: block;
            padding: 10px 10px 10px 50px;
            margin-bottom: 1px;
            cursor: pointer;
            font-size: 18px;
            word-wrap: break-word;
            border-radius: 0 10px 0 10px;
        }

        .errorDialog {
            font-size: 12px;
            padding: 12px;
            margin-top: 5px;
            color: white;
            background-color: #92140C;
            border-radius: 10px;
            display: flex;
            align-items: center;
        }

        .btn-confirmer {
            font-family: 'Stalinist One', cursive;
            border: none;
            border-radius: 15px;
            margin-top: 20px;
            padding: 18px 26px;
            overflow: hidden;
            font-size: 16px;
            color: whitesmoke;
            background-color: #111D4A;
            text-align: center;
            cursor: pointer;
        }

        .btn-next {
            font-family: 'Stalinist One', cursive;
            border: none;
            border-radius: 50% 20% / 10% 40%;
            margin-top: 20px;
            padding: 18px 26px;
            overflow: hidden;
            font-size: 16px;
            color: whitesmoke;
            background-color: #111D4A;
            text-align: center;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <?php

    ?>
    <header>
        <p>
            JavaScript Quiz - Niveau 1
        </p>
    </header>

    <section>
        <div class="quizBox" name="quizBox">
            <form id="quizForm" action="niveau2.php" method="post">
                <div class="questionForm displayNone">
                    <div class="question" name="question">
                        <p> <span style="color:#92140C; font-size: 23px;">1. </span> À quoi sert JavaScript?</p>
                    </div>
                    <div class="options">
                        <label class="radiocontainer" name="option1">
                            <input type="radio" name="quizQuestion1" id="1">
                            JavaScript ... Hein! à quoi cela sert-il? Absolument rien !
                        </label>
                        <label class="radiocontainer" name="option2">
                            <input type="radio" name="quizQuestion1" id="2">
                            Stylisation des pages Web
                        </label>
                        <label class="radiocontainer" name="option3">
                            <input type="radio" name="quizQuestion1" id="3" rightOption>
                            Ajout d'interactivité aux pages Web
                        </label>
                        <label class="radiocontainer" name="option4">
                            <input type="radio" name="quizQuestion1" id="4">
                            Stockage et affichage de données sur des pages Web
                        </label>
                    </div>
                </div>
                <div class="questionForm displayNone">

                    <div class="question" name="question">
                        <p> <span style="color:#92140C; font-size: 23px;">2. </span> Qui a créé JavaScript?</p>
                    </div>
                    <div class="options">
                        <label class="radiocontainer" name="option1">
                            <input type="radio" name="quizQuestion2" id="1">
                            Brendan Dawes
                        </label>
                        <label class="radiocontainer" name="option2">
                            <input type="radio" name="quizQuestion2" id="2" rightOption>
                            Brendan Eich
                        </label>
                        <label class="radiocontainer" name="option3">
                            <input type="radio" name="quizQuestion2" id="3">
                            Brendan Taylor
                        </label>
                        <label class="radiocontainer" name="option4">
                            <input type="radio" name="quizQuestion2" id="4">
                            Brendan Gleeson
                        </label>
                    </div>
                </div>
                <div class="questionForm displayNone">
                    <div class="question" name="question">
                        <p> <span style="color:#92140C; font-size: 23px;">3. </span> D'où vient le nom de JavaScript?</p>
                    </div>
                    <div class="options">
                        <label class="radiocontainer" name="option1">
                            <input type="radio" name="quizQuestion3" id="1">
                            C'est une version plus rapide et plus légère de JAVA
                        </label>
                        <label class="radiocontainer" name="option2">
                            <input type="radio" name="quizQuestion3" id="2">
                            C'est un type de script Coffee
                        </label>
                        <label class="radiocontainer" name="option3">
                            <input type="radio" name="quizQuestion3" id="3">
                            JAVA était cool au moment de la création de JavaScript
                        </label>
                        <label class="radiocontainer" name="option4">
                            <input type="radio" name="quizQuestion3" id="4" rightOption>
                            Il suit une partie de la syntaxe de JAVA
                        </label>
                    </div>

                </div>
                <div class="questionForm displayNone">

                    <div class="question" name="question">
                        <p> <span style="color:#92140C; font-size: 23px;">4. </span> Lequel d'entre eux n'est PAS un framework JavaScript?</p>
                    </div>
                    <div class="options">
                        <label class="radiocontainer" name="option1">
                            <input type="radio" name="quizQuestion4" id="1">
                            Vue
                        </label>
                        <label class="radiocontainer" name="option2">
                            <input type="radio" name="quizQuestion4" id="2">
                            Angular
                        </label>
                        <label class="radiocontainer" name="option3">
                            <input type="radio" name="quizQuestion4" id="3">
                            Express
                        </label>
                        <label class="radiocontainer" name="option4">
                            <input type="radio" name="quizQuestion4" id="4" rightOption>
                            React
                        </label>
                    </div>

                </div>
                <div class="questionForm displayNone">
                    <div class="question" name="question">
                        <p> <span style="color:#92140C; font-size: 23px;">5. </span> Le format d'échange de données préféré de JavaScript est...</p>
                    </div>
                    <div class="options">
                        <label class="radiocontainer" name="option1">
                            <input type="radio" name="quizQuestion5" id="1">
                            HTML
                        </label>
                        <label class="radiocontainer" name="option2">
                            <input type="radio" name="quizQuestion5" id="2">
                            TXT
                        </label>
                        <label class="radiocontainer" name="option3">
                            <input type="radio" name="quizQuestion5" id="3" rightOption>
                            JSON
                        </label>
                        <label class="radiocontainer" name="option4">
                            <input type="radio" name="quizQuestion5" id="4">
                            XML
                        </label>
                    </div>
                </div>

                <!-- ErrorDialog -->
                <div class="errorDialog displayNone">
                    <svg width="30px" style="margin-right:5px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M506.3 417l-213.3-364c-16.33-28-57.54-28-73.98 0l-213.2 364C-10.59 444.9 9.849 480 42.74 480h426.6C502.1 480 522.6 445 506.3 417zM232 168c0-13.25 10.75-24 24-24S280 154.8 280 168v128c0 13.25-10.75 24-23.1 24S232 309.3 232 296V168zM256 416c-17.36 0-31.44-14.08-31.44-31.44c0-17.36 14.07-31.44 31.44-31.44s31.44 14.08 31.44 31.44C287.4 401.9 273.4 416 256 416z" />
                    </svg>
                    vous devez choisir une option pour passer à la question suivante
                </div>
                <!--  -->

                <!-- Points  -->
                <input class="displayNone" type="text" name="pointsNiv1" value="">
                <!--  -->

                <center><input class="btn-confirmer" type="button" value="Confirmer"></center>
                <center><input class="btn-next" type="button" value="Next"></center>
                <center>
                    <p align="center" style="color:gray;margin-top: 30px">chaque question vaut 10 points, vous devriez au moins obtenir 30 points pour chaque niveau pour passer au niveau suivant</p>
                </center>
            </form>
        </div>
    </section>



    <script src="./jquery-3.6.0.min.js"></script>
    <script>
        $(() => {
            var currentTab = 0; // Current tab is set to be the first tab (0)
            var points = 50;
            showTab(currentTab); // Display the current tab

            function showTab(n) {
                $(".btn-next[type='button']")[0].classList.add("displayNone");
                $(".btn-confirmer")[0].classList.remove("displayNone");
                // This function will display the specified tab of the form...
                let x = $(".questionForm");
                x[n].classList.remove('displayNone');
                console.log(x.length);
                console.log(n);

            }

            function nextPrev(n) {
                // This function will figure out which tab to display
                var x = $(".questionForm");
                // Exit the function if any field in the current tab is invalid:
                if (n == 1 && !validateForm()) return false;
                // Hide the current tab:
                x[currentTab].classList.add('displayNone');
                // Increase or decrease the current tab by 1:
                currentTab = currentTab + n;
                /** 
                 * if you have reached the end of the form...
                 */
                if (currentTab >= x.length) {
                    // ... the form gets submitted:
                    $("#quizForm").submit();
                    return false;
                }

                // Otherwise, display the correct tab:
                showTab(currentTab);
            }

            function validateForm() {
                // This function deals with validation of the form fields
                var x, y, z, valid = true;
                x = $(".questionForm");
                y = x[currentTab].getElementsByTagName("input");
                z = x[currentTab].querySelector("input[rightOption]");

                // A loop that checks every input field in the current tab:
                for (let i = 0; i < y.length; i++) {
                    if (y[i].checked == true) {
                        // and set the current valid status to false
                        $(".errorDialog").addClass('displayNone');
                        return true;
                    }
                }
                $(".errorDialog").removeClass('displayNone');
                return false; // return the valid status
            }
            $(".btn-confirmer").click(function() {
                if (!validateForm()) return false;

                x = $(".questionForm");
                y = x[currentTab].querySelector("input[type='radio']:checked");
                z = x[currentTab].querySelector("input[rightOption]");

                let parent = y.parentNode;
                let rightOption = z.parentNode;

                console.log(parent.innerText);
                console.log(rightOption.innerText);


                rightOption.style.backgroundColor = "green";

                if (parent.innerText != rightOption.innerText) {
                    parent.style.backgroundColor = "red";
                    points -= 10;
                }
                $(".btn-next[type='button']")[0].classList.remove("displayNone");
                this.classList.add("displayNone");
                $("input[name='pointsNiv1']").val(points);
            })
            $(".btn-next[type='button']").click(() => nextPrev(1));
        });
    </script>
</body>

</html>