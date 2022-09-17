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
	require 'assets/php/login.php';
	session_start();
?>

<!doctype html>
<html lang="ru">
<head>
        <meta charset="UTF-8">
        <meta name="author" content="Sabina Askerova">
        <meta name="description" content="Page d'accueil">
        <title><?= $trad['home'] ?></title>
        <link rel = "stylesheet" type="text/css" href="assets/css/style.css"/> 
</head>
<body>
    
    <section id="menu">
        <section id="lang-switch">
            <button onclick="changeLang('fr')"><a href="index.php?lang=fr">Français</a></button>
            <button onclick="changeLang('ru')"><a href="index.php?lang=ru">Русский</a></button>
        </section>
        <nav>
            <ul>
                    <li><a class="active" href="index.php<?php echo $lang ?>"><?= $trad['home'] ?></a></li>
                    <li><a href="cours.php<?php echo $lang ?>"><?= $trad['products'] ?></a></li>
                    <li><a href="blog.php<?php echo $lang ?>"><?= $trad['blog'] ?></a></li>
                    <li><a href="about.php<?php echo $lang ?>"><?= $trad['about'] ?></a></li>
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
        <h1>Добро пожаловать</h1>
        <section id="posts">
            <article>
                <img src="assets/images/visual-stories-micheile-SoT4-mZhyhE-unsplash.jpg" alt="Pot de plante rempli de pièces de monnaie/Горшок с растением, наполненный монетами" >
                <p>Приветствую вас на сайте, посвящённый повышению финансовой грамотности.</p>
                
            </article>   
            <article>
                <h3></h3>
                <img src="assets/images/dollars.jpg" alt="Tas de dollars" >
                <p>В современной системе образования школьников этому вопросу уделяется недостаточно внимания. 
                    Вступая во взрослую жизнь, молодые специалисты и выпускники вынуждены изучать принципы финансовой грамотности на горьком личном опыте.</p>
                
            </article>
            
            <article>
            <h3></h3>
                <p>Затрачивается большое количество энергии и времени, чтобы освоить принципы управления финансами.</p>
                
            </article>
            
            
            <article>
            <h3></h3>
                <p>Если обратиться к статистике, картина становится ещё более удручающей. У большинства людей кредиты, которые не помогают им в достижении финансовых целей, 
                        нет необходимого запаса на разные случаи, использование токсичных для финансового здоровья финансовых инструментов, крайне поверхностные знания и низкий уровень критического мышления, 
                        что делает наших новоиспеченных специалистов жертвами мошенников и фейковых активов.</p>
            </article>
        </section>
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
                    <li><a href="https://www.youtube.com/channel/UC3YzG0l74JCJZbHs6gjsL0g" target="_blank"><img src="assets/images/youtube.svg"/></a></li>
                </ul>
            </div>
            
        </section>
        <footer>Copyright</footer>
        <script src="assets/js/language.js"></script>
        <script src="assets/js/hide_menu.js"></script>
        <script src="assets/js/verification.js"></script>
</body>
</html>