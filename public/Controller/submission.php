<?php

require_once("DatabaseConnection.php");
if (isset($_POST['testCase']) && isset($_POST['sourceCode']) && isset($_POST['language'])) {
  $testCases = base64_encode($_POST['testCase']);
  $sourceCode = base64_encode($_POST['sourceCode']);
  $language = $_POST['language'];
  $token = "";
  $who = 1;
  $problem = 100;
  $verdict = 'wrong';
  $stderr = 'wrong';
  $time = '100';
  $memory = '100';
  $created_at = date('Y-m-d H:i:s');
  $updated_at = date('Y-m-d H:i:s');
  $expectedOutput = base64_encode($_POST['expectedOutput']);
  // processing code


  $curl = curl_init();

  curl_setopt_array($curl, [
    CURLOPT_URL => "https://judge0-ce.p.rapidapi.com/submissions?base64_encoded=true&fields=*",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\n  \"language_id\": $language,\n  \"source_code\": \" $sourceCode \",\n  \"stdin\": \"$testCases\",\n  \"expected_output\" : \"$expectedOutput\"\n}",
    CURLOPT_HTTPHEADER => [
      "Accept: */*",
      "Content-Type: application/json",
      "User-Agent: Thunder Client (https://www.thunderclient.com)",
      "X-RapidAPI-Host: judge0-ce.p.rapidapi.com",
      "X-RapidAPI-Key: 198d78a2e0mshec47c8cca5f9f74p16349cjsnb6a9b0d8da6a"
    ],
  ]);

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

  if ($err) {
    echo "cURL Error #:" . $err;
  } else {

    // echo $response;
    $data = json_decode($response, true);
    $token = $data['token'];
  }

  $URL_INFO =

    // now we have token we can check the status of the code
    $curl = curl_init();

  curl_setopt_array($curl, [
    CURLOPT_URL => "https://judge0-ce.p.rapidapi.com/submissions/$token?base64_encoded=true&fields=status%2Ctime%2Cmemory%2Ccreated_at",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
      "Accept: */*",
      "User-Agent: Thunder Client (https://www.thunderclient.com)",
      "X-RapidAPI-Host: judge0-ce.p.rapidapi.com",
      "X-RapidAPI-Key: 198d78a2e0mshec47c8cca5f9f74p16349cjsnb6a9b0d8da6a"
    ],
  ]);

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    //echo $response;
    $data = json_decode($response, true);
    $verdict = $data['status']['description'];
    $time = $data['time'];
    $memory = $data['memory'];
    $created_at = $data['created_at'];
    $updated_at = $created_at;
  }

  //if processing is successful


  $sql = "INSERT INTO submissions (token, source_code, who,problem,lang,verdict,stderr,time,memory,created_at,updated_at)
   VALUES ('$token', '$sourceCode','$who', '$problem','$language','$verdict','$stderr','$time','$memory','$created_at','$updated_at')";

  if ($connect->query($sql) === TRUE) {
    echo $verdict ;
  } else {
    echo "Error: " . $sql . "<br>" . $connect->error;
  }
} else {
  echo "error";
}
