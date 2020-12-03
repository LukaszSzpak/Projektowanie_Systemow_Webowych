<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Olga Katsko, Lukasz Szpak">
    <meta name="keywords" content="Cook, well, cooking, easy, healthy, zdrowe, odżywianie">
    <link rel="stylesheet" href="../styles/common_styles.css">

    <title>Strudel jabłkowy</title>
    <script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
    </script>
    <script>
        $(function(){
            $("#header").load("../header.html");
            $("#footer").load("../footer.html");
        });
    </script>
</head>

<body>

<!-- header section -->
<div id="header"></div>

<!-- page section -->

<div style="min-height: 400px">
<?php
    if (isset($_POST['form_submitted'])) {
        $email = $_POST['email'];

        echo "<div>";
        printClientIP();
        printFullName();
        checkPhone();
        checkSex();
        checkProfession();
        checkTerms();
        checkPassword();
        echo "</div>";

        printDict();
        printArray();
    }

    //----- Full name
    function printFullName() {
        $name = $_POST['name'];
        $surname = $_POST['family-name'];
        $str  = "";
        $str .= $name;
        $str .= " ";
        $str .= $surname;
        define('FULL_NAME',$str);
        echo "<p>".FULL_NAME."</p>";
    }


    //----- Password
    function checkPassword() {
        $password = $_POST['new-password'];
        $passwordRep = $_POST['confirm-password'];

        similar_text($password, $passwordRep, $percent);

        if ($percent != 100){
            echo "<p>Wrong password confirmation</p>";
            die("<p>Wrong password</p>");
        } else {
            $arr = str_split($password);
            $len = count($arr);

            if ($len < 8) {
                echo "<p>Your password is too short</p>";
            } else {
                $search_char = ".";
                $count = 0;
                for ($x = 0; $x < count($arr); $x++) {
                    if (substr($password, $x, 1) == $search_char) {
                        $count = $count + 1;
                    }
                }

                if ($count > 0) {
                    echo "<p>Your password contains invalid element</p>";
                } else {
                    echo "<p>Password: {$password} </p>";
                }
            }
        }
    }

    //----- tel
    function checkPhone() {
        $tel = $_POST['tel'];

        $pattern = "/\d{3}\-\d{3}\-\d{3}/";
        // need to convert tel to string????
        $res = preg_match($pattern, $tel);
        if($res == 1){
            $addTel = "+48";
            $addTel .= $tel;
            $tel = preg_replace('/[^0-9]/', '', $addTel);
            echo "<p>Tel: {$tel} </p>";
        } else {
            echo "<p>Wrong tel format</p>";
        }
    }

    //----- sex
    function checkSex() {
        $sex = $_POST['sex'];

        if ($sex == "female"){
            echo "<p>You are famale</p>";
        } else {
            echo "<p>You are male</p>";
        }
    }

    //----- bDay
    function checkBday() {
        $ddmmrrrr = $_POST['bday'];

        $date = preg_replace('/[^0-9]/', '', $ddmmrrrr);
        $year = (int) substr($date, 4);
        $currentYear = date("Y");
        $age = $currentYear - $year;
        echo "<p>Age: {$age}</p>";
    }


    function checkTerms() {
        $terms = $_POST['terms'];

        if (!isset($terms))
            echo "<p>Accept terms !</p>";
    }

    function checkProfession() {
        if (isset($_POST['profession'])) {
            $profession = $_POST['profession'];
            echo "<p>Your profession: {$profession}</p>";
        }
    }

    function printClientIP() {
        $clinetIP = isset($_SERVER['HTTP_CLIENT_IP'])
            ? $_SERVER['HTTP_CLIENT_IP']
            : isset($_SERVER['HTTP_X_FORWARDED_FOR'])
                ? $_SERVER['HTTP_X_FORWARDED_FOR']
                : $_SERVER['REMOTE_ADDR'];

        echo "<p>Client ip: {$clinetIP}</p>";
    }

    function printDict() {
        $myArray = array(
            "imie" => "Jan",
            "nazwisko" => "Kowalski",
            "data_uro" => "01-01-1900"
        );
        echo "<div style='padding-top: 10px; float: left; width: 40%'>";
        echo "<p>Prezentacja słownika:</p>";
        foreach ($myArray as $key => $value) {
            echo "<p>{$key} wartość to: {$value}</p>";
        }
        echo "</div>";
    }

    function printArray() {
        $anotherArray = array("element1", "element2", "element3", "element4");

        echo "<div style='padding-top: 10px; float: left; width: 40%'>";
        echo "<p>Prezentacja tablicy:</p>";
        for ($iter = 0; $iter < count($anotherArray); $iter++) {
            echo "<p>{$anotherArray[$iter]}</p>";
        }
        echo "</div>";
    }

?>
</div>


<!-- footer section -->
<div id="footer"></div>

</body>
</html>
