<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test Bukuku</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </head>
    <body class="antialiased">
        <div class="container-fluid px-5 py-5">
            <h1>Selamat datang, <br>Saya Widi Agie Priyasto</h1>
            <p class="font-weight-bold text-secondary h5">Berikut ini jawaban saya dari test rekruitmen bukuku</p><hr>

            <div class="row mt-3">
                <div class="col-sm-12 mb-1">
                    <div class="alert alert-info font-weight-bold" role="alert">
                        I. Soal Skill Poin
                    </div>
                </div>
                <div class="card ml-3" style="width: 97%;">
                    <div class="card-header">
                        Skala skill (1-10) : <strong class="float-right">Poin</strong>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">PHP <strong class="float-right">(9)</strong></li>
                        <li class="list-group-item">MySQL <strong class="float-right">(9)</strong></li>
                        <li class="list-group-item">Redis <strong class="float-right">(5)</strong></li>
                        <li class="list-group-item">Message Broker <strong class="float-right">RabbitMQ (5)</strong></li>
                    </ul>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-sm-12 mb-1">
                    <div class="alert alert-info font-weight-bold" role="alert">
                        II. Soal Coding Test dan Jawaban
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header bg-secondary text-white text-center">
                                Soal 1
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-justify">
                                Diberikan bilangan bulat n, kembalikan array string answer (diindeks dari 1) dimana:
                            </h5>
                            <ul class="list-group list-group-flush text-justify">
                                <li class="list-group-item">jawaban[i] == "FizzBuzz" jika i habis dibagi 3 dan 5 dan 7.</li>
                                <li class="list-group-item">jawaban[i] == "Fizz1" jika i habis dibagi 3 dan 5.</li>
                                <li class="list-group-item">jawaban[i] == "Fizz2" jika i habis dibagi 3 dan 7.</li>
                                <li class="list-group-item">jawaban[i] == "Fizz3" jika i habis dibagi 5 dan 7.</li>
                                <li class="list-group-item">jawaban[i] == "Buzz1" jika i habis dibagi 3.</li>
                                <li class="list-group-item">jawaban[i] == "Buzz2" jika i habis dibagi 5.</li>
                                <li class="list-group-item">jawaban[i] == "Buzz3" jika i habis dibagi 7.</li>
                                <li class="list-group-item">jawaban[i] == i (sebagai string) jika tidak ada kondisi di atas yang benar.</li>
                            </ul>
                            <p class="card-text ml-3 mb-3">
                                Batasan: <br>1 <= n <= 10000
                            </p>
                            <p class="card-text">Contoh: <br>Input: n = 5 <br>Output: ["1","2","Buzz1","4","Buzz2"]</p>

                            <form method="POST" action="{{ route('index') }}">
                            @csrf
                                <div class="form-group">
                                    <label>Input n</label>
                                    <input type="text" name="nilai" class="form-control" placeholder="Isi nilai n">
                                </div>
                                <button type="submit" class="btn btn-info btn-block text-center">Jawab</button>
                            </form>
                        </div>
                        <div class="card-footer text-muted">
                            <div class="text-success text-sm-left font-weight-bold">
                                Soal : <br>input {{ $soal1 }} <br>
                                Jawaban: <br>
                                {{ json_encode($hasilSoal1) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-justify">
                        <div class="card-header bg-secondary text-white text-center">
                                Soal 2
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-justify">
                                Diberikan sebuah array berisi string biner strs dan dua bilangan bulat m dan n.
                            </h5>
                            <p class="card-text text-justify">
                                Tugas Anda adalah mengembalikan ukuran subkumpulan terbesar dari strs yang memenuhi syarat berikut:
                            </p>
                            <ul class="list-group list-group-flush text-justify">
                                <li class="list-group-item">a. Maksimal terdapat m angka 0 (nol).</li>
                                <li class="list-group-item">b. Maksimal terdapat n angka 1 (satu).</li>
                            </ul>
                            <p class="card-text">
                                Subkumpulan (subset) x dikatakan sebagai bagian dari kumpulan (set) y jika
                                semua elemen di x juga terdapat di y.
                            </p>
                            <p class="card-text ml-3 mb-3">
                            Batasan:
                                <br> 1 <= strs.length <= 600
                                <br> 1 <= strs[i].length <= 100
                                <br> strs[i] hanya terdiri dari angka '0' dan '1'.
                                <br> 1 <=m,n<= 100
                            </p>
                            <p class="card-text">Contoh: <br>Input: strs = ["10","0001","111001","1","0"], <br>m = 5, n = 3 <br>Output: 4</p>

                            <form method="POST" action="{{ route('index') }}">
                            @csrf
                            <div class="form-group">
                                    <label>Input strs (array)</label>
                                    <input type="text" name="strs" class="form-control" placeholder='Isi nilai strs ["10","0001","111001","1","0"]'>
                                </div>
                                <div class="form-group">
                                    <label>Input m</label>
                                    <input type="text" name="input_m" class="form-control" placeholder="Isi nilai m">
                                </div>
                                <div class="form-group">
                                    <label>Input n</label>
                                    <input type="text" name="input_n" class="form-control" placeholder="Isi nilai n">
                                </div>
                                <button type="submit" class="btn btn-info btn-block text-center">Jawab</button>
                            </form>
                        </div>
                        <div class="card-footer text-muted">
                            <div class="text-primary text-sm-left font-weight-bold">
                                Soal : <br>{{ $soal2 }} <br>
                                Jawaban: <br>{{ json_encode($hasilSoal2) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-justify">
                        <div class="card-header bg-secondary text-white text-center">
                                Soal 3
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-justify">Anda diminta untuk membagi nums menjadi k subarray yang tidak kosong, sedemikian sehingga jumlah terbesar dari subarray manapun menjadi minimum. Subarray adalah bagian yang berurutan dari array tersebut.</h5>
                            <p class="card-text">Tugas: Kembalikan jumlah terbesar minimum dari pembagian tersebut.</p>
                            <p class="card-text">Contoh: <br>Input: nums = [7,2,5,10,8], k = 2 <br> Output: 18 </p>

                            <form method="POST" action="{{ route('index') }}">
                            @csrf
                            <div class="form-group">
                                    <label>Input nums (array)</label>
                                    <input type="text" name="nums" class="form-control" placeholder='Isi nilai nums [7,2,5,10,8]'>
                                </div>
                                <div class="form-group">
                                    <label>Input k</label>
                                    <input type="text" name="input_k" class="form-control" placeholder="Isi nilai k">
                                </div>
                                <button type="submit" class="btn btn-info btn-block text-center">Jawab</button>
                            </form>
                        </div>
                        <div class="card-footer text-muted">
                            <div class="text-info text-sm-left font-weight-bold">
                                Soal : <br>{{ $soal3 }} <br>
                                Jawaban: <br>{{ json_encode($hasilSoal3) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-sm-12">
                    <div class="alert alert-info font-weight-bold" role="alert">
                        III. Soal Design System dan Jawaban
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="https://drive.google.com/file/d/1-Pav6Ef0B8iRdBCS9oAhfjErzPlhaNUO/view?usp=drive_link" class="btn btn-primary btn-block" target="_blank">Go to link</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>
