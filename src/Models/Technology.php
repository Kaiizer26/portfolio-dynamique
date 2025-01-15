<?php

namespace App\Models;

use App\Database\Database;
use PDO;

class Technology
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getAllTechnologies()
    {
        $stmt = $this->db->query('SELECT * FROM technologies ORDER BY id_technology ASC');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
 
}
