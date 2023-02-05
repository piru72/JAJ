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
    <link rel="stylesheet" href="css/problemset.css">
</head>

<body>

    <!--Navigation Section-->

    <?php include './View/partials/header.php'; ?>

    <!--End of Navigation Section-->


    <div class="container-fluid">
        <div class="row" style="margin-top: 20px">
            <div class="col-12 text-center" style="margin-right:30px;">

                <h4>Problems</h4>

                <div class="table-responsive">
                    <table class="table table-striped">


                        <?php

                        include "./Database/Connection.php";

                        $query = "select ps.id ,ps.title, u.UserName from problem_sets ps , users u where ps.author = u.id ";
                        $result = mysqli_query($connect, $query);


                        echo "
						<thead class=\"thead-light\">
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Accuracy</th>
                            <th>Author</th>
                            <th>Difficulty</th>
                        </tr>
                        </thead>";

                       

                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tbody>
						  <tr>
						  <td>" . $row['id'] . "</td>
						  <td>" . "<a href=\"problem.php\" >" . $row['title'] . "</a>" . "</td>
						  <td>" . 'Unsolved' . "</td>
						  <td>" . 'Accuracy' . "</td>
                          <td>" . $row['UserName'] . "</td>
						  <td>" . "<span class=\"badge bg-success\"> Easy</span>" . "</td>
						  
						</tr>
						</tbody>";
                        }

                        ?>





                    </table>
                </div>

            </div>
        </div>

</body>

</html>