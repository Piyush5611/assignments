<?php
require_once __DIR__ . '/../config/config.php';

$title = isset($pageTitle) ? $pageTitle . ' | ' . APP_NAME : APP_NAME;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></title>
  <meta name="description" content="<?= htmlspecialchars(env('META_DESCRIPTION', 'A modern college website with creative design and engaging animations.'), ENT_QUOTES, 'UTF-8'); ?>">
  <meta name="keywords" content="<?= htmlspecialchars(env('META_KEYWORDS', 'college, education, courses, admission, learning'), ENT_QUOTES, 'UTF-8'); ?>">
  <meta name="author" content="<?= htmlspecialchars(APP_NAME); ?>">
  
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:description" content="<?= htmlspecialchars(env('META_DESCRIPTION', 'A modern college website with creative design and engaging animations.'), ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:image" content="<?= asset('/assets/images/og-image.jpg'); ?>">
  
  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:title" content="<?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="twitter:description" content="<?= htmlspecialchars(env('META_DESCRIPTION', 'A modern college website with creative design and engaging animations.'), ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="twitter:image" content="<?= asset('/assets/images/og-image.jpg'); ?>">
  
  <link rel="icon" type="image/svg+xml" href="<?= asset('/assets/images/favicon.svg'); ?>">
  <link rel="apple-touch-icon" href="<?= asset('/assets/images/apple-touch-icon.png'); ?>">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  
  <!-- AOS CSS -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  
  <!-- Site CSS -->
  <link href="<?= asset('/assets/css/main.css'); ?>" rel="stylesheet">
  
  <!-- Preload critical fonts -->
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" as="style">
</head>
<body>
