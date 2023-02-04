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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/leaderboard.css">
</head>

<body>

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

</body>

</html>