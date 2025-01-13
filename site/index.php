<?php
// Database connection settings
$host = 'db'; // Change if your MySQL server is on a different host
$dbname = 'dictionary';
$username = 'root'; // Change to your MySQL username
$password = 'password'; // Change to your MySQL password

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$definition = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $word = $conn->real_escape_string(trim($_POST['word']));
    $sql = "SELECT definition FROM words WHERE word = '$word'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $definition = $row['definition'];
    } else {
        $definition = "Word not found.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Dictionary</title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
            background-color: #d3d3d3; /* Light gray background */
            color: #333;
            text-align: center;
            padding: 50px;
        }
        input[type="text"] {
            padding: 10px;
            width: 200px;
            margin-bottom: 20px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .definition {
            margin-top: 20px;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <h1>Simple Dictionary</h1>
    <form method="post">
        <input type="text" name="word" placeholder="Enter a word" required>
        <input type="submit" value="Search">
    </form>
    <div class="definition">
        <?php if ($definition): ?>
            <p><?php echo $definition; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
