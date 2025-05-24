<?php

class SignupContr extends Signup{
    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email; 
    private $role;

    public function __construct($uid, $pwd, $pwdRepeat, $email, $role) {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->email = $email;
        $this->role = $role;
    }


    public function signupUser() {
        if($this->emptyInput() == false) {
            header("location: ../login.php?error=emptyinput");
            exit();
        }
        if($this->invalidUid() == false) {
            header("location: ../login.php?error=username");
            exit();
        }
        if($this->invalidEmail() == false) {
            header("location: ../login.php?error=email");
            exit();
        }
        if($this->pwdMatch() == false) {
            header("location: ../login.php?error=passwordMatch");
            exit();
        }
        if($this->uidTakenCheck() == false) {
            header("location: ../login.php?error=useroremailtaken");
            exit();
        }

        $this->setUser($this->uid, $this->pwd, $this->email, $this->role);
    }


    private function emptyInput() {
        return !(empty($this->uid) || empty($this->pwd) || empty($this->pwdRepeat) || empty($this->email));
    }
    private function invalidUid() {
        return preg_match("/^[a-zA-Z0-9]*$/", $this->uid);
    }

    private function invalidEmail() {
        return filter_var($this->email, FILTER_VALIDATE_EMAIL);
    }

    private function pwdMatch() {
        return $this->pwd === $this->pwdRepeat;
    }
    private function uidTakenCheck() {
        return $this->checkUser($this->uid, $this->email);
    }
}

?>