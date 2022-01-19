<?php

$mark =[

            "jahir"  => ["Bangla" => 75,
                        "English" => 86,
                        "Maths" => 90,
                        "Ict" => 92],

            "Shakil" => ["Bangla" => 75,
                        "English" => 79,
                        "Maths" => 65,
                        "Ict" => 95],

            "Ismile" => ["Bangla" => 66,
                        "English "=> 80,
                        "Maths" => 75,
                        "Ict" => 88],

            "Jarif"  => ["Bangla" => 55,
                        "English" => 87,
                        "Maths" => 91,
                        "Ict" => 92]



];

echo "<table border = '2px' cellpadding= '5px' cellspacing= '0'>

     <tr> 
        <th>Student Name</th>
        <th>Bangla</th>
        <th>English</th>
        <th>Maths</th>
        <th>Ict</th>
    <tr>";

foreach ($mark as $key => $v1) {
   echo "<tr> <td> $key </td>";
    foreach ($v1 as $v2){
        echo "<td> $v2 </td>";
        }

   echo "</tr>";
}

echo "<table>";

echo "<pre>";
print_r($mark);
echo "</pre>";

?>
