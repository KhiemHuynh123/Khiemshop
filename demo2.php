<?php
// declare(strict_types = 1);
// function sum(int $a, float $b){
//     return $a + $b;
// }

// echo sum (2,3);
//2. vòng lặp for
// $colors =['red','pink','blue','yello','white'];
// array_push($colors,'yello','white');
// print_r($colors);
// unset($colors[2]);
// echo "<br>"
// print_r()
// for($i = 0; $i < count($colors); $i++){
//     echo "$colors[$i] <br>";
// }
//3. array_slice
// $colors =['red','pink','blue','yello','white'];
// print_r(array_slice($colors,1,3));
// Splice
// echo "<br>";
// print_r($colors);
// echo "<br>";
// print_r(array)
//4.foreach, đổ màu 
$colors =['red','pink','blue','yello','white'];
foreach($colors as $value){
    echo "$value <br>";
}
$friends = ["Thinh"=>34,"Linh"=>14];
foreach($friends as $k1 => $val){
    echo "$k1 is $val <br>";
}
$colorCode = (object)[];
$colorCode -> red = "red";
$colorCode -> green = "green";
$colorCode -> blue = "blue";
foreach($colorCode as $k => $val):?>
<p style= "background-color: <?= $val ?>;">
This is <?= $k ?>
</p>
<?php
endforeach;
?>
<?php