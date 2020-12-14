<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Olga Katsko, Lukasz Szpak">
    <meta name="keywords" content="Cook, well, cooking, easy, healthy, zdrowe, odżywianie">
    <link rel="stylesheet" href="styles/sub_form_styles.css">
    <?php include 'phpImports/stylesheets.php'; ?>

    <title>Strudel jabłkowy</title>

    <script src="scripts/z2.js"></script>
    <script
            src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
    </script>
    <script src="scripts/subscription.js" defer></script>
    <script src="scripts/z5.js" defer></script>
    <script>
        $(function(){
            $("#header").load("header.html");
            $("#footer").load("footer.html");
        });
    </script>
</head>

<body>

<!-- header section -->
<div id="header"></div>

<!-- page section -->
<div class="main">
    <div class="sub_left">
        <h1 id="sub_join_us">
            Dołącz do nas już dziś !
        </h1>

 
        <!-- HERE -->
        <!-- 2 actions ?????????????-->
        <!--<form id="subform" action="subscription_step.html" method="POST" autocomplete="on" action="php/subscription.php">-->
        <form id="subform" autocomplete="on" action="phpAccount/afterSubscription.php" method="POST" >
            <ul class="sub_form">
                <li>
                    <label class="sub_form"> Twój email: </label>
                    <label>
                        <input type="email" class="sub_from" name="email" id="email" required autocomplete="email">
                    </label>
                    <label class="sub_from_hint" id="sub_from_hint_email"></label>
                </li>
            </ul>
            <ul class="sub_form">
                <li>
                    <label class="sub_form"> Imię: </label>
                    <label>
                        <input type="text" class="sub_from" name="name" id="name" autofocus autocomplete="name">
                    </label>
                    <label class="sub_from_hint" id="sub_from_hint_name"></label>
                </li>
            </ul>
            <ul class="sub_form">
                <li>
                    <label class="sub_form"> Nazwisko: </label>
                    <label>
                        <input type="text" class="sub_from" name="family-name" id="family-name" required autocomplete="family-name">
                    </label>
                    <label class="sub_from_hint" id="sub_from_hint_family_name"></label>
                </li>
            </ul>
            <ul class="sub_form">
                <li>
                    <label class="sub_form"> Hasło: </label>
                    <label>
                        <input type="password" class="sub_from" name="new-password" id="new-password">
                    </label>
                    <label class="sub_from_hint" id="sub_from_hint_password"></label>
                </li>
            </ul>
            <ul class="sub_form">
                <li>
                    <label class="sub_form"> Potwierdź hasło: </label>
                    <label>
                        <input type="password" class="sub_from" name="confirm-password" id="confirm-password">
                    </label>
                </li>
            </ul>
            <ul class="sub_form">
                <li>
                    <label class="sub_form"> Numer telefonu: </label>
                    <label>
                        <input type="tel" class="sub_from" name="tel" id="tel" autocomplete="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}"
                               placeholder="123-456-789">
                    </label>
                    <label class="sub_from_hint" id="sub_from_hint_tel"></label>
                </li>
            </ul>
            <ul class="sub_form">
                <li>
                    <label class="sub_form"> Miesiąc urodzenia: </label>
                    <label>
                        <input list="bday" name="bday" id="birthday-date" type="date">
                        <datalist id="bday">
                            <option id="january" value="Styczeń"></option>
                            <option id="february" value="Luty"></option>
                            <option id="march" value="Marzec"></option>
                            <option id="april" value="Kwiecień"></option>
                            <option id="may" value="Maj"></option>
                            <option id="june" value="Czerwiec"></option>
                            <option id="july" value="Lipiec"></option>
                            <option id="august" value="Sierpień"></option>
                            <option id="september" value="Wrzesień"></option>
                            <option id="october" value="Październik"></option>
                            <option id="november" value="Listopad"></option>
                            <option id="december" value="Grudzień"></option>
                        </datalist>
                    </label>
                </li>
            </ul>
            <ul class="sub_form">
                <li>
                    <label class="sub_form"> Płeć: </label>
                    <label for="female"></label><input type="radio" id="female" name="sex" value="female"> Kobieta
                    <label for="male"></label><input type="radio" id="male" name="sex" value="male"> Mężczyzna
                </li>
            </ul>
            <ul class="sub_form">
                <li>
                    <label class="sub_form"> Wykształcenie: </label>
                    <label>
                        <select name="profession">
                            <option id="student" value="Student">Student</option>
                            <option id="engineer" value="Inzynier">Inzynier</option>
                            <option id="master" value="Magister">Magister</option>
                            <option id="doctor" value="Doktor">Doktor</option>
                        </select>
                    </label>
                </li>
            </ul>
            <ul class="sub_form">
                <li>
                    <label class="sub_about_yourself"> Krótko opisz siebie: </label>
                    <label>
                        <textarea rows="5" cols="50" placeholder="Wpisz tutaj..." name="subform" maxlength="200"></textarea>
                    </label>
                </li>
            </ul>
            <ul class="sub_form">
                <li>
                    <label class="sub_accept_terms">
                        Zapoznałem się i akceptuje
                        <a href="terms.php" class="sub_accept_terms">
                            regulamin serwisu:
                        </a>
                    </label>
                    <label>
                        <input type="checkbox" id="terms_checkbox" name="terms" value="1">
                    </label>
                </li>
            </ul>
            <label class="sub_form_clear">
                <input class="sub_form_clear" type="reset" value="Wyczyść !">
            </label>
                <input type="hidden" name="form_submitted" value="1" />
            <label class="sub_form_next">
                <input id="submit" class="sub_form_next" type="submit" value="Dalej !">
            </label>

        </form>

        <button onclick="numberOfForm()">Number of form elem</button>
        <button onclick="focusOnEmail()">Focus on email</button>
        <button onclick="blurEmailField()">Blur email</button>
    </div>

    <div class="sub_right_photo"></div>

    <div class="sub_bottom">
        <div class="photo_cont">
            <div> <img src="img/sub_1.jpg" alt="sub_photo_img" class="photo" id="named_img" onclick="addBorder2()"> </div>
            <div> <img src="img/sub_2.jpg" alt="sub_photo_img" class="photo"> </div>
        </div>
    </div>
</div>

<!-- footer section -->
    <div id="footer"></div>

</body>


</html>