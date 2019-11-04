<?php
require "Classes/Email.php";
spl_autoload_register(function ($class_name) {
    include 'classes/'.$class_name.'.php';
});

$sender='anita@123.com';
$recipient='anna@123.com';
$subject='Exam Details';
$text='Exam is scheduled on November 12th Tuesday at 8.00am E block';

$email= Email :: displayEmail($sender,$recipient,$subject,$text);
?>