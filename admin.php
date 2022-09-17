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
?>
<?php
include 'assets/php/login.php';
?>

<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title><?= $trad['admin'] ?></title>
  <link rel = "stylesheet" type="text/css" href="assets/css/style.css" > 
  <link rel = "stylesheet" type="text/css" href="assets/css/admin_connection.css" > 
</head>

<body>

    <section id="menu">
    <section id="lang-switch">
        <button onclick="changeLang('fr')"><a href="admin.php?lang=fr">Français</a></button>
        <button onclick="changeLang('ru')"><a href="admin.php?lang=ru">Русский</a></button>
    </section>
        <nav>
            <ul>
     
                <li><a href="index.php<?php echo $lang ?>"><?= $trad['home'] ?></a></li>
                <li><a href="cours.php<?php echo $lang ?>"><?= $trad['products'] ?></a></li>
                <li><a href="blog.php<?php echo $lang ?>"><?= $trad['blog'] ?></a></li>
                <li><a href="about.php<?php echo $lang ?>"><?= $trad['about'] ?></a></li>
                <li><a class="active" href="admin.php<?php echo $lang ?>"><?= $trad['admin'] ?></a></li>   
                
                
            </ul>
        </nav>
        <button id="hide-menu" onclick="showmenu()"><img src="assets/images/menu.svg"/></button>
        <img src="assets/images/finarmor.png" alt="Logo su site" >
    </section>
    <section id="admin-login">
        
        <form method="post">
            <p></p>
            
            <label for="email"><?= $trad['your email'] ?></label>
            <input type="email" 
                    id="email" 
                    name="email" 
                    pattern='[a-z0-9]+@[a-z]+\.[a-z]{2,3}' 
                    size="50" 
                    required 
                    aria-required="true"
                    aria-labelledby="email"> 
            <label for="password"><?= $trad['password'] ?></label>
            <input type="password" 
                    id="password" 
                    name="password" 
                    required 
                    aria-required="true"
                    aria-labelledby="password">
        </form>
        <label>
        <input type="checkbox" onclick="showpassword()">Show Password
        </label>
            <button type="submit" name="login">LOGIN</button>
    </section>
    <footer>Copyright</footer>
    <script src="assets/js/hide_menu.js"></script>
    <script src="assets/js/form.js"></script>
</body>
</html>