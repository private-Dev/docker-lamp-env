<?php 
//$conn = new mysqli("db","devuser","devpass","test_db");
$conn = new PDO("mysql:dbname=test_db;host=db","devuser","devpass");
if ($conn->connect_error){
echo "error connexion";
}else{
echo "connexion db success ! <br>";
echo 'hello from docker';
}




