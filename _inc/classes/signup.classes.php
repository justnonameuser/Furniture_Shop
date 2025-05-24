<?php
class Signup extends Dbh {

    protected function setUser($uid, $pwd, $email, $role) {
        $stmt = $this->connect()->prepare('INSERT INTO users (users_uid, users_pwd, users_email, users_role) VALUES (?,?,?,?);');

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($uid, $hashedPwd, $email, $role))) {
            $stmt = null;
            header("location: ../login.php?error=stmtfailed");
            exit();

        }
        $stmt = null;

    }

    protected function checkUser($uid, $email) {
        $stmt = $this->connect()->prepare('SELECT users_uid FROM users WHERE users_uid = ? OR users_email = ?;');
        if(!$stmt->execute(array($uid, $email))) {
            $stmt = null;
            header("location: ../login.php?error=stmtfailed");
            exit();

        }
        return $stmt->rowCount() === 0;

    }


}
?>