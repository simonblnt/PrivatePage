<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Private Page</title>
    <link rel="stylesheet" type="text/css" href="/PrivatePage/public/stylesheets/application.css">
</head>
<body>

<main>
    <div id="wrapper-main">
        <div id="greeting">
            <h1>Welcome Bálint!</h1>
        </div>

        <div id="login-box">
            <form action="../controllers/login_controller.php" method="post">
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