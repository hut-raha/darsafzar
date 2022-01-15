<?php

require_once "system/Route.php";

Route::check("index.php/", function() {
    header("Location: /user/login");
});

Route::check("main/home", function() {
    Controller::view("main/Home");
});

Route::check("report/error", function() {
    $indexTool = IndexTool::getInstance();
    if ($indexTool->getParams()[0] = 404)
    {
        echo "Page not found!<br>Bad address";
    }
});

Route::check("user/login", function() {
    Controller::view("user/login");
});

Route::check("user/desk", function() {
    Controller::view("user/desk");
});

Route::check("user/account", function() {
    Controller::view("user/account");
});

Route::check("user/grades", function() {
    Controller::view("user/grades");
});

Route::check("user/messages", function() {
    Controller::view("user/messages");
});


Route::check("user/prefrences", function() {
    Controller::view("user/prefrences");
});

Route::check("user/lesson", function() {
    Controller::view("user/lesson");
});

Route::check("user/exams", function() {
    Controller::view("user/exams");
});

Route::check("user/notification", function() {
    Controller::view("user/notification");
});

Route::check("forum/home", function() {
    Controller::view("forum/home");
});

Route::check("forum/sad", function() {
    Controller::view("forum/sad");
});

Route::check("forum/discuss", function() {
    Controller::view("forum/discuss");
});

Route::check("forum/new", function() {
    Controller::view("forum/new");
});

Route::check("user/exercise", function() {
    Controller::view("user/exercise");
});

Route::check("file/new", function() {
    Controller::view("file/new");
});

Route::check("exercise/show", function() {
    Controller::view("exercise/show");
});

Route::check("exercise/new", function() {
    Controller::view("exercise/new");
});

Route::check("exam/show", function() {
    Controller::view("exam/show");
});

Route::check("exam/review", function() {
    Controller::view("exam/review");
});

Route::check("exam/new", function() {
    Controller::view("exam/new");
});

Route::check("class/online", function() {
    Controller::view("class/online");
});

Route::check("database/select-all", function() {
    echo "<pre>";
    print_r(Database::getInstance()->output("SELECT * FROM admin"));
    echo "</pre>";

    echo "<pre>";
    print_r(Database::getInstance()->output("SELECT * FROM calendar"));
    echo "</pre>";

    echo "<pre>";
    print_r(Database::getInstance()->output("SELECT * FROM download"));
    echo "</pre>";

    echo "<pre>";
    print_r(Database::getInstance()->output("SELECT * FROM educational_assistant"));
    echo "</pre>";

    echo "<pre>";
    print_r(Database::getInstance()->output("SELECT * FROM employee"));
    echo "</pre>";

    echo "<pre>";
    print_r(Database::getInstance()->output("SELECT * FROM exams"));
    echo "</pre>";

    echo "<pre>";
    print_r(Database::getInstance()->output("SELECT * FROM exercise"));
    echo "</pre>";

    echo "<pre>";
    print_r(Database::getInstance()->output("SELECT * FROM lessons"));
    echo "</pre>";

    echo "<pre>";
    print_r(Database::getInstance()->output("SELECT * FROM messages"));
    echo "</pre>";

    echo "<pre>";
    print_r(Database::getInstance()->output("SELECT * FROM notifications"));
    echo "</pre>";

    echo "<pre>";
    print_r(Database::getInstance()->output("SELECT * FROM offline_class"));
    echo "</pre>";

    echo "<pre>";
    print_r(Database::getInstance()->output("SELECT * FROM participation"));
    echo "</pre>";

    echo "<pre>";
    print_r(Database::getInstance()->output("SELECT * FROM personal_files"));
    echo "</pre>";

    echo "<pre>";
    print_r(Database::getInstance()->output("SELECT * FROM professor"));
    echo "</pre>";

    echo "<pre>";
    print_r(Database::getInstance()->output("SELECT * FROM student"));
    echo "</pre>";

    echo "<pre>";
    print_r(Database::getInstance()->output("SELECT * FROM student_has_lesson"));
    echo "</pre>";

    echo "<pre>";
    print_r(Database::getInstance()->output("SELECT * FROM student_see_notifications"));
    echo "</pre>";

    echo "<pre>";
    print_r(Database::getInstance()->output("SELECT * FROM ta"));
    echo "</pre>";

    echo "<pre>";
    print_r(Database::getInstance()->output("SELECT * FROM ta_has_lesson"));
    echo "</pre>";

    echo "<pre>";
    print_r(Database::getInstance()->output("SELECT * FROM ta_manages_exercises"));
    echo "</pre>";

    echo "<pre>";
    print_r(Database::getInstance()->output("SELECT * FROM ta_manages_files"));
    echo "</pre>";

    echo "<pre>";
    print_r(Database::getInstance()->output("SELECT * FROM users"));
    echo "</pre>";
});

Route::check("user/exit", function() {
    Controller::view("user/exit");
});

Route::pageNotFound(function() {
    echo "Page not found!";
});