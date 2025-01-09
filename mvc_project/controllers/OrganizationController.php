<?php
require_once "models/Organization.php";

class OrganizationController {
    public function index() {
        $organizations = Organization::getAll();
        require "views/organizations/index.php";
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            Organization::create($_POST);
            header("Location: index.php?action=organizations");
        } else {
            require "views/organizations/create.php";
        }
    }
}
