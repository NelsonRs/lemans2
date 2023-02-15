<?php 
$url = $_SERVER['DOCUMENT_ROOT'];
session_start();
if (empty($_SESSION['user'])) { header("Location: /admin/login.php"); exit(); }