<?php
require_once 'vendor/autoload.php';

use Core\Router;

use Lib\DB\Connector;

$connector = new Connector();
$conn = $connector->getConnect();
//$stmt = $conn->prepare("INSERT INTO posts (subject, detail, author_id) values ('subject 1', 'some text', 1)");
//$stmt -> execute();
//$stmt = $conn->prepare("INSERT INTO posts (subject, detail, author_id) values ('subject 2', 'some text', 2)");
//$stmt -> execute();

//$conn->query("DELETE FROM posts WHERE author_id = 1");
$conn->query("UPDATE posts SET detail='another text' WHERE id = 14");
$result = $conn->query("SELECT id,subject FROM posts WHERE id = 14 ");
$result ->execute();
$extracted = $result->fetchAll();
var_dump($extracted);
//
//$stmt = $conn->prepare("INSERT INTO users (name, surname, author_id) values ('John', 'Jameson', 1)");
//$stmt -> execute();
//$stmt = $conn->prepare("INSERT INTO users (name, surname, author_id) values ('Jim', 'Beam', 2)");
//$stmt -> execute();
$stmt = $conn->prepare("INSERT INTO users (name, surname, author_id) values ('That', 'Guy', 4)");
$stmt -> execute();

$conn->query("DELETE FROM posts WHERE id = 16");


$result2 = $conn->query("SELECT name,surname FROM users WHERE id = 13 ");
$result2 ->execute();
$extracted2 = $result2->fetchAll();
var_dump($extracted2);

//$router = new Router();
//$router ->run();
