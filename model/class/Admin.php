<?php

class Admin {
    private $admin_id;

    public function setAdminId($admin_id) {
        $this->admin_id = $admin_id;
    }

    public function getAdminId($admin_id) {
        $this->admin_id = $admin_id;
    }

    public function login() {
        header("Location: /user/login");
    }

    public function logout() {
        header("Location: /logout/check");
    }

    public function showAccountSettings() {
        header("Location: /user/prefrences");
    }

    public function editAccountPicture() {
        header("Location: /user/prefrences");
    }

    public function editAccountPassword() {
        header("Location: /user/prefrences");
    }

    public function editAccountPrefrences() {
        header("Location: /user/prefrences");
    }

    public function searchPeople() {
        header("Location: /lesson/users");
    }
    
    public function searchLessons() {
        header("Location: /search/lesson");
    }

    public function designAndEditUI() {
        header("Location: /edit/ui");
    }

    public function designAndEditUX() {
        header("Location: /edit/ux");
    }

    public function desginAndEditDatabase() {
        header("Location: /edit/databse");
    }

    public function otherAdminSpecificOperations() {
        header("Location: /admin/panel");
    }
}