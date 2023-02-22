<?php require_once './View/layout/header.php'; ?>


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
    const createPath = '<?php echo $routes->get('debugSubmit')->getPath(); ?>';

    submitForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(submitForm);
        fetch(createPath, {
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