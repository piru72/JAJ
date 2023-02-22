<?php require_once './View/layout/header.php'; ?>



<div class="container-fluid">
    <div class="row" style="margin-top: 20px">
        <div class="col-12 text-center" style="margin-right:30px;">

            <h4>Problems</h4>

            <div class="table-responsive">
                <table class="table table-striped">


                    <?php

                    include "../Database/Connection.php";

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
                        $value = $row['id'];
                        echo "<tbody>
						  <tr>
						  <td>" . $row['id'] . "</td>
						  <td>" . "<a href=\" " .   $routes->get('problem')->getPath() . "\" >" . $row['title'] . "</a>" . "</td>
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
    <?php require_once './View/layout/footer.php'; ?>


