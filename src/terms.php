<?php
session_start();
if (!$_SESSION['user']){
    header('Location: phpAccount/login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Olga Katsko, Lukasz Szpak">
    <meta name="keywords" content="Cook, well, cooking, easy, healthy, zdrowe, odżywianie">
    <link rel="stylesheet" href="styles/terms_style.css">
    <?php include 'phpImports/stylesheets.php'; ?>

    <title>Regulamin</title>

    <script
            src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
            crossorigin="anonymous">
    </script>
    <script>
        $(function(){
            $("#header").load("header.html");
            $("#footer").load("footer.html");
        });
    </script>
    <script src="scripts/z4.js"></script>

</head>

<body>

<!-- header section -->
<div id="header"></div>

<!-- page section -->
<?php include 'phpAccount/showEmail.php'; ?>
    <p class="main">

        <!-- Our terms -->
        <p><h1>
            Regulamin naszego serwisu
        </h1>
        <div class="terms">
            <p class="terms">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor
                in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at
                vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis
                dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil
                imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam;
                est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere
                me lius quod ii legunt saepius.
            </p>
        </div>

        <!-- Information about you -->
        <div id="infos">
            <p>
                <button id="info_button" onclick="whichKeyWithMouse(event)" style="font-size: 30px">Uzyskaj informacje</button>
                <input type="text" id="key_field" onkeypress="whichKey(event)" onclick="cleanInput()" style="font-size: 30px" placeholder="Your key">
            </p>

        </div>

        <!-- Click field -->
        <div style="margin-top: 50px">
            <p> Kliknij na polu aby sprawdzić pozycję myszy: </p>
        </div>

        <div id="field" class="test_field" onclick="showCords(event)">

        </div>
        <p id="cords"></p>


        <!-- Opinion form -->
        <div class="form">
            <h1 class="title">
            Prześlij nam opinie !
            </h1>
            <form action="mailto:whoami@example.com" method="post" enctype="text/plain" id="opform">
                <label> Twoje imie: </label> <br>
                <label>
                    <input type="text" name="username">
                </label> <br>
                <label> Opinia: </label> <br>
                <label>
                    <textarea rows="5" cols="50" placeholder="Wpisz tutaj..." form="opform" maxlength="500"></textarea>
                </label> <br>
                <label class="button">
                    <input class="button" type="submit" value="Prześlij za pomocą maila!">
                </label>
            </form>
        </div>

    </div>

<!-- footer section -->
    <div id="footer"></div>

</body>
</html>