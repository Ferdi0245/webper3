<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fugyu login</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
<header>
    <div id="logo">
        <img src="img/fugyuv5.jpg" alt="logo">
    </div>
    <nav>
        <a href="#">Home</a>
        <a href="#">Producten</a>
        <a href="#">Contact</a>
        <a href="#">Login</a>
    </nav>
</header>
<section>
    <div id="login-container">
        <div id="login-form">
            <h2>Login</h2>
            <form action="register.php" method="post">
                <label for="gebruikersnaam">Username:</label>
                <input type="text" id="gebruikersnaam" name="gebruikersnaam" placeholder="Enter your username" required>

                <label for="wachtwoord">Password:</label>
                <input type="password" id="wachtwoord" name="wachtwoord" placeholder="Enter your password" required>

                <input type="submit" value="Login">
            </form>
        </div>
    </div>
</section>
</body>
</html>
