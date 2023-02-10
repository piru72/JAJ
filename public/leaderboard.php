<?php require_once './View/layout/header.php'; ?>
<!--Navigation Section-->

<?php include './View/partials/header.php'; ?>

<!--End of Navigation Section-->

<div class="container-fluid">
    <div class="row" style="margin-top: 20px">
        <div class="col-12 text-center" style="margin-right:30px;">

            <h4>Leaderboard</h4>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Rank</th>
                            <th scope="col">Handle</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Institutions</th>
                            <th scope="col">Solved</th>
                        </tr>
                    </thead>
                </table>
            </div>

        </div>
    </div>

    <?php require_once './View/layout/footer.php'; ?>