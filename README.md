# bukuku-test
Test Bukuku Solutions
=====================

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


# Getting started Laravel 8

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/8.x/installation)

Clone the repository

    git clone git@github.com:widiagie/bukuku-test.git

Switch to the repo folder

    cd buku-test/laravel

Start the local development server

    php artisan serve




Soal 1 : Skill
---------------------
Berikan skala (1-10) untuk skill Anda di bawah ini :
1. PHP      =   [9]
2. MySQL    =   [9]
3. Redis    =   [5]
4. Message Broker =  [5] (RabbitMQ)


Soal 2 : Coding Test
---------------------
1. Diberikan bilangan bulat n, kembalikan array string answer (diindeks dari 1) dimana:
- jawaban[i] == "FizzBuzz" jika i habis dibagi 3 dan 5 dan 7. 
- jawaban[i] == "Fizz1" jika i habis dibagi 3 dan 5. 
- jawaban[i] == "Fizz2" jika i habis dibagi 3 dan 7. 
- jawaban[i] == "Fizz3" jika i habis dibagi 5 dan 7. 
- jawaban[i] == "Buzz1" jika i habis dibagi 3.
- jawaban[i] == "Buzz2" jika i habis dibagi 5.
- jawaban[i] == "Buzz3" jika i habis dibagi 7.
- jawaban[i] == i (sebagai string) jika tidak ada kondisi di atas yang benar.
Batasan:
* 1 <= n <= 10000

    soal1.php


2.  Diberikan sebuah array berisi string biner strs dan dua bilangan bulat m dan n. 
Tugas Anda adalah mengembalikan ukuran subkumpulan terbesar dari strs yang memenuhi syarat berikut:
a. Maksimal terdapat m angka 0 (nol).
b. Maksimal terdapat n angka 1 (satu).
Subkumpulan (subset) x dikatakan sebagai bagian dari kumpulan (set) y jika semua elemen di x juga terdapat di y.
Batasan:
* 1 <= strs.length <= 600
* 1 <= strs[i].length <= 100
* strs[i] hanya terdiri dari angka '0' dan '1'.
* 1 <=m,n<= 100

    soal2.php


3. Anda diminta untuk membagi nums menjadi k subarray yang tidak kosong,
sedemikian sehingga jumlah terbesar dari subarray manapun menjadi minimum.
Subarray adalah bagian yang berurutan dari array tersebut.
Tugas: Kembalikan jumlah terbesar minimum dari pembagian tersebut.
Batasan:
● 1 <= nums.length <= 1000
● 0 <= nums[i] <= 10^6
● 1 <= k <= min(50, nums.length)

    soal3.php



<H1>ATAU<H1>


Jalankan File PHP Menggunakan Server PHP Built-in

    php -S localhost:8000

    Kemudian, buka browser dan pergi ke http://localhost:8000/soal1.php. 
    Anda akan melihat output dari skrip PHP tersebut.

