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
                <h4>Select Language</h4>
                <select class="form-control">
                    <option>Language 1</option>
                    <option>Language 2</option>
                    <option>Language 3</option>
                </select>
                <h4>Text Editor</h4>
                <textarea class="form-control code-editor"></textarea>
                <div class="test-cases">
                    <h4>Test Cases</h4>
                    <div class="form-group">
                        <label for="inputTestCase">Input Test Case</label>
                        <textarea class="form-control "></textarea>
                    </div>
                  
                    <button class="btn btn-primary">Test</button>
                    <button class="btn btn-primary">Submit</button>
                    

                
                </div>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

</body>

</html>