<?php
require_once "Router.php";
require_once "Controllers/BaseController.php";
require_once "Database/Database.php";
require_once "Controllers/WelcomeController.php";
require_once "Controllers/TableController.php";
require_once "Controllers/DashboardController.php";


$route = new Router();
$route->get("/", [WelcomeController::class, 'welcome']);


// Table
$route->get("/tables", [TableController::class, 'index']);

// Dasboard
$route->get("/dashboard", [DashboardController::class, 'index']);


$route->route();