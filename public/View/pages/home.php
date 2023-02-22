<?php require_once './View/layout/header.php'; ?>



<!--Buttons Section-->
<div class="container-fluid">
  <div class="row" style="margin-top: 20px">
    <div class="col-8 text-center" style="margin-right:30px;">
      <?php

      if (isset($_SESSION['userEmail'])) {
      ?>

        <a href="<?php echo $routes->get('create')->getPath();  ?>">
          <button class="btn btn-outline-secondary btn-lg btn-square m-1">
            <i class="fas fa-plus"></i> Add Problems
          </button>
        </a>


        <a href="<?php echo $routes->get('problemset')->getPath();  ?>">
          <button class="btn btn-outline-secondary btn-lg btn-square m-1" onclick="window.location.href='problemset.php'">
            <i class="fas fa-pen"></i> Solve Problems
          </button>
        </a>
      <?php
      }
      ?>

      <a href="<?php echo $routes->get('leaderboard')->getPath();  ?>">
        <button class="btn btn-outline-secondary btn-lg btn-square m-1" onclick="window.location.href='leaderboard.php'">
          <i class="fas fa-trophy"></i> Leaderboard
        </button>
      </a>
    </div>
    <div class="col-3 d-flex justify-content-center" style="background-color: white; height: 60px; border-radius: 10px">
      <h5 style="margin-top: 20px"><i class="fas fa-bullhorn"></i> Announcements</h5>

    </div>


    <div class="container-fluid">
      <div class="col-8" style="margin-top: 20px">
        <div class="card bg-light">
          <div class="card-body">

            <div class="p-5 mb-4 bg-light rounded-3">
              <div class="container-fluid py-3">
                <h3 class="display-5 fw-bold welcome" style="display: inline-block"></h3>
                <p class="col-md-8 fs-4">Currently Its in Beta phase,if you find any exception or bug please contact
                  <a href="mailto:parvezdirom2000@gmail.com">parvezdirom2000@gmail.com</a>
                </p>
                <a class="btn btn-primary btn-lg" href="<?php echo $routes->get('registration')->getPath();  ?>" role="button">Join JAJ</a>
                <!-- <a class="btn btn-outline-primary btn-lg" href="#" role="button">Host Contest</a> -->
              </div>
            </div>

            <div class="card-footer">
              <p class="text-muted">Author: JAJ</p>
              <p class="text-muted">Time: Jan 15, 2023</p>
            </div>
          </div>
        </div>
      </div>
    </div>





  </div>
</div>

<?php require_once './View/layout/footer.php'; ?>