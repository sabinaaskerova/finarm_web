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
include 'assets/php/pdo_newsletter.php';
?>
<?php
	session_start();
?>
<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>О проекте</title>
  <link rel = "stylesheet" type="text/css" href="assets/css/style.css"/> 
</head>
<body>

  <section id="menu">
        <section id="lang-switch">
            <button onclick="changeLang('fr')"><a href="about.php?lang=fr">Français</a></button>
            <button onclick="changeLang('ru')"><a href="about.php?lang=ru">Русский</a></button>
        </section>
      <nav>
        <ul>
                <li><a href="index.php<?php echo $lang ?>"><?= $trad['home'] ?></a></li>
                <li><a href="cours.php<?php echo $lang ?>"><?= $trad['products'] ?></a></li>
                <li><a href="blog.php<?php echo $lang ?>"><?= $trad['blog'] ?></a></li>
                <li><a class="active" href="about.php<?php echo $lang ?>"><?= $trad['about'] ?></a></li>
                <?php if(!isset($_SESSION['adminId'])) { ?>
                <li><a href="admin.php<?php echo $lang ?>"><?= $trad['admin'] ?></a></li>   
                <?php } ?>
                <?php if(isset($_SESSION['adminId'])) { ?>
                    <li><a href="ajout_article.php<?php echo $lang ?>"><?= $trad['add article'] ?></a></li>
                    <li><a href="add_product.php<?php echo $lang ?>"><?= $trad['add product'] ?></a></li>  
                    <li><a href="assets/php/logout.php<?php echo $lang ?>">LOGOUT</a></li>
                <?php } ?>
        </ul>
    </nav>
    <button id="hide-menu" onclick="showmenu()"><img src="assets/images/menu.svg"/></button>
    <img src="assets/images/finarmor.png" alt="Logo su site" >
  </section>
  <h1>О проекте</h1>
  <p>Наша миссия заключается в том, чтоб дать людям необходимые знания в области личных финансов тем самым, повышая уровень жизни людей.</p>
           
  <div id="newsletter">
            <label for="email"><?= $trad['subscribe to the newsletter'] ?></label>
            <form method="post">
                <p></p>
                <input type="email" id="email" name="email" pattern='[a-z0-9]+@[a-z]+\.[a-z]{2,3}' size="30" required>
                <button type="submit"><?= $trad['subscribe'] ?></button>
            </form>
      </div>
      <section id="post-nav">
            <div>
                <h4><?= $trad['contact'] ?></h4>
                <a href="tel:+33769309407">+33 7 69 30 94 07</a>
                <a href="mailto:sabina.askerova@etu.unistra.fr">sabina.askerova@etu.unistra.fr</a>
            </div>
            <div>
                <h4><?= $trad['navigation'] ?></h4>
                <ul>
                    <li><a class="active" href="index.php<?php echo $lang ?>"><?= $trad['home'] ?></a></li>
                    <li><a href="cours.php<?php echo $lang ?>"><?= $trad['products'] ?></a></li>
                    <li><a href="blog.php<?php echo $lang ?>"><?= $trad['blog'] ?></a></li>
                    <li><a href="about.php<?php echo $lang ?>"><?= $trad['about'] ?></a></li>
                </ul>
            </div>
            <div>
                <h4><?= $trad['social media'] ?></h4>
                <ul>
                    <li><a href="https://www.youtube.com/channel/UC3YzG0l74JCJZbHs6gjsL0g"><img src="assets/images/youtube.svg"/></a></li>
                </ul>
            </div>
            
    </section>
      <footer>Copyright</footer>
      <script src="assets/js/hide_menu.js"></script>
      <script src="assets/js/verification.js"></script>
      <script src="assets/js/language.js"></script>
</body>
</html>