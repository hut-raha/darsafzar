<?php

class Notifications {
    private $notification_id;
    private $title;
    private $date;
    private $time;

    public function setNotificationId($notification_id) {
        $this->notification_id = $notification_id;
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

    public function getNotificationId() {
        return $this->notification_id;
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