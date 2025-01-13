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
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
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
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 500px;
            backdrop-filter: blur(15px);
        }
        h1 {
            font-size: 3.5em;
            font-weight: 600;
            margin-bottom: 20px;
        }
        p.description {
            font-size: 1.2em;
            margin-bottom: 30px;
            color: #e0e0e0;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
        }
        .button {
            padding: 15px 25px;
            background: linear-gradient(to right, #4CAF50, #2e7d32);
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 1.2em;
            transition: background 0.3s ease, transform 0.2s, box-shadow 0.3s ease;
        }
        .button:hover {
            background: linear-gradient(to right, #45a049, #1b5e20);
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 255, 0, 0.5);
        }
        .button:active {
            transform: translateY(1px);
            box-shadow: 0 2px 5px rgba(0, 255, 0, 0.3);
        }
        .definition {
            margin-top: 30px;
            font-size: 1.5em;
            background-color: rgba(255, 255, 255, 0.2);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            color: #f8f8f8;
        }
    </style>
    <script>
        function setWord(word) {
            document.getElementById('word-input').value = word;
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Simple Dictionary</h1>
        <p class="description">"Simple Dictionary" provides quick and easy word definitions through a user-friendly interface.</p>
        <form method="post">
            <div class="buttons">
                <button type="button" class="button" onclick="setWord('hello')">Hello</button>
                <button type="button" class="button" onclick="setWord('world')">World</button>
                <button type="button" class="button" onclick="setWord('php')">PHP</button>
                <button type="button" class="button" onclick="setWord('javascript')">JavaScript</button>
            </div>
            <input type="hidden" id="word-input" name="word">
            <input type="submit" value="Search">
        </form><?php
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
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
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
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 500px;
            backdrop-filter: blur(15px);
        }
        h1 {
            font-size: 3.5em;
            font-weight: 600;
            margin-bottom: 20px;
        }
        p.description {
            font-size: 1.2em;
            margin-bottom: 30px;
            color: #e0e0e0;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        input[type="text"] {
            padding: 15px;
            width: calc(100% - 30px);
            margin-bottom: 20px;
            border: none;
            border-radius: 10px;
            font-size: 1.1em;
            box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        input[type="submit"] {
            padding: 15px 25px;
            background: linear-gradient(to right, #4CAF50, #2e7d32);
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 1.2em;
            transition: background 0.3s ease, transform 0.2s;
        }
        input[type="submit"]:hover {
            background: linear-gradient(to right, #45a049, #1b5e20);
            transform: translateY(-2px);
        }
        .definition {
            margin-top: 30px;
            font-size: 1.5em;
            background-color: rgba(255, 255, 255, 0.2);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            color: #f8f8f8;
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

        <div class="definition">
            <?php if ($definition): ?>
                <p><?php echo $definition; ?></p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
