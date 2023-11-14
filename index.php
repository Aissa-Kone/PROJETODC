<?php
$pdo = new PDO("mysql:host=localhost;dbname=music;port=3306", 'root', '');
//see the "errors" folder for <detail 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Formation git et github";
?> 