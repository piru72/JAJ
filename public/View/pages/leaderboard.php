<?php require_once './View/layout/header.php'; ?>


<div class="container-fluid">
    <div class="row" style="margin-top: 20px">
        <div class="col-12 text-center" style="margin-right:30px;">

            <h4>Leaderboard</h4>

            <div class="table-responsive">
                <table class="table table-striped">

                    <?php require_once '../public/Controller/leaderBoardController.php'; ?>

                </table>
            </div>

        </div>
    </div>

    <?php require_once './View/layout/footer.php'; ?>