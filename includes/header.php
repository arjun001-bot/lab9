<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$title = $title ?? "Lab 9";
?>
<!DOCTYPE html>
<html>

<head>
    <title><?php echo $title; ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            padding-bottom: 60px;
        }
    </style>
</head>

<body>

    <?php require_once __DIR__ . '/navbar.php'; ?>