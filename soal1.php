<?php

function fizzBuzz($n) {
    if ($n < 1 || $n > 10000) {
        return "Error: n harus berada diantara 1 sampai 10.000";
    }

    $answer = [];

    for ($i = 1; $i <= $n; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0 && $i % 7 == 0) 
        {
            $answer[] = "FizzBuzz";
        } else
        if ($i % 3 == 0 && $i % 5 == 0) 
        {
            $answer[] = "Fizz1";
        } else
        if ($i % 3 == 0 && $i % 7 == 0) 
        {
            $answer[] = "Fizz2";
        } else
        if ($i % 5 == 0 && $i % 7 == 0) 
        {
            $answer[] = "Fizz3";
        } else
        if ($i % 3 == 0) {
            $answer[] = "Buzz1";
        } else
        if ($i % 5 == 0) 
        {
            $answer[] = "Buzz2";
        } else
        if ($i % 7 == 0) 
        {
            $answer[] = "Buzz3";
        } else {
            $answer[] = (string)$i;
        }
    }

    return $answer;
}
$n = $_GET['n'] ?? 1;
$result = fizzBuzz($n);


print "<pre>";
print_r($result);
print "</pre>";

?>
