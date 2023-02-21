<?php
session_start();
if (isset($_SESSION['userEmail'])) {
    // User is already logged in
    $loggedIn = true;
    $userEmail = $_SESSION['userEmail'];
    if (isset($_POST['logout'])) {
        // Destroy session variable and redirect to home page
        session_destroy();
        header("Location: " . $routes->get('home')->getPath());
        exit;
    }
} else {
    // User is not logged in
    $loggedIn = false;
    $userEmail = null;
}
?>

<nav class="navbar navbar-expand-lg bg-light rounded">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#centeredNav" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse d-lg-flex" id="centeredNav">
            <a class="navbar-brand col-lg-3 me-0" href="#">JAJ</a>
            <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $routes->get('home')->getPath();  ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $routes->get('problemset')->getPath();  ?>">Problemset</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $routes->get('leaderboard')->getPath();  ?>">Leaderboard</a>
                </li>


                <?php

                if (isset($_SESSION['userEmail'])) {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $routes->get('submissions')->getPath();  ?>">Submissions</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $routes->get('create')->getPath();  ?>">Create</a>
                    </li>
                <?php
                }
                ?>



                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $routes->get('ide')->getPath();  ?>">IDE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $routes->get('debugger')->getPath();  ?>">Debugger</a>
                </li>

                <?php

                if (isset($_SESSION['userEmail']) == "parvezdirom2000@gmail.com") {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $routes->get('admin')->getPath();  ?>" >Admin</a>
                    </li>

                <?php
                }
                ?>
            </ul>
            <div class="d-lg-flex col-lg-3 justify-content-lg-end">
                <?php

                if (!isset($_SESSION['userEmail'])) {
                ?>
                    <a class="btn btn-primary btn-lg" href="<?php echo $routes->get('registration')->getPath(); ?>" role="button">Sign In</a>
                <?php
                } ?>
                <?php

                if (isset($_SESSION['userEmail'])) {
                ?>
                    <form method="post">
                        <button class="btn btn-primary btn-lg" name="logout" type="submit">Logout</button>
                    </form>
                <?php
                }
                ?>

            </div>

        </div>
    </div>
</nav>