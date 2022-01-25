<?php

class User {
    private $user_id;
    private $birth_date;
    private $sex;
    private $username;
    private $first_name;
    private $last_name;
    private $password;
    private $email;

    public function setUserId($user_id) {
        $this->user_id = $user_id;
    }

    public function setBirthDate($birth_date) {
        $this->birth_date = $birth_date;
    }

    public function setSex($sex) {
        $this->sex = $sex;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setFirstName($first_name) {
        $this->first_name = $first_name;
    }

    public function setLastName($last_name) {
        $this->last_name = $last_name;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getUserId() {
        return $this->user_id;
    }

    public function getBirthDate() {
        return $this->birth_date;
    }

    public function getSex() {
        return $this->sex;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getFirstName() {
        return $this->first_name;
    }

    public function getLastName() {
        return $this->last_name;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getEmail() {
        return $this->email;
    }
}