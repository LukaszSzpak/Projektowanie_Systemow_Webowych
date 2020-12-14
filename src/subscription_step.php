<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Olga Katsko, Lukasz Szpak">
    <meta name="keywords" content="Cook, well, cooking, easy, healthy, zdrowe, odżywianie">
    <link rel="stylesheet" href="styles/sub_form_styles.css">
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
</head>

<body>

<!-- header section -->
<div id="header"></div>

<!-- page section -->
<div class="main">
    <p><h1>
        Jeszcze tylko parę szczegółów !
    </h1>
    <form id="subform" action="index.php" method="post" autocomplete="on">
        <ul class="sub_form">
            <li>
                <label class="sub_form"> Ulubiony kolor: </label>
                <label>
                    <input type="color" name="color" id="color">
                </label>
            </li>
        </ul>
        <ul class="sub_form">
            <li>
                <label class="sub_form"> Odwiedzam was od: </label>
                <label>
                    <input type="month" name="month" id="month" value="2020-10">
                </label>
            </li>
        </ul>
        <ul class="sub_form">
            <li>
                <label class="sub_form"> Na ile nas ocenisz: </label>
                <label>
                    <input type="range" name="our_mark" id="our_mark" min="0" max="10">
                </label>
            </li>
        </ul>
        <ul class="sub_form">
            <li>
                <label class="sub_form"> Masz swoją stronę? </label>
                <label>
                    <input type="url" name="url" id="url" placeholder="https://example.com"
                           pattern="https://.*">
                </label>
            </li>
        </ul>
        <label class="sub_form_clear">
            <input class="sub_form_clear" type="reset" value="Wyczyść !">
        </label>
        <label class="sub_form_next">
            <input class="sub_form_next" type="submit" value="Zarejestruj !">
        </label>
    </form>
</div>

<!-- footer section -->
<div id="footer"></div>

</body>
</html>