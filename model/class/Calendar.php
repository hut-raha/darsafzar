<?php

class Calendar {
    private $calendar_id;
    private $name;
    private $description;
    private $calendar_event;

    public function setCalendarId($admin_id) {
        $this->admin_id = $admin_id;
    }

    public function setName($admin_id) {
        $this->admin_id = $admin_id;
    }

    public function setDesciption($admin_id) {
        $this->admin_id = $admin_id;
    }

    public function setCalendarEvent($admin_id) {
        $this->admin_id = $admin_id;
    }

    public function getCalendarId() {
        return $this->admin_id;
    }

    public function getName() {
        return $this->admin_id;
    }

    public function getDesciption() {
        return $this->admin_id;
    }

    public function getCalendarEvent() {
        return $this->admin_id;
    }
}