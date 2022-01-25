<?php

class PersonalFiles {
    private $personal_files_id;
    private $title;

    public function setPersonalFilesId($personal_files_id) {
        $this->personal_files_id = $personal_files_id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getPersonalFilesId() {
        return $this->personal_files_id;
    }

    public function getTitle() {
        return $this->title;
    }
}