<?php

    if (substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2)=="es") {
        $language = "es";
    } else {
        $language = "en";
    }    

    if ($language == "en"){
        $content = "This page is in English";
        $title = "Change the language of the page";
    }else{
        $content = "Esta página está en Castellano (Idioma por defecto)";
        $title = "Cambiar el idioma de la página";
    }

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <meta name="author" content="Carlos Ramos">
</head>    
<body>
    <ul><?= $title ?>
        <li><a href='idioma.php?setLanguage=es'>Español</a></li>
        <li><a href='idioma.php?setLanguage=en'>Inglés</a></li>
    </ul>
    <?= $content ?>
</body>
</html>