<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="images/tab_logo/circular_favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/login.css">
</head>
<body>
<div class="container">
        <div class="header">
            <img src="images/logo.png" alt="">
            <h1>Log into Nexus Bank</h1>
        </div>

        <hr id="header-hr">

        <form action="backend/login_backend.php" method="POST">            
            <div class="name_email">
                <div class="nameDiv">
                    <label for="email">Email:</label>
                    <input id="email" name="email" type="email" placeholder="Enter your email" required>
                </div>
                <div class="emailDiv">
                    <label for="password">Password:</label>
                    <input id="password" name="password" type="password" placeholder="Enter your password" required>
                </div>            
            </div>

            <p id="apply">Don't have an account? <a href="apply.php">Apply</a></p>
            <button value="submit" id="submit" class="" >Login</button>
        </form>
</body>
</html>