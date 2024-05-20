<!DOCTYPE html>
<html>

<head>
    <?php
    $link = 'http://php.net/';
    $var = "PHP Tutorial";
    $keywords = 'HTML, CSS, PHP, JavaScript';
    echo "<meta name='keywords' content='{$keywords}'>";
    echo "<H3>{$var}</H3>";
    echo "<p>PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.</p>";
    echo "<p>Go to the <a href='{$link}'>{$var}.</a></p>";
    ?>

    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body></body>

</html>