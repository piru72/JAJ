<!doctype html>
<html lang="en">

<head>
    <title>JAJ</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="stylesheet" href="/resources/library/css/bootstrap.min.css" crossorigin="anonymous"> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom CSS-->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!--Navigation Section-->

    <nav class="navbar navbar-expand-lg bg-light rounded">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#centeredNav" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse d-lg-flex" id="centeredNav">
                <a class="navbar-brand col-lg-3 me-0" href="#">JAJ</a>
                <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                    <li class="nav-item">
                        <a class="nav-link" onclick="window.location.href='index.php'">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="window.location.href='problemset.php'">Problemset</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="window.location.href='leaderboard.php'">Leaderboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="window.location.href='submissions.php'">Submissions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="window.location.href='createProblem.php'">Create</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="window.location.href='ide.php'">IDE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  onclick="window.location.href='debugger.php'">Debugger</a>
                    </li>
                </ul>
                <div class="d-lg-flex col-lg-3 justify-content-lg-end">
                    <button onclick="window.location.href='registration.php'" class="btn btn-primary">Sign In</button>
                </div>
            </div>
        </div>
    </nav>

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