<?php

class Exams {
    private $exam_id;
    private $title;
    private $start_time;
    private $close_time;
    private $number_of_allowed_tries;
    private $time;

    public function setExamId($exam_id) {
        $this->exam_id = $exam_id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setStartTime($start_time) {
        $this->start_time = $start_time;
    }

    public function setCloseTime($close_time) {
        $this->close_time = $close_time;
    }

    public function setNumberOfAllowedTries($number_of_allowed_tries) {
        $this->number_of_allowed_tries = $number_of_allowed_tries;
    }

    public function setTime($time) {
        $this->time = $time;
    }

    public function getExamId() {
        return $this->exam_id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getStartTime() {
        return $this->start_time;
    }

    public function getCloseTime() {
        return $this->close_time;
    }

    public function getNumberOfAllowedTries() {
        return $this->number_of_allowed_tries;
    }

    public function getTime() {
        return $this->time;
    }
}