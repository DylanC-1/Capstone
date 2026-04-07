<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title><?php echo isset($title) ? $title : 'Welcome'; ?></title>
</head>
<body>
    <header>
        <h1><?php echo isset($header) ? $header : 'Welcome to The Retro Shop'; ?></h1>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/auth/login.php">Login</a></li>
                <li><a href="/auth/register.php">Register</a></li>
                <li><a href="/products/index.php">Products</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <?php echo $content; ?>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> The Retro Shop. All rights reserved.</p>
    </footer>
    
    <script src="/js/app.js"></script>
</body>
</html>