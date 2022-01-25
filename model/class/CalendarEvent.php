<?php

class CalendarEvent {
    private $event_id;
    private $title;
    private $description;

    public function setEventId($event_id) {
        $this->event_id = $event_id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getEventId() {
        return $this->event_id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDescription() {
        return $this->description;
    }
}