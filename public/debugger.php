<!DOCTYPE html>
<html>

<head>
    <title>JAJ</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom CSS-->
    <link rel="stylesheet" href="css/debugger.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!--Navigation Section-->

    <?php include './View/partials/header.php'; ?>

    <!--End of Navigation Section-->
    <div class="container-fluid">
        <div class="row main">
            <div class="col-md-12 left-column">

                <div class="problem-details">
                    <form id="submit-form">

                        <div class="code-section" style="width:70%; float:left; padding:10px;">
                            <h4>Select Language</h4>

                            <select name="language" class="form-control">
                                <option value="54">C++ (GCC 9.2.0)</option>
                                <option value="62">Java (OpenJDK 13.0.1)</option>
                                <option value="71">Python (3.8.1)</option>
                            </select>

                            <h4>Source Code</h4>

                

                            <textarea name="sourceCode" class="form-control code-editor" style="height: 60vh;"></textarea>

                        </div>

                        <div class="test-cases" style="width:30%; float:left;">

                            <h4>Test Cases</h4>
                         
                                <div class="form-group">
                                    <label>Input Test Case</label>
                                    <textarea name="testCase" class="form-control" style="height: 30vh;"></textarea>
                                </div>
                          
                           
                                <div class="form-group">
                                    <label>Expected Output</label>
                                    <textarea name="expectedOutput" class="form-control" style="height: 30vh;"></textarea>
                                </div>
                           


                            <button type="submit" class="btn btn-primary">Submit</button>

                        </div>


                    </form>
                </div>

            </div>

        </div>
    </div>

    <script>
        const submitForm = document.querySelector('#submit-form');
        submitForm.addEventListener('submit', function(event) {
            event.preventDefault();
            const formData = new FormData(submitForm);
            fetch('./Controller/submission.php', {
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