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
    <link rel="stylesheet" href="css/createProblem.css">
</head>

<body>

    <!--Navigation Section-->

    <?php include './View/partials/header.php'; ?>

    <!--End of Navigation Section-->

    <div class="container-fluid">
        <div class="row main">

            <div class="col-md-12 left-column">


                <form id="submit-form">


                    <div class="code-section" style="width:60%; float:left; padding:10px;">

                        <div class="form-group">

                            <label>Problem Title(Required)</label>
                            <textarea class="form-control " name="problemTitle"></textarea>

                        </div>
                        <div class="form-group">

                            <label>Problem Body(Required)</label>
                            <textarea class="form-control " name="problemStatement" rows="6" style="height: 46vh;"></textarea>

                        </div>


                        <div class="form-group">

                            <label>Note</label>
                            <textarea class="form-control" name="note" rows="6"></textarea>

                        </div>
                    </div>
                    <div class="test-cases" style="width:40%; float:left;">

                        <div class="form-group">

                            <label>Sample Input (Required)</label>
                            <textarea class="form-control" name="sampleInput" rows="6"></textarea>

                        </div>
                        <div class="form-group">

                            <label>Sample Output(Required)</label>
                            <textarea class="form-control" name="sampleOutput" rows="6"></textarea>

                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Standard Input</label>
                            <textarea class="form-control" name="standerdInput" id="" rows="6"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Standard Output</label>
                            <textarea class="form-control" name="standerdOutput" id="" rows="6" required></textarea>
                        </div>
                        <div class="col-md-12 left-column">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>


            </div>





        </div>
    </div>
    </div>

    </div>


    </div>
    </div>


    <script>
        const submitForm = document.querySelector('#submit-form');
        submitForm.addEventListener('submit', function(event) {
            event.preventDefault();
            const formData = new FormData(submitForm);
            fetch('./Controller/createProblem.php', {
                    method: 'post',
                    body: formData
                })
                .then(response => response.text())
                .then(result => {
                    alert(result);

                });
        });
    </script>






</body>

</html>