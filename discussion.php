<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Discussion Page</title>
    <link rel="stylesheet" type="text/css" href="stylediscussion.css">
</head>
<body>
    <h2>Discussion Page</h2>
    <div class="container">
        <div class="left-column">
            <form method="post" action="">
                <label for="message">Ask away:</label>
                <textarea id="message" name="message" rows="4" cols="50" required></textarea><br>
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
        <div class="right-column">
            <h3>Submitted Questions</h3>
            <div id="messages">
                <?php
                // Start the session
               // session_start();

                // Initialize the messages array if not already initialized
                if (!isset($_SESSION['messages'])) {
                    $_SESSION['messages'] = [];
                }

                // Handle form submission
                if (isset($_POST['submit'])) {
                    $message = trim($_POST['message']);

                    if (!empty($message)) {
                        // Add the new message to the session
                        $_SESSION['messages'][] = htmlspecialchars($message);
                    }
                }

                // Display all submitted messages
                if (!empty($_SESSION['messages'])) {
                    foreach ($_SESSION['messages'] as $msg) {
                        echo "<p>" . $msg . "</p>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
