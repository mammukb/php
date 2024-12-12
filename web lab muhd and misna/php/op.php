<?php
$n=$_POST['number'];
function fact($n){
    if($n==0){
        return 1;
    }
    return $n*fact($n-1);
}
echo "Factorial of $n is".fact($n);
?>