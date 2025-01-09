<?php
require_once "config/database.php";

class Organization {
    public static function getAll() {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM Organizations");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function create($data) {
        $db = Database::connect();
        $stmt = $db->prepare("INSERT INTO Organizations (orgId, orgName, tin, contactPerson, contactNumber, address) VALUES (?, ?, ?, ?, ?, ?)");
        return $stmt->execute([$data['orgId'], $data['orgName'], $data['tin'], $data['contactPerson'], $data['contactNumber'], $data['address']]);
    }
}
