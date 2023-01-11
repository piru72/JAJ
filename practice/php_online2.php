
<?php


// $txt = "Hello world! <br>";
// echo $txt;
// define("GREETING", "Welcome Parvez <br>");
// echo GREETING;

// $t = 500;
// if ($t < 20) {
// echo "You will be having a  good day! <br>";
// }
// else if ($t == 21)
// echo "You have an online! <br>";
// else 
// echo "You don't have an online! <br>";


// // Counting the sum of odd numbers
// echo "<br> <br>SOLVING THE NUMBERS USING WHILE LOOP<br>";

// $x = 1;
// $sum = 0;
// $count = 0;
// while($x <= 500) {

//         if ($x % 2 == 1)
//         {
//             $sum+= $x;
//             $count++;
//             // echo "$x ";
//         }
            
        
//     $x++;
// }

// echo "<br> THE SUM IS $sum<br>";
// $avg = $sum / $count;

// echo "<br> AVERAGE IS $avg";

// echo "<br> <br> SOLVING THE NUMBERS USING FOR LOOP <br>";


// $sum = 0;
// $count = 0;

// for ($t = 1 ; $t < 500 ; $t++)
// {
//     if ($t % 2 == 1)
//     {
//         $sum+= $t;
//         $count++;
//     }
// }

// echo "<br> THE SUM IS $sum<br>";
// $avg1 = $sum / $count;

// echo "<br> AVERAGE IS $avg";



// function primeCheckFunction($number)
// {
//     echo " <br> THE NUMBER IS  $number";

//         if ($number == 1)
//             return 0;

//         for ($i = 2 ; $i <= $number/2 ; $i++)
//         {
//         if ($number % $i == 0)
//             return 0;
//         }

//     return 1;
// }

// $number = 19;
// $prime = primeCheckFunction($number);

// if ($prime)
//  echo " <br> THE NUMBER IS  $number prime";
//  else 
//  echo " <br> THE NUMBER IS  NOT $number prime";



//  $cars = array("Volvo", "BMW", "Toyota");
// sort($cars);

// $clength = count($cars);
// for($x = 0; $x < $clength; $x++) {
//   echo $cars[$x];
//   echo "<br>";
// }

function findName($names , $key)
{

    foreach($names as $name)
    {
    

    if ($name == "Parvez")
        {
            echo "Found";
            echo "<br>";
        }
    
    }

}


$infos = array("Tara" => "20", "parvez" => "32", "miraz" => "21", "tahmid" => "22");
arsort($infos);

$names = array("Parvez" , "Tara" , "Miraz" , "Yusha");

findName($names, "Parvez");



// foreach($infos as $name => $age) {
//     echo "NAME = " . $name . ", AGE = " . $age;
//     echo "<br>";
//   }




?>
