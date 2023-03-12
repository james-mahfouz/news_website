<?php
header("Access-Control-Allow-Origin: *");

$host = "localhost";
$user = "root";
$password = null;
$database = "news_db";
$conn = new mysqli($host, $user, $password, $database);
error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', 1);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM news";
$result = $conn->query($query);

if($result->num_rows >0){
    $news = array();

    while($row = $result->fetch_assoc()) {
        $news[] = $row;
    }
    echo json_encode($news);
}
else{
    echo json_encode("No article found");
}
?>