<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\MainController;

ob_start();

$controller = new MainController();

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($path) {
    case '/':
        $controller->index();
        $controller->footer();
        break;

    case '/contact': 
        $controller->contact(); 
        break;
    
    default:
        http_response_code(404);
        $controller->construction();
        break;
        
}

ob_end_flush();
