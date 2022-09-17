<?php
$email = htmlspecialchars($_POST['email']);


    try{
        $pdo = new PDO('sqlite:' . dirname(__FILE__) . '/followers.db');
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $pdo->exec("CREATE TABLE IF NOT EXISTS follower(
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            email VARCHAR(100) NOT NULL,
            UNIQUE (email)
        )");
        
        
        
        if($email){
            if(preg_match('/[a-z0-9-_.]+@[a-z0-9-_.]+\.[a-z]{2,}/', $email)){
                $statement = $pdo->prepare("INSERT INTO follower ('email') VALUES (:email)");
                $statement->bindValue('email', $email);
                $statement->execute();
            }
            
        }
        
    

    } catch(PDOException $exception){
        var_dump($exception->getMessage());
    }

