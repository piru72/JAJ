<?php
  if (isset($_POST['testCase']) && isset($_POST['sourceCode']) && isset($_POST['language'])) {
    $testCases = $_POST['testCase'];
    $sourceCode = $_POST['sourceCode'];
    $language = $_POST['language'];
    // processing code
    
    // if processing is successful
    echo $sourceCode;
  } else {
    echo "error";
  }
