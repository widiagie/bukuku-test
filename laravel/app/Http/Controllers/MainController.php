<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request){

        $nilai = $request->nilai ?? 0;
        $hasilSoal1 = $this->fizzBuzz($nilai);
        $soal1 = "n: ".$nilai;

        $strs = $request->strs ?? "[]";
        $strs = json_decode($strs, true);
        $m = $request->input_m ?? 0;
        $n = $request->input_n ?? 0;

        $hasilSoal2 = 0;
        $hasilSoal2 = $this->findMaxForm($strs, (int)$m, (int)$n);
        $soal2 = "strs: ".$request->strs." m: ".$m." n: ".$n;

        $nums = $request->nums ?? "[0]";
        $nums = json_decode($nums, true);
        $k = $request->input_k ?? 0;
        $hasilSoal3 = 0;
        $hasilSoal3 = $this->splitArray($nums, $k);
        $soal3 = "nums: ".$request->nums." k: ".$k;

        return view('home',
            [
                'hasilSoal1' => $hasilSoal1,
                'soal1' => $soal1,
                'hasilSoal2' => $hasilSoal2,
                'soal2' => $soal2,
                'hasilSoal3' => $hasilSoal3,
                'soal3' => $soal3
            ]);
    }

    public function fizzBuzz($n) {
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

    public function findMaxForm($strs, $m, $n) {
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

    public function splitArray($nums, $k) {
        $left = max($nums);
        $right = array_sum($nums);

        while ($left < $right) {
            $mid = intdiv($left + $right, 2);
            if ($this->canSplit($nums, $k, $mid)) {
                $right = $mid;
            } else {
                $left = $mid + 1;
            }
        }

        return $left;
    }

    private function canSplit($nums, $k, $maxSum) {
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

}
