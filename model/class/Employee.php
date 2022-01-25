<?php

class Employee extends User {
    private $salary;

    public function setSalay($salary) {
        $this->salary = $salary;
    }

    public function getSalay() {
        return $this->salary;
    }

    public function logout() {
        header("Location: /logout/check");
    }

    public function showAccountSettings() {
        header("Location: /user/account");
    }

    public function editAccountPicture() {
        header("Location: /user/account");
    }

    public function editAccountPassword() {
        header("Location: /user/account");
    }

    public function editAccountPrefrences() {
        header("Location: /user/prefrences");
    }
}