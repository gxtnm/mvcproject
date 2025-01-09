<?php
require_once "config/database.php";

class User {
    public static function getAll() {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM Users");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function create($data) {
        $db = Database::connect();
        $stmt = $db->prepare("INSERT INTO Users (userid, first_name, last_name, mail, username) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$data['userid'], $data['first_name'], $data['last_name'], $data['mail'], $data['username']]);
    }

    public static function findByUsername($username) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM Users WHERE username = ?");
        $stmt->execute([$username]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
