<?php
$pdo->query("DELETE FROM article WHERE id='$id'") or die("Failed to delete a row!");