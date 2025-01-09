<?php
require_once "controllers/UserController.php";
require_once "controllers/OrganizationController.php";

$action = $_GET['action'] ?? 'list';
$id = $_GET['id'] ?? null;

$userController = new UserController();
$organizationController = new OrganizationController();

if ($action === 'users') {
    $userController->index();
} elseif ($action === 'createUser') {
    $userController->create();
} elseif ($action === 'organizations') {
    $organizationController->index();
} elseif ($action === 'createOrganization') {
    $organizationController->create();
} else {
    echo "Page not found";
}
