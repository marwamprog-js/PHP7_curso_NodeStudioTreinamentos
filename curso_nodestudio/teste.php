<?php  

// $array = [1,2,3,4,5,6,7,8,9,10];
$array = [5,6,8,9,10,3,7,1,2,4];
$n = 10;

for($x=0; $x < $n; $x++) {
    echo $n."<br>";
    for($y=0; $y < $n - 1; $y++) {
        echo $y;
        $temp = $array[$y-1];
        $array[$y+1] = $array[$y];
        $array[$y] = $temp;
        echo $temp;
    }    
}

?>