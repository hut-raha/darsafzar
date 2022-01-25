<?php

class Lessons {
    private $lesson_id;
    private $name;
    private $department;
    private $term;

    public function setLessonId($lesson_id) {
        $this->lesson_id = $lesson_id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setDepartment($department) {
        $this->department = $department;
    }

    public function setTerm($term) {
        $this->term = $term;
    }

    public function getLessonId() {
        return $this->lesson_id;
    }

    public function getName() {
        return $this->name;
    }

    public function getDepartment() {
        return $this->department;
    }

    public function getTerm() {
        return $this->term;
    }
}