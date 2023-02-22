<?php

require_once("DatabaseConnection.php");
$email = $_SESSION['userEmail'];

$sql = "SELECT * FROM users WHERE Email = '$email'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);
$UserName= $row['UserName'];
$email= $row['Email'];
$fullName= $row['FullName'];



// echo '<h6>' . $UserName . '</h6>';

// echo '<h6>'. $email.'</h6>';

function get_problem_created_count($connect)
{

   

    $email = $_SESSION['userEmail'];

    $sql = "SELECT * FROM users WHERE Email = '$email'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);

    $id = $row['id'];

    $sql = "SELECT COUNT(author) as 'total' FROM problem_sets WHERE author = '$id'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
    $problemCreated = $row['total'];
    
    return $problemCreated;
}
$problem_created = get_problem_created_count($connect);

function get_problem_solved_count($connect)
{
    
        $email = $_SESSION['userEmail'];
    
        $sql = "SELECT * FROM users WHERE Email = '$email'";
        $result = mysqli_query($connect, $sql);
        $row = mysqli_fetch_assoc($result);
    
        $id = $row['id'];
    
        $sql = "SELECT  DISTINCT(problem) COUNT(who) as 'total' FROM submissions WHERE who = '$id' AND verdict = 'Accepted'";
        $result = mysqli_query($connect, $sql);
        $row = mysqli_fetch_assoc($result);
        $problemSolved = $row['total'];
        
        return $problemSolved;

}
$problem_solved = get_problem_created_count($connect);


mysqli_close($connect);






