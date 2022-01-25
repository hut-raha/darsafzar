<?php

class OfflineClasses {
    private $offline_class_id;
    private $title;
    private $upload_date;
    private $upload_time;

    public function setOfflineClassId($offline_class_id) {
        $this->offline_class_id = $offline_class_id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setUploadDate($upload_date) {
        $this->upload_date = $upload_date;
    }

    public function setUploadTime($upload_time) {
        $this->upload_time = $upload_time;
    }

    public function getOfflineClassId() {
        return $this->offline_class_id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getUploadDate() {
        return $this->upload_date;
    }

    public function getUploadTime() {
        return $this->upload_time;
    }
}