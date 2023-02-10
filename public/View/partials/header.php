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
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $routes->get('submissions')->getPath();  ?>">Submissions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $routes->get('create')->getPath();  ?>">Create</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $routes->get('ide')->getPath();  ?>">IDE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $routes->get('debugger')->getPath();  ?>">Debugger</a>
                </li>
            </ul>
            <div class="d-lg-flex col-lg-3 justify-content-lg-end">
                <button onclick="window.location.href='registration.php'" class="btn btn-primary">Sign In</button>
            </div>
        </div>
    </div>
</nav>