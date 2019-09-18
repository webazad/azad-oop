
<?php
/**
*---------------------------------------------------------------------------------
* ::	THE WAY TO LOAD ALL THE CLASSES AT A TIME
*---------------------------------------------------------------------------------
*/
spl_autoload_register(function($class){
    require_once("libs/{$class}.php");
});
/**
function __autoload($class_name){
   require_once("libs/{$class}.php");
}
*/
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>oop</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    </head>
    <body>
        <div class="big_wrapper">
            <header class="the_header">
                <div class="container_box">
                    <h1 class="main_logo">PHP OOP WITH PDO</h1>
                </div>
            </header>
