<?php
    
    function strip_string($given_string){
        $new_string = "";
    for ($i = 0; $i < strlen($given_string); $i++) {

        if (($given_string[$i] >= 'a' && $given_string[$i] <= 'z') || ($given_string[$i] >= 'A' && $given_string[$i] <= 'Z') || $given_string[$i] == ' ') {
            $new_string .= $given_string[$i];
        }
    }

        echo $new_string;
    }

$given_string = "HEELO PARVE/Z";

strip_string($given_string);

echo "<br><br>TASK 1<br> <br>";
function find_price($prices, $product )
{
    echo "WORKING";
}

$prices = array("Pen" => "20" , "Chal" => "40" , "Dal" => "40");

find_price($prices, "Pen");

?>
