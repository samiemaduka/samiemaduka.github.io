<?php
// Assuming you have a MySQL database with a table named "reviews"
$servername = 'localhost';
$username = 'testdb';
$password = 'testdb';
$database = 'testdb';

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}

$searchTerm = $_GET['q'];
$sql = "SELECT * FROM reviews WHERE company_name LIKE '%$searchTerm%'";
$result = $conn->query($sql);

$reviews = array();
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $review = array(
      'name' => $row['company_name'],
      'url' => $row['review_url']
    );
    array_push($reviews, $review);
  }
}

$conn->close();
echo json_encode($reviews);
?>
