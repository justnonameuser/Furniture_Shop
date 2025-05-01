<?php
class Login extends Dbh {

    protected function getUser($uid, $pwd) {
        $stmt = $this->connect()->prepare('SELECT * FROM users WHERE users_uid = ? OR users_email = ?;');

        if (!$stmt->execute([$uid, $uid])) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$user) {
            $stmt = null;
            header("location: ../index.php?error=usernotfound");
            exit();
        }

        if (!password_verify($pwd, $user['users_pwd'])) {
            $stmt = null;
            header("location: ../index.php?error=wrongpassword");
            exit();
        }


        session_start();
        $_SESSION["userid"] = $user["users_id"];
        $_SESSION["useruid"] = $user["users_uid"];

        $stmt = null;
    }
}
?>
