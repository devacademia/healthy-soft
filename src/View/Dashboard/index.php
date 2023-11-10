<?php

/**
 * Healthy Soft : Bugs tracking and features suggestion system
 *
 * @copyright Copyright (c) Silevester D. (https://github.com/SilverD3)
 * @link      https://github.com/devacademia/healthy-soft
 * @since     1.0 (2023)
 */

require_once dirname(dirname(dirname(__DIR__))) . DIRECTORY_SEPARATOR . 'autoload.php';

use Core\FlashMessages\Flash;

require_once dirname(__DIR__) . DS . 'Elements' . DS . 'admin_header.php';
?>

<div class="row">
  <div class="col-lg-4 col-md-6 p-2">
    <div class="card border-primary rounded-0">
      <div class="card-header bg-primary rounded-0">
        <h5 class="card-title text-white mb-1">Total Users</h5>
      </div>
      <div class="card-body">
        <h1 class="display-4 font-weight-bold text-primary text-center">
          105
        </h1>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 p-2">
    <div class="card border-success rounded-0">
      <div class="card-header bg-success rounded-0">
        <h5 class="card-title text-white mb-1">Verified Users</h5>
      </div>
      <div class="card-body">
        <h1 class="display-4 font-weight-bold text-success text-center">
          75
        </h1>
      </div>
    </div>
  </div>

  <div class="col-lg-4 p-2">
    <div class="card border-danger rounded-0">
      <div class="card-header bg-danger rounded-0">
        <h5 class="card-title text-white mb-1">Unverified Users</h5>
      </div>
      <div class="card-body">
        <h1 class="display-4 font-weight-bold text-danger text-center">
          30
        </h1>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-4 col-md-6 p-2">
    <div class="card border-primary rounded-0">
      <div class="card-header bg-primary rounded-0">
        <h5 class="card-title text-white mb-1">Total Posts</h5>
      </div>
      <div class="card-body">
        <h1 class="display-4 font-weight-bold text-primary text-center">
          98
        </h1>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 p-2">
    <div class="card border-success rounded-0">
      <div class="card-header bg-success rounded-0">
        <h5 class="card-title text-white mb-1">Published Posts</h5>
      </div>
      <div class="card-body">
        <h1 class="display-4 font-weight-bold text-success text-center">
          33
        </h1>
      </div>
    </div>
  </div>

  <div class="col-lg-4 p-2">
    <div class="card border-danger rounded-0">
      <div class="card-header bg-danger rounded-0">
        <h5 class="card-title text-white mb-1">Private Posts</h5>
      </div>
      <div class="card-body">
        <h1 class="display-4 font-weight-bold text-danger text-center">
          16
        </h1>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-6 p-2">
    <div class="card rounded-0">
      <h1 class="display-4">Hello World</h1>
      <p class="lead">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        Repudiandae, recusandae maiores
      </p>
      <hr class="my-4" />
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Delectus, voluptatem ea similique ratione vero mollitia
        accusantium! Eius amet minus dolorum sint odio ut ipsam
        temporibus necessitatibus blanditiis quidem, iusto doloremque!
      </p>
      <a href="#" class="btn btn-primary btn-lg rounded-0">Learn More</a>
    </div>
  </div>
  <div class="col-lg-6 p-2">
    <div class="card rounded-0">
      <h1 class="display-4">Hello World</h1>
      <p class="lead">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        Repudiandae, recusandae maiores
      </p>
      <hr class="my-4" />
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Delectus, voluptatem ea similique ratione vero mollitia
        accusantium! Eius amet minus dolorum sint odio ut ipsam
        temporibus necessitatibus blanditiis quidem, iusto doloremque!
      </p>
      <a href="#" class="btn btn-primary btn-lg rounded-0">Learn More</a>
    </div>
  </div>
</div>

<?php require_once dirname(__DIR__) . DS . 'Elements' . DS . 'admin_footer.php'; ?>