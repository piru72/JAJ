<?php require_once './View/layout/withoutCSSLinkedHeader.php'; ?>

<!-- Custom CSS-->
<link rel="stylesheet" href="public/css/userProfile.css">
<link rel="stylesheet" href="public/css/style.css">
</head>
<?php require_once './View/components/navBar.php'; ?>

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
                            <h1>23</h1>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col text-end">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Problem created</h4>
                            <p class="card-text">
                            <h1>23</h1>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col text-end">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Solved</h4>
                            <p class="card-text">
                            <h1>24</h1>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-3 d-flex flex-column justify-content-center user-card">

            <?php require_once '../public/Controller/userDataShowController.php'; ?>

        </div>








    </div>


    <?php require_once './View/layout/footer.php'; ?>