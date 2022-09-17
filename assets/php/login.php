<?php
$isAdmin = false;
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
try{
    $pdo = new PDO('sqlite:' . dirname(__FILE__) . '/base.db');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    if($email && $password){
        $query= $pdo->prepare("SELECT mdp FROM user WHERE email='$email'");
        $query->execute();
        $results=$query->fetch();
        $motdepasse = $results['mdp'];
        if (password_verify($password, $motdepasse)) {
            $isAdmin = true;
            session_start();
            $_SESSION['adminId'] = 'admin';
           
            if($_GET['lang'] === 'fr'){
               
                header('Location: /ajout_article.php?lang=fr');
                
            }else{
                header('Location: /ajout_article.php?lang=ru');
            }
        } else {
            echo 'Password not matching';
        }

    }
    
} catch(PDOException $exception){
    var_dump($exception->getMEssage());
}


