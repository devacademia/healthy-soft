<?php

/**
 * Healthy Soft : Bugs tracking and features suggestion system
 *
 * @copyright Copyright (c) Silevester D. (https://github.com/SilverD3)
 * @link      https://github.com/devacademia/healthy-soft
 * @since     1.0 (2023)
 */

require_once dirname(dirname(dirname(__DIR__))) . DIRECTORY_SEPARATOR . 'autoload.php';

//use App\View\Helpers\TitleHelper;
//use App\Controller\AuthController;

//AuthController::require_auth();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <!-- Favicons -->
  <link rel="icon" href="<?= BASE_URL ?>favicon.png" sizes="48x48" type="image/png">
  <!-- <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180"> -->
  <!-- <link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png"> -->

  <link rel="stylesheet" href="<?= ASSETS ?>bootstrap-5.3.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= ASSETS ?>css/styles.css">
  <title>Healty Soft</title>
</head>

<body>
  <div class="background">
    <nav class="navbar navbar-expand-md bg-body-secondary">
      <div class="container text-center">
        <a class="navbar-brand" href="<?= BASE_URL ?>">
          <img src="<?= BASE_URL ?>favicon.png" alt="" class="me-1">
          Healthy Soft
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= BASE_URL ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= BASE_URL . 'bugs' ?>">Bugs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= BASE_URL . 'features' ?>">Features</a>
            </li>
            <li>
              <a href="<?= BASE_URL . 'auth/signup' ?>" class="nav-link btn btn-primary btn-small">Sign up</a>
            </li>
            <li>
              <a href="<?= BASE_URL . 'auth/signin' ?>" class="nav-link btn btn-primary btn-small">Sign in</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Username
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Profil</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="<?= BASE_URL . 'auth/logout' ?>">Log out</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>