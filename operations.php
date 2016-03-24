<?php
session_start();
require_once('mysql_connect.php');



//print_r($_SESSION['users_id']);
//$_POST['operation'] = "login";

if(empty($_SESSION['users_id'])){
    if (!empty($_POST['operation'])) {
        $operation = $_POST['operation'];
//        echo $operation;
    } else {
        $operation = 'none';
//        echo "else" .$operation;
    }

    if($operation == 'login'){
//        echo "should be here";
        include('operations/login.php');
        print(json_encode($output));
        exit();
    }
//    echo "here";
}


if(!empty($_SESSION['users_id'])) {

    if (!empty($_POST['operation'])) {
        $operation = $_POST['operation'];
    } else {
        $operation = 'none';
    }

    switch ($operation) {
//        case 'login':
//            include('operations/login.php');
//            break;
        case 'editBlog': // Update Blog
            include('operations/editBlog.php');
            break;
        case 'deleteBlog': // Delete Blog
            include('operations/deleteBlog.php');
            break;
        case 'newUser': // Creating a new user: This will be moved
            include('operations/newUser.php');
            break;
        case 'read': // Get all Blogs
            include('operations/get.php');
            break;
        case 'getAllOneUser': // Get all Blogs for one user
            include('operations/getAllOneUser.php');
            break;
        case 'create': // This creates a new blog
            include('operations/create.php');
            break;
        case 'deleteUser':
            include('operations/deleteUser.php');
            break;
        case 'signout':
            include('operations/signout.php');
            break;
        default:
            $output = ['success' => false, 'errors' => ['invalid operation']];
    }
}
//else{
//    $output = ['success' => false, 'errors' => ['session has expired please log in again to continue']];
//}

print(json_encode($output));
?>