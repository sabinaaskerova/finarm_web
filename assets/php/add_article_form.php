<?php
$author = htmlspecialchars($_POST['author']);
$article = htmlspecialchars($_POST['article']);
$heading = htmlspecialchars($_POST['heading']);

try{
    $pdo = new PDO('sqlite:'. dirname(__FILE__) . '/articles.db');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->exec("CREATE TABLE IF NOT EXISTS article (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        author VARCHAR(256) NOT NULL,
        heading VARCHAR(256) NOT NULL,
        article VARCHAR(1000) NOT NULL
        )");

    if($author && $article){
        if($author !== '' && $article !== ''){
            $statement = $pdo->prepare("INSERT INTO article ('author', 'heading', 'article') VALUES (?, ?, ?)");
            $statement->execute([$author, $heading, $article]);
        }
        
    }  
    } catch(PDOException $exception){
        var_dump($exception->getMessage());
}
    
