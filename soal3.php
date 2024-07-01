<?php

function splitArray($nums, $k) {
    $left = max($nums); // Jumlah terbesar dari satu elemen di nums
    $right = array_sum($nums); // Jumlah total dari semua elemen di nums
    
    while ($left < $right) {
        $mid = intdiv($left + $right, 2);
        if (canSplit($nums, $k, $mid)) {
            $right = $mid;
        } else {
            $left = $mid + 1;
        }
    }
    
    return $left;
}

function canSplit($nums, $k, $maxSum) {
    $currentSum = 0;
    $subarrays = 1;
    
    foreach ($nums as $num) {
        if ($currentSum + $num > $maxSum) {
            $subarrays++;
            $currentSum = $num;
            if ($subarrays > $k) {
                return false;
            }
        } else {
            $currentSum += $num;
        }
    }
    
    return true;
}

$nums1 = [7, 2, 5, 10, 8];
$k1 = 2;
echo splitArray($nums1, $k1);

$nums2 = [1, 2, 3, 4, 5];
$k2 = 2;
echo splitArray($nums2, $k2);
