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
  <meta name="description" content="<?= htmlspecialchars(env('META_DESCRIPTION', 'A modern college website scaffold.'), ENT_QUOTES, 'UTF-8'); ?>">
  <link rel="icon" type="image/svg+xml" href="<?= asset('/assets/images/logo.svg'); ?>">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- AOS CSS -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <!-- Site CSS -->
  <link href="<?= asset('/assets/css/main.css'); ?>" rel="stylesheet">
</head>
<body>
