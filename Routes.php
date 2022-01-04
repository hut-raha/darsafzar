<?php

require_once "system/Route.php";

Route::check("main/home", function()
{
    Controller::view("main/Home");
});

Route::check("report/error", function()
{
    $indexTool = IndexTool::getInstance();
    if ($indexTool->getParams()[0] = 404)
    {
        echo "Page not found!<br>Bad address";
    }
});

Route::check("user/login", function()
{
    Controller::view("user/login");
});

Route::check("user/desk", function()
{
    Controller::view("user/desk");
});

Route::check("user/account", function()
{
    Controller::view("user/account");
});

Route::check("user/grades", function()
{
    Controller::view("user/grades");
});

Route::check("user/messages", function()
{
    Controller::view("user/messages");
});


Route::check("user/prefrences", function()
{
    Controller::view("user/prefrences");
});

Route::check("user/lesson", function()
{
    Controller::view("user/lesson");
});


Route::check("user/exit", function()
{
    Controller::view("user/exit");
});

Route::pageNotFound(function()
{
    echo "Page not found!";
});
