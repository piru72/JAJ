<?php require_once './View/layout/header.php'; ?>

<div class="container-fluid">
    <div class="row main">
        <div class="col-md-4 left-column">

            <?php

            include "../Database/Connection.php";
            // $id = isset($_GET['id']) ? (int)$_GET['id'] : null;
            // $id = $routes->get('problem')->getParam('id');
            //$value = urldecode($_GET['value']);
            $value = 1;

            $query = "select title ,statement, sample_input, sample_output,notes from problem_sets where id = $value ";
            $result = mysqli_query($connect, $query);
            $row = mysqli_fetch_array($result);

            echo
            " <div class=\"problem-details\">

                <h4>Problem Name  <br><br><br>" .  $row['title'] . "<br><br><br> </h4>
                <p><strong>Description <br> " . $row['statement'] . " <br><br><br> </strong></p>
                <p><strong>Sample Input <br>" . $row['sample_input'] . "<br><br><br> </strong> </p>
                <p><strong>Sample Output: <br>" . $row['sample_output'] . "<br><br><br> </strong> </p>
                <p><strong>Notes:</strong> <br>" . $row['notes'] . "</p>

                </div>";


            ?>



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


<?php require_once './View/layout/footer.php'; ?>