<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Private Page</title>
    <link rel="stylesheet" type="text/css" href="/PrivatePage/public/stylesheets/application.css">
    <link href='https://fonts.googleapis.com/css?family=Actor' rel='stylesheet'>
</head>
<body>
<main>
    <div class="wrapper-main">
        <div class="login-box">
            <h1>Welcome Bálint!</h1>
            <form class="login-form" action="../controllers/login_controller.php" method="post">
                <label>Username:
                    <input type="text" name="username">
                </label>
                <label>Password:
                    <input type="password" name="password">
                </label>
                <button type="submit" name="login-submit">Login</button>
            </form>
        </div>
    </div>
</main>
</body>
</html>