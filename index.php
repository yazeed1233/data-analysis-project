<?php
// Connect to the SQLite database
$db = new SQLite3('dictionary.db');

// Check if the form is submitted
if (isset($_POST['search'])) {
    $word = $_POST['word'];
    $stmt = $db->prepare('SELECT definition FROM dictionary WHERE word = :word');
    $stmt->bindValue(':word', $word, SQLITE3_TEXT);
    $result = $stmt->execute();
    $definition = $result->fetchArray(SQLITE3_ASSOC);
}
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
            background-color: #f0f0f0;
            color: #333;
            text-align: center;
            padding: 50px;
        }
        input[type="text"] {
            padding: 10px;
            width: 200px;
            border: 2px solid #333;
            border-radius: 5px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            border: none;
            background-color: #333;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #555;
        }
        .definition {
            margin-top: 20px;
            font-size: 1.2em;
            border: 1px solid #333;
            padding: 10px;
            background-color: #fff;
            display: inline-block;
        }
    </style>
</head>
<body>
    <h1>Simple Dictionary</h1>
    <form method="POST">
        <input type="text" name="word" placeholder="Enter a word" required>
        <input type="submit" name="search" value="Search">
    </form>

    <?php if (isset($definition)): ?>
        <div class="definition">
            <?php if ($definition): ?>
                <strong><?php echo htmlspecialchars($word); ?></strong>: <?php echo htmlspecialchars($definition['definition']); ?>
            <?php else: ?>
                <strong><?php echo htmlspecialchars($word); ?></strong>: Not found.
            <?php endif; ?>
        </div>
    <?php endif; ?>
</body>
</html>
