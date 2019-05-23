<?php
/**
 * dispatching the world
 * 
 */
include_once 'controller/homecontroller.php';



include_once 'controller/aboutcontroller.php';



$page = isset($_GET["page"])?$_GET["page"]: NULL;


if($page != null){

    //About
    if($page === "about"){
        $aboutcontroller = new aboutcontroller();
        $aboutcontroller->index();
}else{
    $error= new errorpagecontroller();
    $error->index();
    }
}else{
    //Home
    $homecontroller = new homecontroller();
    $homecontroller->index();
}

?>
