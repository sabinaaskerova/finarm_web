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
include 'assets/php/add_product_form.php';
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
  <link rel = "stylesheet" type="text/css" href="assets/css/add_product.css"/>
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
                <li><a href="ajout_article.php<?php echo $lang ?>"><?= $trad['add article'] ?></a></li>  
                <li><a href="assets/php/logout.php<?php echo $lang ?>">LOGOUT</a></li>
                <li><a class="active" href="add_product.php<?php echo $lang ?>"><?= $trad['add product'] ?></a></li>  
                  
            </ul>
        </nav>
        <button id="hide-menu" onclick="showmenu()"><img src="assets/images/menu.svg"/></button>
        <img src="assets/images/finarmor.png" alt="Logo su site" >
    </section>
    <form method="post">
        <p></p>
        
        <div>
            <label for="heading" ><?= $trad['heading'] ?>:</label>
            <textarea name="heading" rows=5 required aria-required="true" aria-labelledby="heading"></textarea>
        </div>
        <div>
            <label for="description" ><?= $trad['description'] ?>:</label>
            <textarea name="description" rows=20 required aria-required="true" aria-labelledby="description"></textarea>
        </div>
        <div>
            <label for="price"><?= $trad['price'] ?>:</label>
            <input type="number" name="price" required aria-required="true" aria-labelledby="price" />
        </div>
        
        <button type="submit"><?= $trad['add'] ?></button>
    </form>
    
    <script src="assets/js/language.js"></script>
    <script src="assets/js/hide_menu.js"></script>
    <script src="assets/js/product.js"></script>
    <section>
    
    </section>
</body>
</html>