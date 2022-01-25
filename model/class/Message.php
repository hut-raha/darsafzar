<?php

class Message {
    private $message_id;
    private $time;
    private $date;
    private $sender_id;

    public function setMessageId($message_id) {
        $this->message_id = $message_id;
    }

    public function setTime($time) {
        $this->time = $time;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function setSenderId($sender_id) {
        $this->sender_id = $sender_id;
    }

    public function getMessageId() {
        return $this->message_id;
    }

    public function getTime() {
        return $this->time;
    }

    public function getDate() {
        return $this->date;
    }

    public function getSenderId() {
        return $this->sender_id;
    }
}