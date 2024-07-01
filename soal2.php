<?php
function findMaxForm($strs, $m, $n) {
    if (count($strs) < 1 || count($strs) > 600) {
        return "Error: Panjang strs harus berada dalam rentang 1 sampai 600.";
    }
    if ($m < 1 || $m > 100 || $n < 1 || $n > 100) {
        return "Error: Nilai m dan n harus berada dalam rentang 1 sampai 100.";
    }
    
    foreach ($strs as $str) {
        if (strlen($str) < 1 || strlen($str) > 100 || !preg_match('/^[01]+$/', $str)) {
            return "Error: Panjang setiap string dalam strs harus berada dalam rentang 1 sampai 100 dan hanya berisi angka '0' dan '1'.";
        }
    }

    $dp = array_fill(0, $m + 1, array_fill(0, $n + 1, 0));
    
    foreach ($strs as $str) {
        $zeros = substr_count($str, '0');
        $ones = substr_count($str, '1');
        
        for ($i = $m; $i >= $zeros; $i--) {
            for ($j = $n; $j >= $ones; $j--) {
                $dp[$i][$j] = max($dp[$i][$j], $dp[$i - $zeros][$j - $ones] + 1);
            }
        }
    }
    
    return $dp[$m][$n];
}

$strs1 = ["10", "0001", "111001", "1", "0"];
$m1 = 5;
$n1 = 3;
print findMaxForm($strs1, $m1, $n1);
print "<hr>";
$strs2 = ["10", "0", "1"];
$m2 = 1;
$n2 = 1;
print findMaxForm($strs2, $m2, $n2);

?>