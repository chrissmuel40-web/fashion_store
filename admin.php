<?php
session_start();
require_once 'controllers/AdminController.php';

// Router (Mengarahkan aksi URL ke Controller yang tepat)
$action = isset($_GET['action']) ? $_GET['action'] : 'dashboard';
$controller = new AdminController();

switch($action) {
    case 'login': 
        $controller->login(); 
        break;
    case 'logout': 
        $controller->logout(); 
        break;
    case 'add': 
        $controller->add(); 
        break;
    case 'delete': 
        $controller->delete(); 
        break;
    case 'delete_testi': 
        $controller->deleteTestimonial(); 
        break;
    // TAMBAHAN RUTE BARU AGAR BISA ADD TESTIMONI:
    case 'addTestimonial': 
        $controller->addTestimonial(); 
        break;
    default: 
        $controller->dashboard(); 
        break;
}
?>