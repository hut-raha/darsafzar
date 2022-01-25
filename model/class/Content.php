<?php

class Content {
    private $file_link;
    private $description;

    public function setFileLink($file_link) {
        $this->file_link = $file_link;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getFileLink() {
        return $this->file_link;
    }

    public function getDescription() {
        return $this->description;
    }
}