<?php
require_once "system/Route.php";

Route::check("index.php/", function() {
    header("Location: /user/login");
});

Route::check("main/home", function() {
    Controller::view("main/Home");
});

Route::check("login/check", function() {
    if (isset($_POST["login_username"]) && isset($_POST["login_password"]) && $_POST["login_username"] == "1111" && $_POST["login_password"] == "1111") {
        $_SESSION["user"] = "1111";
        header("Location: /user/desk");
    } else {
        header("Location: /login/failed");
    }
});

Route::check("login/failed", function() {
    require_once "view/" . IndexTool::getInstance()->getRoute() . ".php";
});

Route::check("logout/check", function() {
    session_destroy();
    header("Location: /user/login");
});

Route::check("login/already_done", function() {
    require_once "view/login/already_done.php";
});

Route::check("report/error", function() {
    $indexTool = IndexTool::getInstance();
    if ($indexTool->getParams()[0] = 404)
    {
        echo "Page not found!<br>Bad address";
    }
});

Route::check("user/login", function() {
    if (isset($_SESSION["user"])) {
        header("Location: /login/already_done");
        exit;
    }
    Controller::view("user/login");
});

Route::check("database/select-all", function() {
    echo "<pre>";
    print_r(Database::getInstance()->output("SELECT * FROM employee"));
    echo "</pre>";

    echo "<pre>";
    print_r(Database::getInstance()->output("SELECT * FROM student"));
    echo "</pre>";

    echo "<pre>";
    print_r(Database::getInstance()->output("SELECT * FROM users"));
    echo "</pre>";
});

if (isset($_SESSION["user"])) {
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
    
    Route::check("lesson/users", function() {
        Controller::view("lesson/users");
    });
} else {
    require_once "view/error/login.php";
    exit;
}

Route::pageNotFound(function() {
    echo "Page not found!";
});