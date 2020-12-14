<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Olga Katsko, Lukasz Szpak">
    <meta name="keywords" content="Cook, well, cooking, easy, healthy, zdrowe, odżywianie">
    <link rel="stylesheet" href="styles/index_style.css">
    <?php include 'phpImports/stylesheets.php'; ?>

    <title>Healthy cook</title>

    <script src="scripts/z1.js" defer></script>
    <script src="scripts/z2.js"></script>
    <script src="scripts/z3.js" defer></script>
    <script src="scripts/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
        </script>
    <script>
        $(function () {
            $("#footer").load("footer.html");
        });
    </script>
</head>

<body>

    <!-- header section -->
    <header class="index_intro">
        <div class="index_intro_container">
            <h1>COOK HEALTHY!<br> COOK EASY!</h1>
            <div class="pre">
                Zdrowe odżywianie to nie mit ani trend – to <strong>najlepszy sposób na dłuższe życie,
                    więcej chwil z ludźmi i energię, by czerpać z życia pełnymi garściami</strong>.
            </div>
        </div>

        <nav id="Navigation" class="navigation">
            <ul>
                <li><a class="nav_link" href="#">Przepisy</a>
                    <ul>
                        <li><a class="nav_sub" href="#">Przekąski</a></li>
                        <li><a class="nav_sub" href="#">Dania gwówne</a></li>
                        <li><a class="nav_sub" href="#">Desery</a>
                            <ul>
                                <li><a class="nav_sub" href="#">Nowości</a>
                                    <ul>
                                        <li><a class="nav_sub" href="recipe_desert_sztrudel.php">Sztrudel jabłkowy</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a class="nav_link" href="subscription.php">Rejestracja</a></li>
                <li><a class="nav_link" href="terms.php" onclick="getURL()">Regulamin</a></li>
                <li><a class="nav_link" href="phpAccount/logout.php">Exit</a></li>

            </ul>

        </nav>
    </header>

    <!-- page section -->

    <?php include 'phpImports/changeStylesheet.php'; ?>

    <div class="colorPanel">
        <div id="blue" data-color="#b3e5fc" onclick="changeColor('blue')"></div>
        <div id="pink" data-color="#ffcdd2" onclick="changeColor('pink')"></div>
        <div id="white" data-color="#ffffff" onclick="changeColor('white')"></div>
    </div>

    <div class="textPanel">
        <div id="t1" onclick="changeTextStyle('t1')">T1</div>
        <div id="t2" onclick="changeTextStyle('t2')">T2</div>
    </div>

    <p id="user_name"></p>
    <?php include 'phpAccount/showEmail.php'; ?>

<p>
    <ul id="mood_list"><li>Happy</li>
        <li id="sad">Sad</li>
        <li>Bored</li></ul>

    <p> Click the button to add more happy word
        <button onclick="addHappy()" id="happy_button">Try!</button>
    </p>

    <p> Click the button to replace sad word
        <button onclick="replaceSad()" id="sad_button">Try!</button>
    </p>

    <p> Click the button to remove bored
        <button onclick="removeBored()" id="bored_button">Try!</button>
    </p>

    <p> Click the button to remove list
        <button onclick="removeList()" id="list_button">Try!</button>
    </p>
</p>
    

    


    <div class="main">
        <article id="Cook_at_home">
            <header class="cook_at_home_header">
                <h2 onclick="addBorder()">Dlaczego warto gotować w domu?</h2>
                <img src="img/cooking_at_home.jpg" id="r_img" alt="Cook happy" width="1000" height="800"
                    onclick="randomImg()">
            </header>

            <section class="index_main">
                <ul>
                    <li>
                        <details>
                            <summary>Gotowanie w domu to oszczędność.</summary>
                            <p>
                                To świetny sposób na zaoszczędzenie sporej gotówki w domowym budżecie<br>
                                Posiłek przygotowany w domu jest znacznie tańszy niż obiad w restauracji lub gotowe
                                danie
                                zakupione na wynos.<br>
                                Co więcej, jeśli będziesz starał się kupować produkty sezonowe zaoszczędzisz jeszcze
                                więcej,
                                a posiłki będą świeże i smaczne.
                            </p>
                        </details>

                    </li>

                    <li>
                        <details>
                            <summary>Wiesz, z czego gotujesz i możesz jeść dietetycznie</summary>
                            <p>
                                Jest to najbardziej skuteczna dieta w historii. Jest udowodnione, że jedzenie poza domem
                                jest
                                główną przyczyną niezdolności do utraty wagi i utrzymania prawidłowej masy ciała.<br>
                                W przeciwieństwie do posiłków w restauracji masz pełną kontrolę nad tym, co jesz i z
                                czego
                                komponujesz posiłki.<br>
                                Jest całkiem oczywiste, że przyrządzane w domu dania będą mniej kaloryczne niż te z
                                restauracji
                                lub te gotowe do spożycia.
                            </p>
                        </details>

                    </li>

                    <li>
                        <details>
                            <summary>Zdobędziesz umiejętności niezbędne w pracy</summary>
                            <p>
                                Masz więcej szans na znalezienie pracy. Według badań statystycznych, gotowanie jest
                                drugą
                                cechą
                                najczęściej braną pod uwagę przez tych, którzy sprawdzają Twoje CV.<br>
                                Dzieje się tak, ponieważ bycie kucharzem znamionuje posiadanie takich cech jak
                                cierpliwość,
                                dokładność i kreatywność.<br>
                                Są to cechy uznane za fundamentalne przy wykonywaniu każdej pracy.
                            </p>
                        </details>

                    </li>

                    <li>
                        <details>
                            <summary>Poczujesz się lepiej i zdrowiej</summary>
                            <p>
                                Gotowe jedzenie, bogate w cukry i tłuszcze, powoduje gwałtowne wzrost insuliny we krwi,
                                co
                                powoduje zmęczenie i zmniejszenie koncentracji.<br>
                                Natomiast zdrowe potrawy gotowane w domu to pozytywny bodziec dla mózgu i całego
                                organizmu.<br>
                                Taki sposób jedzenia sprawi, że będziesz pełen energii przez cały dzień.
                            </p>
                        </details>

                    </li>

                    <li>
                        <details>
                            <summary>Odkryjesz nowe smaki i przepisy</summary>
                            <p>
                                Domowa kuchnia to odkrywanie nowych smaków. Kupowanie paczkowanych posiłków może na
                                początku
                                wydawać się proste i tanie, ale w dłuższej perspektywie tak nie jest.<br>
                                Zrozumiesz to dobrze, gdy zaczniesz kucharską przygodę. Gotowe posiłki są wzbogacane
                                substancjami, które zmieniają prawdziwy smak składników i powoli uzależniasz się od ich
                                sztucznego aromatu.<br>
                                Odkrycie prawdziwego smaku składników i potraw z których je robisz będzie wspaniałym
                                doświadczeniem.
                            </p>
                        </details>

                    </li>

                    <li>
                        <details>
                            <summary>Sprawisz przyjemność bliskim</summary>
                            <p>
                                Gotując samodzielnie zwiększasz swój urok i atrakcyjność dla bliskich Ci osób. Co jest
                                seksowniejsze niż mężczyzna w kuchni?<br>
                                Oczywiście dotyczy to obu płci, gdyż wszyscy jesteśmy pod wrażeniem, gdy ktoś dla nas
                                przygotuje
                                pyszny posiłek.<br>
                                Jest to wspaniały sposób na zajęcie się drugą osobą, gdyż wszyscy lubimy być
                                rozpieszczani.
                            </p>
                        </details>

                    </li>

                    <li>
                        <details>
                            <summary>Poprawisz relacje w rodzinie</summary>
                            <p>
                                Badania naukowe udowadniają, że nastolatkowie, którzy regularnie spożywają wspólne
                                rodzinne
                                posiłki mają mniej zaburzeń w zachowaniu niż ci, którzy często jedzą poza domem.<br>
                                Gotowanie dla innych oznacza okazywanie miłości i wsparcia, stymuluje dobre
                                samopoczucie u Twoich dzieci.<br>
                                Możesz też spróbować gotować wspólnie z nimi, co na pewno zwiększy ich kreatywność.
                            </p>
                        </details>

                    </li>

                    <li>
                        <details>
                            <summary>Uwolnisz swoją kreatywność</summary>
                            <p>
                                Przygotowując samodzielnie posiłki uwalniasz swoją pomysłowość. Bycie kreatywnym to nie
                                tylko
                                umiejętność rysowania czy zaprojektowanie remontu łazienki.<br>
                                Doskonałym przykładem kreatywności jest pomysł na pyszne danie złożone z kilku prostych
                                składników.
                            </p>
                        </details>

                    </li>

                    <li>
                        <details>
                            <summary>Zafundujesz sobie autoterapię</summary>
                            <p>
                                Spróbuj zwiększyć swój spokój wewnętrzny, gotowanie to doskonałe ćwiczenie, które
                                chociaż na
                                chwilę oderwie Cię od codziennych kłopotów i nieustannym myśleniu o nich.<br>
                                Czyszczenie, obieranie i szatkowanie warzyw, ugniatanie chleba lub powolne mieszanie
                                zupy w
                                garnku to doskonała kuracja psychiczna.
                            </p>
                        </details>
                    </li>

                    <li>
                        <details>
                            <summary>Gotowanie w domu odmienia życie na lepsze!</summary>
                            <p>
                                Jeśli przeczytałeś poprzednie 9 punktów, zrozumiesz, dlaczego nie jest przesadą
                                stwierdzenie, że
                                nauka gotowania w domu może znacznie odmienić Twoje życie.<br>
                                Mamy nadzieję, że przekonałeś się, iż czas spędzony w kuchni pomaga doskonalić takie
                                cechy,
                                jak
                                pewność siebie, kreatywność i urok osobisty.<br>
                                Gotowanie w domu jest czymś bardzo ważnym i pomaga w prowadzeniu pełnego i
                                satysfakcjonującego
                                życia.
                            </p>
                        </details>
                    </li>
                </ul>
            </section>

        </article>

        <aside id="Aside_area" class="aside">
            <p>
            <h3>Zobacz również</h3>
            <iframe width="300" height="200" src="https://www.youtube.com/embed/xyQY8a-ng6g"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe> <br>
            <iframe width="300" height="200" src="https://www.youtube.com/embed/fqhYBTg73fw"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </aside>

        <article id="Video" class="video_sec">
            <video src="mp4/Nutrition_for_a_Healthy_Life.mp4" width="640" height="480" controls
                poster="img/video_poster.png"></video>
        </article>

        <article id="Subscription" class="bottom_sub_field">
            <p>
                Dołącz do nas i otrzymuj co tydzień nowe przepisy!<br>
                Zarejestruj się <a href="subscription.php" target="_self"><img src="img/go_to_web_icon.jpg"
                                                                               alt="Subscription" width="50" height="50"> </a>
            </p>

        </article>
    </div>

    <!-- footer section -->
    <div id="footer"></div>

</body>

</html>