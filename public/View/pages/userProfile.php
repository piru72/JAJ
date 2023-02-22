<?php require_once './View/layout/withoutCSSLinkedHeader.php'; ?>

<!-- Custom CSS-->
<link rel="stylesheet" href="public/css/userProfile.css">
<link rel="stylesheet" href="public/css/style.css">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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

            <div class="row col-12 justify-content-center align-items-center g-2">

                <div class="col-4 text-end">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Verdicts</h4>
                            <canvas id="myChart"></canvas>
                         
                        </div>
                    </div>
                </div>

                <div class="col-8 text-end">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Problem Solved</h4>
                            <canvas id="problemSolvedBarChart"></canvas>
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

    <script>
        $(document).ready(function() {
            // Fetch data for the chart
            var data = {
                labels: ["Accepted", "Wrong", "Runtime"],
                datasets: [{
                    data: [10, 20, 30],
                    backgroundColor: ["#FF6384", "#36A2EB", "#FFCE56"],
                    hoverBackgroundColor: ["#FF6384", "#36A2EB", "#FFCE56"]
                }]
            };

            // Create the chart
            var ctx = $("#myChart");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: data
            });
        });

        $(document).ready(function() {
            var ctx = $('#problemSolvedBarChart');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['DP', 'Number Theory', 'Implementation', 'String', 'DSU', 'Greedy'],
                    datasets: [{
                        label: 'Problems Solved',
                        data: [1200, 1600, 1100, 1800, 1900, 2200],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>


    <?php require_once './View/layout/footer.php'; ?>