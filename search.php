<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $word = $_POST['word'];

    // استعلام البحث
    $sql = "SELECT definition FROM words WHERE word = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $word);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<h1>Definition:</h1>";
        echo "<p><strong>$word</strong>: " . $row['definition'] . "</p>";
    } else {
        echo "<h1>No results found for '$word'</h1>";
    }

    $stmt->close();
}
$conn->close();
?>
<a href="index.php">Back to search</a>
