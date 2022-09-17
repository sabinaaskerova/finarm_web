<?php
try{
    $body = json_decode(file_get_contents("php://input"));
   
    $pdo = new PDO('sqlite:'. dirname(__FILE__) . '/articles.db');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $id = $body->id;
	$statement = $pdo->query("DELETE FROM article WHERE id='$id'") or die("Failed to delete a row!");
    $statement->execute();
    header('Content-Type: application/json');
	echo json_encode(['message'=> "deleted"]);
	

} catch(PDOException $exception){
    http_response_code(400);
    echo json_encode(['message'=> $exception->getMessage()]);
}

