<?php

if (isset($_POST['login-submit'])){

    require 'db_controller.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        header("Location: ../views/login.php?error=emptyField");
    }
    else{
        $sql = "SELECT * FROM users WHERE username=? or email=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../views/index.php?error=wrongSql");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "ss", $username, $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)){
                $pwdCheck = password_verify($password, $row['password']);
                if ($pwdCheck == true){
                    session_start();
                    $_SESSION['userId'] = $row['id'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['userEmail'] = $row['email'];

                    header("Location: ../views/index.php?login=success");
                    exit();
                }
                else {
                    header("Location: ../views/login.php?error=wrongPwd");
                }
            }
            else {
                header("Location: ../views/login.php?error=wrongUser");
            }
        }
    }

}else{
    header("Location: ../views/index.php");
}
