<?php

if (!isset($_SESSION)) {
    session_start();

} else {
    session_destroy();
    session_start();
}


require_once('App/Router.php');
require_once('App/Core/Controller.php');
require_once('App/Model/Orm.php');
require_once('App/Model/Project.php');
require_once('App/Model/User.php');
require_once('App/config.php');








use App\Router;

$myRouter = new Router();
$myRouter->run();


