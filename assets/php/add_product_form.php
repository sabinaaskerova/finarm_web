<?php
$price = htmlspecialchars($_POST['price']);
$description = htmlspecialchars($_POST['description']);
$heading = htmlspecialchars($_POST['heading']);

try{
    $pdo = new PDO('sqlite:'. dirname(__FILE__) . '/products.db');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->exec("CREATE TABLE IF NOT EXISTS products (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        price DOUBLE NOT NULL,
        heading VARCHAR(256) NOT NULL,
        description VARCHAR(1000) NOT NULL
        )");

    if($price && $description){
        if($price !== '' && $description !== ''){
            $statement = $pdo->prepare("INSERT INTO products ('price', 'heading', 'description') VALUES (?, ?, ?)");
            $statement->execute([$price, $heading, $description]);
        }
        
    }  
    } catch(PDOException $exception){
        var_dump($exception->getMessage());
}
    