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
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to bottom right, #4facfe, #00f2fe);
            color: #fff;
            text-align: center;
            padding: 50px;
            margin: 0;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            margin: auto;
        }
        h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
        }
        p.description {
            font-size: 1.2em;
            margin-bottom: 30px;
        }
        input[type="text"] {
            padding: 10px;
            width: calc(100% - 22px);
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            font-size: 1em;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .definition {
            margin-top: 20px;
            font-size: 1.5em;
            background-color: rgba(255, 255, 255, 0.2);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Simple Dictionary</h1>
        <p class="description">"Simple Dictionary" provides quick and easy word definitions through a user-friendly interface.</p>
        <form method="post">
            <input type="text" name="word" placeholder="Enter a word" required>
            <input type="submit" value="Search">
        </form>
        <div class="definition">
            <?php if ($definition): ?>
                <p><?php echo $definition; ?></p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
