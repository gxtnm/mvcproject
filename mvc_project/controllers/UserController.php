<?php
require_once "models/User.php";

class UserController {
    public function index() {
        $users = User::getAll();
        require "views/users/index.php";
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            User::create($_POST);
            header("Location: index.php?action=users");
        } else {
            require "views/users/create.php";
        }
    }
}
