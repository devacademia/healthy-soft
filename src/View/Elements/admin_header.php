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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Panel</title>
  <link rel="stylesheet" href="<?= ASSETS ?>bootstrap-5.3.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= ASSETS ?>fontawesome-free-6.4.2/css/all.min.css" />
  <link rel="stylesheet" href="<?= ASSETS ?>css/main.css" />
</head>

<body>
  <div class="main">
    <div class="navbar-side">
      <h6>
        <span class="icon"><i class="fas fa-code"></i></span>
        <span class="link-text">HEALTHY SOFT</span>
      </h6>
      <ul class="ps-0">
        <li>
          <a href="#" class="link-active" title="Dashboard">
            <span class="icon"><i class="fas fa-chart-bar"></i></span>
            <span class="link-text">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#" class="myBtn" data-bs-toggle="collapse" data-bs-target="#my-sub" title="Post" aria-expanded="false">
            <span class="icon"><i class="fas fa-list"></i></span>
            <span class="link-text">Post</span>
            <span class="ml-auto myCaret"></span>
          </a>
          <div id="my-sub" class="collapse bg-secondary">
            <a href="#" title="All Post">
              <span class="icon"><i class="fas fa-copy"></i></span>
              <span class="link-text">All Post</span>
            </a>
            <a href="#" title="Add Post">
              <span class="icon"><i class="fas fa-pen-fancy"></i></span>
              <span class="link-text">Add Post</span>
            </a>
          </div>
        </li>
        <li>
          <a href="#" title="Category">
            <span class="icon"><i class="fas fa-list-alt"></i></span>
            <span class="link-text">Category</span>
          </a>
        </li>
        <li>
          <a href="#" title="Comment">
            <span class="icon"><i class="fas fa-comment"></i></span>
            <span class="link-text">Comment</span>
          </a>
        </li>
        <li>
          <a href="#" title="Tags">
            <span class="icon"><i class="fas fa-tags"></i></span>
            <span class="link-text">Tags</span>
          </a>
        </li>
        <li>
          <a href="#" title="Profile">
            <span class="icon"><i class="fas fa-user-circle"></i></span>
            <span class="link-text">Profile</span>
          </a>
        </li>
        <li>
          <a href="#" title="Setting">
            <span class="icon"><i class="fas fa-cog"></i></span>
            <span class="link-text">Setting</span>
          </a>
        </li>
        <li>
          <a href="#" title="Sign Out">
            <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
            <span class="link-text">Sign Out</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="content">
      <nav class="navbar navbar-dark bg-dark py-2 ps-3">
        <a href="#" id="navBtn">
          <span id="changeIcon" class="fa fa-bars text-light"></span>
        </a>

        <div class="d-flex me-md-4">
          <a class="nav-link text-light px-3" href="#"><i class="fas fa-search"></i></a>
          <a class="nav-link text-light px-3" href="#"><i class="fas fa-bell"></i></a>
          <a class="nav-link text-light px-3" href="#"><i class="fas fa-sign-out-alt"></i></a>
        </div>
      </nav>

      <div class="container mt-3">