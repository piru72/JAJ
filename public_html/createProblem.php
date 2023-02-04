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
                        <a class="nav-link"  onclick="window.location.href='problemset.php'">Problemset</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="window.location.href='leaderboard.php'">Leaderboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="window.location.href='submissions.php'">Submissions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="window.location.href='createProblem.php'">Create</a>
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
        <div class="row main">
            <div class="col-md-12 left-column">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="col-md-6 left-column">

                <div class="form-group">

                    <label>Problem Title(Required)</label>
                    <textarea class="form-control "></textarea>

                </div>
                <div class="form-group">

                    <label>Problem Body(Required)</label>
                    <textarea class="form-control " rows="6"></textarea>

                </div>


                <div class="form-group">

                    <label>Note</label>
                    <textarea class="form-control" rows="6"></textarea>

                </div>

            </div>
            <div class="col-md-6 right-column">
                <form id="submit-form">

                    <div class="form-group">

                        <label>Sample Input (Required)</label>
                        <textarea class="form-control" rows="6"></textarea>

                    </div>
                    <div class="form-group">

                        <label>Sample Output(Required)</label>
                        <textarea class="form-control" rows="6"></textarea>

                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Standard Input</label>
                        <textarea class="form-control" name="standerd_input" id="" rows="6"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Standard Output</label>
                        <textarea class="form-control" name="standerd_output" id="" rows="6" required></textarea>
                    </div>


            </div>
            </form>


        </div>
    </div>
    </div>

    </div>


    </div>
    </div>






</body>

</html>