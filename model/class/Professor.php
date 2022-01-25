<?php

class Professor extends User {
    private $professor_id;
    private $department;

    public function setProfessorId($professor_id) {
        $this->professor_id = $professor_id;
    }

    public function setDepartment($department) {
        $this->department = $department;
    }

    public function getProfessorId() {
        return $this->professor_id;
    }

    public function getDepartment() {
        return $this->department;
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

    public function addUser() {
        header("Location: /user/new");
    }

    public function editUser() {
        header("Location: /user/edit");
    }

    public function removeUser() {
        header("Location: /user/delete");
    }

    public function setUserAccess() {
        header("Location: /access/user/set");
    }

    public function addOrRemoveStudentForLesson() {
        header("Location: /lesson/student/config");
    }

    public function addOrRemoveProfessorForLesson() {
        header("Location: /lesson/professor/config");
    }

    public function addOrRemoveTeacherAssistantForLesson() {
        header("Location: /lesson/ta/config");
    }

    public function addLesson() {
        header("Location: /lesson/new");
    }

    public function removeLesson() {
        header("Location: /lesson/delete");
    }

    public function uploadFile() {
        header("Location: /file/upload");
    }

    public function sendNotification() {
        header("Location: /notification/send");
    }

    public function declareExam() {
        header("Location: /exam/new");
    }

    public function declareExercise() {
        header("Location: /exercise/new");
    }

    public function setOnlineClassLink() {
        header("Location: /class/online/link/set");
    }

    public function advancedSeach() {
        header("Location: /search/advanced");
    }

    public function configLessonsAppearance() {
        header("Location: /lesson/config/appearance");
    }

    public function showExam() {
        header("Location: /user/exam");
    }

    public function setExamGrade() {
        header("Location: /user/grades");
    }

    public function searchLessons() {
        header("Location: /lesson/search");
    }

    public function showUploadedFiles() {
        header("Location: /file/uploaded");
    }

    public function deleteFile() {
        header("Location: /file/delete");
    }

    public function createNewFolder() {
        header("Location: /folder/new");
    }

    public function addToWikiWarehouse() {
        header("Location: /wiki-warehouse/add");
    }

    public function showWikWarehousei() {
        header("Location: /wiki-warehouse/show");
    }

    public function uploadFromURL() {
        header("Location: /file/upload-by-url");
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
}