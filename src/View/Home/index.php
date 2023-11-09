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

require_once dirname(__DIR__) . DS . 'Elements' . DS . 'header.php';

?>

<main class="container">
  <div class="row mt-5 p-4 d-flex align-items-center justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Features
        </div>
        <div class="card-body">
          <h5 class="card-title">Suggest feature</h5>
          <p class="card-text">Have an idea ? Let us know</p>
          <a href="#" class="btn btn-primary">I suggest new feature</a>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Bugs
        </div>
        <div class="card-body">
          <h5 class="card-title">Report bugs</h5>
          <p class="card-text">Did you discover some bugs</p>
          <a href="#" class="btn btn-primary">Let us know</a>
        </div>
      </div>
    </div>
  </div>

</main>

<?php require_once dirname(__DIR__) . DS . 'Elements' . DS . 'footer.php'; ?>