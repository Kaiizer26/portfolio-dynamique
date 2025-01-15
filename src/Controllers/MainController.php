<?php

namespace App\Controllers;

use App\Database\Database;
use App\Models\Technology;
use App\Models\Tool;


class MainController
{
    private $technologyModel;
    private $toolModel;

    public function __construct()
    {
        $this->technologyModel = new Technology();
        $this->toolModel = new Tool();
        require_once __DIR__ . '/../../templates/partials/header.php';
    }

    public function index()
    {
        $technologies = $this->technologyModel->getAllTechnologies();
        $tools = $this->toolModel->getAllTools();
        require_once __DIR__ . '/../../templates/home.php';
        require_once __DIR__ . '/../../templates/partials/footer.php';
    }

    public function footer()
    {
        require_once __DIR__ . '/../../templates/partials/footer.php';
    }

    
    public function contact()
    {
        require_once __DIR__ . '/../../templates/contact.php';
    }

    public function construction()
    {
        require __DIR__ . '/../../templates/construction.php';
    }
}
