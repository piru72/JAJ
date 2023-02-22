<?php require_once './View/layout/withoutCSSLinkedHeader.php'; ?>

<!-- Custom CSS-->
<link rel="stylesheet" href="public/css/userProfile.css">
<link rel="stylesheet" href="public/css/style.css">
</head>
<?php require_once './View/components/navBar.php'; ?>
<?php require_once '../public/Controller/userDataShowController.php'; ?>

<!--Buttons Section-->
<div class="container-fluid">
    <div class="row" style="margin-top: 20px">
        <div class="col-8 text-center" style="margin-right:30px;">

            <div class="row col-12 justify-content-center align-items-center g-2">



                <div class="col text-end">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Contest Arranged</h4>
                            <p class="card-text">
                            <h1>00</h1>
                            </p>
                        </div>
                    </div>
                </div>



                <div class="col text-end">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Problem created</h4>
                            <p class="card-text">
                                <?php
                                echo '<h1>' . $problem_created . '</h1>';
                                ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col text-end">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Solved</h4>
                            <p class="card-text">
                            <?php
                                echo '<h1>' . $problem_solved . '</h1>';
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-3 d-flex flex-column justify-content-center user-card">

            <?php require_once '../public/Controller/userDataShowController.php'; ?>
            <img src="public/image/DP.png" class="img-fluid rounded" alt="">
            <h5 style="margin-top: 20px"><i class="fas fa-bullhorn"></i> Details</h5>
            <h6>AUST</h6>
            <?php

            echo '<h6>' . $UserName . '</h6>';
            echo '<h6>' . $fullName . '</h6>';
            echo '<h6>' . $email . '</h6>';
            ?>
            <h6>Dhaka,Bangladesh</h6>
            <h6> <a href="https://github.com/piru72">piru72 </a></h6>
            <h6>Last Seen 5 minutes ago</h6>
            <h6>Joined on 1 Jan 2023</h6>

        </div>





    </div>


    <?php require_once './View/layout/footer.php'; ?>