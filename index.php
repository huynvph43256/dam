<?php 

// Require file Common
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
// require_once './controllers/HomeController.php';
require_once './controllers/courseController.php';

// Require toàn bộ file Models
// require_once './models/Product.php';
require_once './models/course.php';

// Route
$act = $_GET['act'] ?? '/';

switch ($act) {
    // Trang chủ
    // case '/':
    //     (new HomeController())->home();
    //     break;
    case 'list':
        (new courseController())->list();
        break;
    case 'delete':
        (new courseController())->delete();
        break;    
    case 'create':
        (new courseController())->create();
        break;  
};