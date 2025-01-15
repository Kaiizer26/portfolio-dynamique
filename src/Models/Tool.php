<?php

namespace App\Models;

use App\Database\Database;
use PDO;

class Tool
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getAllTools()
    {
        $stmt = $this->db->query('SELECT * FROM tools ORDER BY id_tool ASC');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
 
}
