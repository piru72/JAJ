<?php


require_once("DatabaseConnection.php");



$query = "select   submissions.who , COUNT(DISTINCT problem) as solved  , users.FullName ,users.UserName
from submissions 
join users 
on users.id = submissions.who
where verdict = 'Accepted' 
group by who 
order by solved desc";


$result = mysqli_query($connect, $query);

echo '<thead class="thead-light">
<tr>
    <th scope="col">Rank</th>
    <th scope="col">Handle</th>
    <th scope="col">Full Name</th>
    <th scope="col">Institutions</th>
    <th scope="col">Solved</th>
</tr>
</thead>';

$i = 1;
while ($row = mysqli_fetch_array($result)) {

    $handle = $row['UserName'];
    $fullName = $row['FullName'];
    $institution = "AUST";
    $solved = $row['solved'];



    echo "<tbody>
      <tr>
      <td>" . $i . "</td>
      <td>" . $handle . "</td>
      <td>" . $fullName . "</td>
      <td>" . $institution   . "</td>
      <td>" . $solved  . "</td>


    </tr>
    </tbody>";
    $i += 1;
}
