<!doctype html>
<html lang="en">

<head>
  <title>JAJ</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Custom CSS-->
  <link rel="stylesheet" href="public/css/style.css">
</head>

<body>

  <!--Navigation Section-->

  <?php include './View/partials/header.php'; ?>

  <!--End of Navigation Section-->

  <!--Buttons Section-->
  <div class="container-fluid">
    <div class="row" style="margin-top: 20px">
      <div class="col-8 text-center" style="margin-right:30px;">
        <button class="btn btn-outline-secondary btn-lg btn-square m-1" onclick="window.location.href='createProblem.php'">
          <i class="fas fa-plus"></i> Add Problems
        </button>
        <button class="btn btn-outline-secondary btn-lg btn-square m-1" onclick="window.location.href='problemset.php'">
          <i class="fas fa-pen"></i> Solve Problems
        </button>
        <button class="btn btn-outline-secondary btn-lg btn-square m-1" onclick="window.location.href='leaderboard.php'">
          <i class="fas fa-trophy"></i> Leaderboard
        </button>
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
                  <a class="btn btn-primary btn-lg" href="#" role="button">Join JAJ</a>
                  <a class="btn btn-outline-primary btn-lg" href="#" role="button">Host Contest</a>
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

      <!-- <div class="container-fluid">
                <div class="col-8" style="margin-top: 20px">
                    <div class="card bg-light">
                        <div class="card-body">
                            <h2 class="card-title">Inter University Contest</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, magna id mollis congue, augue velit congue dolor, euismod bibendum velit velit vel augue. Sed velit velit, fringilla euismod molestie et, luctus id metus. Nam euismod libero id mauris bibendum, a euismod augue bibendum. Sed malesuada, risus id viverra ullamcorper, elit ipsum tristique quam, id ullamcorper augue erat quis risus. Sed porttitor, est at posuere porttitor, enim odio congue tellus, eget malesuada massa odio vitae est. Sed sit amet velit velit.</p>
                            <div class="card-footer">
                                <p class="text-muted">Author: John Doe</p>
                                <p class="text-muted">Time: Jan 15, 2023</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->




    </div>
  </div>




  <footer>
    <p>
      Made with <i class="fa fa-heart"></i> by Freon Devs
    </p>
  </footer>
  <script src="/resources/library/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.0/typed.min.js" integrity="sha512-zKaK6G2LZC5YZTX0vKmD7xOwd1zrEEMal4zlTf5Ved/A1RrnW+qt8pWDfo7oz+xeChECS/P9dv6EDwwPwelFfQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    var typed = new Typed('.welcome', {
      strings: ["WELCOME TO JAJ(BETA)", "The Place for Competitive Programmers"],
      typeSpeed: 200
    });
  </script>
</body>

</html>