<?php
define("WEEK", 60*60*24*7);

if(isset($_POST['button1'])) {
    setcookie("style", 'default', time() + WEEK);
    header("Refresh:0");
}
if(isset($_POST['button2'])) {
    setcookie("style", 'choice_1', time() + WEEK);
    header("Refresh:0");
}
?>
<div class="stylesPanel">
    <form method="post">
        <label class="default_button">
            <input type="submit" name="button1" class="my_button"
                   value="Style 1"/>
        </label>
        <label class="choice_1_button">
            <input type="submit" name="button2" class="my_button"
                   value="Style 2"/>
        </label>
    </form>
</div>
