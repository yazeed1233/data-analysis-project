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
            background: linear-gradient(to bottom right, #1e3c72, #2a5298);
            color: #fff;
            text-align: center;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            overflow: hidden;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.15);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 500px;
        }
        h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }
        p.description {
            font-size: 1.3em;
            margin-bottom: 30px;
        }
        input[type="text"] {
            padding: 15px;
            width: calc(100% - 30px);
            margin-bottom: 20px;
            border: none;
            border-radius: 10px;
            font-size: 1.2em;
            box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        input[type="submit"] {
            padding: 15px 25px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 1.2em;
            transition: background-color 0.3s ease, transform 0.2s;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
            transform: translateY(-2px);
        }
        .definition {
            margin-top: 30px;
            font-size: 1.5em;
            background-color: rgba(255, 255, 255, 0.25);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
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
