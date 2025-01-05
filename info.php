<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dictionary";

// إنشاء اتصال
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// البحث عن الكلمة
$word = $_GET['word'];
$sql = "SELECT definition FROM words WHERE word='$word'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Definition: " . $row["definition"];
    }
} else {
    echo "Word not found";
}
$conn->close();
?>
