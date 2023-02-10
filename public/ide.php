<?php require_once './View/layout/header.php'; ?>


<div class="container-fluid">
    <div class="row main">
        <div class="col-md-4 left-column">
            <div class="problem-details">
                <h4>Fetch From</h4>
                <select name="language" class="form-control">
                    <option value="54">Codeforces</option>
                    <option value="62">CodeChef</option>
                    <option value="71">Toph</option>
                </select>
                <h4>Problem Code</h4>
                <textarea name="sourceCode" class="form-control"></textarea>
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


<?php require_once './View/layout/footer.php'; ?>