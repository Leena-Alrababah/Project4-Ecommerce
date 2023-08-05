<?php

session_start();

if (isset ($_POST["cname"]) && isset($_POST["details"]) && isset($_POST["price"]) && isset($_POST["canimg"])) {
    $submitted_name = $_POST["cname"];
    $submitted_details = $_POST["details"];
    $submitted_price = $_POST["price"];
    $submitted_img =  $_POST["canimg"];
    

    $product = array (
        "name" => $submitted_name,
        "details" => $submitted_details,
        "price" => $submitted_price,
        "image" => $submitted_img,
    );

    // Store the array in a session variable
    $_SESSION ["product_info"][] = $product;
    
    
    
    // print_r ($_SESSION);
    
    
} 
else {
    $product = array();
    $_SESSION ["product_info"][] = $product;
    // $product = array (
    //     "name" => $submitted_name,
    //     "details" => $submitted_details,
    //     "price" => $submitted_price,
    //     "image" => $submitted_img,
    // );

    // $_SESSION ["product_info"][] = $product;
    
}

header ("location:index.php");
?>