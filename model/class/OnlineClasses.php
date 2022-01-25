<?php

class OnlineClasses {
    private $online_class_id;
    private $title;
    private $date;
    private $time;

    public function setOnlineClassId($online_class_id) {
        $this->online_class_id = $online_class_id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function setTime($time) {
        $this->time = $time;
    }

    public function getOnlineClassId() {
        return $this->online_class_id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDate() {
        return $this->date;
    }

    public function getTime() {
        return $this->time;
    }
}