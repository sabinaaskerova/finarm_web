<?php

if($_GET['lang'] === 'ru'){
    include 'assets/php/ru.php';
} elseif($_GET['lang'] === 'fr'){
    include 'assets/php/fr.php';
} else{
    include 'assets/php/ru.php';
}
$lang = '';
if (isset($_GET['lang'])) {
    $lang = '?lang=' . $_GET['lang'];
}
include 'assets/php/add_article_form.php';
?>
<?php
	require 'assets/php/login.php';
	session_start();
?>

<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title><?= $trad['add article'] ?></title>
  <link rel = "stylesheet" type="text/css" href="assets/css/style.css"/> 
  <link rel = "stylesheet" type="text/css" href="assets/css/add_article.css"/>
</head>
<body>
<script src="assets/js/hide_menu.js"></script>
    <section id="menu">
        <section id="lang-switch">
            <button onclick="changeLang('fr')"><a href="ajout_article.php?lang=fr">Français</a></button>
            <button onclick="changeLang('ru')"><a href="ajout_article.php?lang=ru">Русский</a></button>
        </section>
        <nav>
            <ul>
                <li><a href="index.php<?php echo $lang ?>"><?= $trad['home'] ?></a></li>
                <li><a href="cours.php<?php echo $lang ?>"><?= $trad['products'] ?></a></li>
                <li><a href="blog.php<?php echo $lang ?>"><?= $trad['blog'] ?></a></li>
                <li><a class="active" href="ajout_article.php<?php echo $lang ?>"><?= $trad['add article'] ?></a></li>
                <li><a href="add_product.php<?php echo $lang ?>"><?= $trad['add product'] ?></a></li>    
                <li><a href="assets/php/logout.php<?php echo $lang ?>">LOGOUT</a></li>
                  
            </ul>
        </nav>
        <button id="hide-menu" onclick="showmenu()"><img src="assets/images/menu.svg"/></button>
        <img src="assets/images/finarmor.png" alt="Logo su site" >
    </section>
    <form method="post">
        <p></p>
        <p></p>
        <div>
            <label for="heading" ><?= $trad['heading'] ?>:</label>
            <textarea name="heading" rows=5 required aria-required="true" aria-labelledby="heading"></textarea>
        </div>
        <div>
            <label for="author"><?= $trad['author'] ?>:</label>
            <input type="text" name="author" required aria-required="true" aria-labelledby="author" />
        </div>
        <div>
            <label for="article" ><?= $trad['text'] ?>:</label>
            <textarea name="article" rows=20 required aria-required="true" aria-labelledby="article"></textarea>
        </div>
        <button type="submit"><?= $trad['publish'] ?></button>
    </form>
    <script src="assets/js/article.js"></script>
    <script src="assets/js/language.js"></script>
    <script src="assets/js/hide_menu.js"></script>
    <section>
    
    </section>
</body>
</html>