<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Private Page</title>
    <link rel="stylesheet" type="text/css" href="/PrivatePage/public/stylesheets/main.css">
    <link rel="stylesheet" type="text/css" href="/PrivatePage/public/stylesheets/login.css">
    <link href='https://fonts.googleapis.com/css?family=Actor' rel='stylesheet'>
</head>
<body>
<main>
    <div class="wrapper-main">
        <div class="login-box">
            <h1>Login</h1>
            <form class="login-form" action="./PrivatePage/app/controllers/login_controller.php" method="post" autocomplete="off">
            <!-- TODO: Separate label from input, so hover doesn't apply to the label as well -->
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