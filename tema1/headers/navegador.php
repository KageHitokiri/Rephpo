<?php
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $nav = 'Firefox';

    if(strpos($userAgent,$nav)) {
        echo "Su navegador es correcto";
    } else {
        echo "Esto no tira, por favor, utilice $nav";
    }

?>