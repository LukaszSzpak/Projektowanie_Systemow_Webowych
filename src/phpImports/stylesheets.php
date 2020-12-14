<?php   if (isset($_COOKIE["style"])) {
    if ($_COOKIE["style"] == "default") { ?>
        <link rel="stylesheet" href="styles/common_styles_default.css">
    <?php } elseif ($_COOKIE["style"] == "choice_1") { ?>
        <link rel="stylesheet" href="styles/common_styles_choice_1.css">
    <?php }
} else { ?>
    <link rel="stylesheet" href="styles/common_styles_default_zjeb.css">
<?php   } ?>
