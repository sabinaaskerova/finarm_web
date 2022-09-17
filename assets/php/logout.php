<?php
    session_start();
    session_destroy();
    if($_GET['lang'] === 'fr'){
        header('Location: /index.php?lang=fr');
        
    }else{
        header('Location: /index.php?lang=ru');
    }

?>