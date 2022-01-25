<?php

class Student {
    private $student_id;
    private $department;
    private $sendMessage;

    public function setStudentId($student_id) {
        $this->student_id = $student_id;
    }

    public function setDepartment($department) {
        $this->department = $department;
    }

    public function setSendMessage($sendMessage) {
        $this->sendMessage = $sendMessage;
    }

    public function getStudentId() {
        return $this->student_id;
    }

    public function getDepartment() {
        return $this->department;
    }

    public function getSendMessage() {
        return $this->sendMessage;
    }

    public function login() {
        header("Location: /user/login");
    }

    public function logout() {
        header("Location: /logout/check");
    }

    public function showAccountSettings() {
        header("Location: /user/account");
    }

    public function editAccountPicture() {
        header("Location: /user/account");
    }

    public function editAccountPassword() {
        header("Location: /user/account");
    }

    public function editAccountPrefrences() {
        header("Location: /user/prefrences");
    }

    public function editLanguage() {
        header("Location: /user/prefrences");
    }

    public function showCalendar() {
        header("Location: /user/calendar");
    }

    public function showEvents() {
        header("Location: /event/show");
    }

    public function addEvent() {
        header("Location: /event/new");
    }

    public function removeEvent() {
        header("Location: /event/delete");
    }

    public function personaliseCalendar() {
        header("Location: /user/calendar/config");
    }

    public function publishCalendar() {
        header("Location: /user/calendar/config");
    }

    public function showNotifications() {
        header("Location: /user/notification");
    }

    public function jointToClass() {
        header("Location: /class/join");
    }

    public function watchOnlineVideo() {
        header("Location: /file/video/watch");
    }

    public function downloadEducationalContent($contentId) {
        header("Location: /file/download/$contentId");
    }

    public function deliverExercise() {
        header("Location: /exercise/deliver");
    }

    public function joinToExam() {
        header("Location: /exam/join");
    }

    public function uploadContent() {
        header("Location: /file/upload");
    }

    public function advancedSearchInNotifications() {
        header("Location: /search/advanced/notifiaction");
    }

    public function reviewExam($examId) {
        header("Location: /exam/review/$examId");
    }

    public function personalizeMainPage() {
        header("Location: /personalize/page/main");
    }

    public function showAllNotifications() {
        header("Location: /notifications/show/all");
    }

    public function switchToDifferentParts() {
        header("Location: /part/switch");
    }

    public function showLessonsGrades() {
        header("Location: /lesson/grades");
    }

    public function showLessonsPeople() {
        header("Location: /lesson/show/people");
    }

    public function createGroupChat() {
        header("Location: /chat/group/new");
    }

    public function createPrivateChat() {
        header("Location: /chat/private/new");
    }

    public function searchPeople() {
        header("Location: /lesson/users/search");
    }

    public function sendMessage() {
        header("Location: /message/send");
    }

    public function showMessage() {
        header("Location: /message/show");
    }

    public function deleteMessage() {
        header("Location: /message/delete");
    }

    public function searchLessons() {
        header("Location: /lesson/search");
    }
}