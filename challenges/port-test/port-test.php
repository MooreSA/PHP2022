<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body,
    html,
    .container {
        min-height: 100vh;
    }

    * {
        box-sizing: border-box;
    }

    .container {
        max-width: 768px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin: auto;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-weight: bold;
    }

    h1 {
        font-size: 5rem;
    }

    p {
        margin: 0;
        font-size: 2rem;
    }
    </style>
    <title>Port Test</title>
</head>

<body>
    <main class="container">
        <h1>Port Test</h1>
        <p>Current Remote Port: <?php echo $_SERVER['REMOTE_PORT']; ?></p>
        <p>Remote Port is expected to be <?php 
        echo (($_SERVER['REMOTE_PORT'] / 2) + 10000); ?></p>
    </main>
</body>

</html>