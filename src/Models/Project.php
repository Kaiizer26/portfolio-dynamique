<?php

namespace App\Models;

use App\Database\Database;
use PDO;

class Project
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getAllProjects()
    {
        $stmt = $this->db->query('SELECT * FROM projects ORDER BY id_project ASC');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
 
}
