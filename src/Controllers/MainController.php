<?php

namespace App\Controllers;

use App\Database\Database;
use App\Models\Technology;
use App\Models\Tool;
use App\Models\Project;


class MainController
{
    private $technologyModel;
    private $toolModel;
    private $projectModel;

    public function __construct()
    {
        $this->technologyModel = new Technology();
        $this->toolModel = new Tool();
        $this->projectModel = new Project();
        require_once __DIR__ . '/../../templates/partials/header.php';
    }

    public function index()
    {
        $technologies = $this->technologyModel->getAllTechnologies();
        $tools = $this->toolModel->getAllTools();
        $projects = $this->projectModel->getAllProjects();
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
