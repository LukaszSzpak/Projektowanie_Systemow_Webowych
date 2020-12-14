<?php
session_start();

echo "Cookies:<br>";
foreach ($_COOKIE as $key=>$val)
{
    echo $key.' is '.$val."<br>\n";
}

echo "<br>Session:<br>";
foreach ($_SESSION as $key=>$val)
{
    if (is_array($val)) {
        echo $key." is array:<br>";
        foreach ($val as $key1=>$val1) {
            echo $key1.' is '.$val1."<br>\n";
        }
    } else {
        echo $key.' is '.$val."<br>\n";
    }

}
?>