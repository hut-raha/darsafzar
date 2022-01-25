<?php

class Exercises {
    private $exercise_id;
    private $title;
    private $delivery_date;
    private $upload_date;
    private $upload_time;
    private $score;

    public function setExerciseId($exercise_id) {
        $this->exercise_id = $exercise_id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setDeliveryDate($delivery_date) {
        $this->delivery_date = $delivery_date;
    }

    public function setUploadDate($upload_date) {
        $this->upload_date = $upload_date;
    }

    public function setUploadIime($upload_time) {
        $this->upload_time = $upload_time;
    }

    public function setScore($score) {
        $this->score = $score;
    }

    public function getExerciseId() {
        return $this->exercise_id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDeliveryDate() {
        return $this->delivery_date;
    }

    public function getUploadDate() {
        return $this->upload_date;
    }

    public function getUploadIime() {
        return $this->upload_time;
    }

    public function getScore() {
        return $this->score;
    }
}