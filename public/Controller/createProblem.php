<?php

require_once("DatabaseConnection.php");
if (isset($_POST['problemTitle']) && isset($_POST['problemStatement']) && isset($_POST['note']) && isset($_POST['sampleInput']) && isset($_POST['sampleOutput']) && isset($_POST['standerdInput']) && isset($_POST['standerdOutput'])) {

    $problemTitle = $_POST['problemTitle'];
    $problemStatement = $_POST['problemStatement'];
    $note = $_POST['note'];
    $sampleInput = $_POST['sampleInput'];
    $sampleOutput = $_POST['sampleOutput'];
    $standerdInput = $_POST['standerdInput'];
    $standerdOutput = $_POST['standerdOutput'];
    $cpu_limit = 1000;
    $memory_limit = 256;
    $source_limit = 20;
    $created_at = date('Y-m-d H:i:s');
    $updated_at = date('Y-m-d H:i:s');
    $author = 1;
    
    $sql = "INSERT INTO `problem_sets` (`title`, `statement`, `notes`, `sample_input`, `sample_output`, `standerd_input`, `standerd_output`, `cpu_limit`, `mem_limit`, `source_limit`, `created_at`, `updated_at`, `author`) VALUES ('$problemTitle', '$problemStatement', '$note', '$sampleInput', '$sampleOutput', '$standerdInput', '$standerdOutput', '$cpu_limit', '$memory_limit', '$source_limit', '$created_at', '$updated_at', '$author')";


    $verdict = "New problem successfully";

    if ($connect->query($sql) === TRUE) {
        echo $verdict;
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }




    echo "Cutiee";
} else {
    echo "error";
    echo $_POST['problemTitle'];
}
