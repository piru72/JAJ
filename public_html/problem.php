<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .left-column {
            background-color: #f2f2f2;
            padding: 20px;
            height: 100vh;

            resize: horizontal;
            overflow: auto;
        }

        .right-column {
            background-color: #ffffff;
            padding: 20px;
            height: 100vh;
        }

        .code-editor {
            height: 60vh;
        }
    </style>
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
                        <a class="nav-link"  onclick="window.location.href='index.php'">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="window.location.href='problemset.php'">Problemset</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  onclick="window.location.href='leaderboard.php'">Leaderboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="window.location.href='submissions.php'">Submissions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="window.location.href='createProblem.php'">Create</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="window.location.href='ide.php'">IDE</a>
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
            <div class="col-md-4 left-column">
                <div class="problem-details">
                    <h4>Problem Name</h4>
                    <p><strong>Sample Description</strong> input1</p>
                    <p><strong>Sample Input:</strong> input1</p>
                    <p><strong>Sample Output:</strong> output1</p>
                    <p><strong>Notes:</strong> notes</p>
                </div>

            </div>
            <div class="col-md-8 right-column">
                <form id="submit-form">

                    <h4>Select Language</h4>

                    <select name="language" class="form-control">
                        <option value="54">C++ (GCC 9.2.0)</option>
                        <option value="62">Java (OpenJDK 13.0.1)</option>
                        <option value="71">Python (3.8.1)</option>
                    </select>

                    <h4>Text Editor</h4>
                    <textarea name="sourceCode" class="form-control code-editor"></textarea>

                    <div class="test-cases">

                        <h4>Test Cases</h4>

                        <div class="form-group">

                            <label>Input Test Case</label>
                            <textarea name="testCase" class="form-control "></textarea>

                        </div>

                        <button class="btn btn-primary">Test</button>
                        <button type="submit" class="btn btn-primary">Submit</button>



                    </div>
                </form>
                <iframe name="submit-iframe" style="display: none;"></iframe>

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