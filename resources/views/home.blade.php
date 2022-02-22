<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bonafitek</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>

        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-6">

                    <h2 id="text-alignment">Inner Join Query</h2>
                    <p>Buatlah query untuk menampilkan semua kendaraan beserta nama merek dan kapasitas cc nya yang memiliki kapasitas mesin antara 150 cc sampai dengan 1000 cc.</p>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Kendaraan</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Merek</th>
                                <th scope="col">Kapasitas</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach($innerQuery as $row)
                              <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$row->nama}}</td>
                                <td>{{$row->keterangan}}</td>
                                <td>{{$row->nama_merek}}</td>
                                <td>{{$row->keterangan_mesin}}</td>
                              </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6">

                    <h2 id="text-alignment">Left Join Query</h2>
                    <p>Buatlah query untuk menampilkan merek yang tidak terhubung dengan tabel kendaraan.</p>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Merek</th>
                                <th scope="col">Keterangan</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach($leftQuery as $row)
                              <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$row->nama}}</td>
                                <td>{{$row->keterangan}}</td>
                              </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>

            <div class="row mt-5">
                <div class="col-lg-6">

                    <h2 id="text-alignment">With Variable</h2>
                    <p>a = 7 dan b = 9, tukarlah nilai a dan b sehingga a = 9 dan b = 7 sebagai berikut : Menggunakan variable c sebagai perantara</p>

                    <pre>
$a = 7;
$b = 9;

$c = $a;
$a = $b;
$b = $c;

result:
$a = {{$a}} , $b = {{$b}}
                    </pre>
                </div>

                <div class="col-lg-6">

                    <h2 id="text-alignment">Without Variable</h2>
                    <p>a = 7 dan b = 9, tukarlah nilai a dan b sehingga a = 9 dan b = 7 sebagai berikut : Tanpa menggunakan variable perantara</p>

                    <pre>
$a2 = 7;
$b2 = 9;

list($a2, $b2) = array($b2, $a2);

result:
$a2 = {{$a2}} , $b2 = {{$b2}}
                    </pre>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-6">

                    <h2 id="text-alignment">Manipulate Array</h2>
                    <p>Ubahlah array menjadi sebagai berikut:
                        a = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o'];
                    </p>
                    
                    <pre>
public function manipulate($data)
{
    foreach($data as $key => $row){

        if(is_array($row)){
            $this->temp[] = is_int($key) ? $row : $key;
            $this->manipulate($row);
        }else{
            $this->temp[] = is_int($key) ? $row : $key;
        }
                    
    }
}
                    </pre>
                    <pre>Result <br>{{print_r($result)}}</pre>
                </div>

                <div class="col-lg-6">

                    <h2 id="text-alignment">Find Fibonacci</h2>
                    <p>Buatlah fungsi untuk menampilkan suatu bilangan Fibonacci ke-n. Note : n-1</p>
                    
                    <pre>
$find_fibonnaci = $this->findFibonacci(5);

public function findFibonacci($n)
{
    if ($n == 0 || $n == 1){
        return $n;
    }else{
        return ($this->findFibonacci($n-1) + $this->findFibonacci($n-2));
    }
}
                    </pre>
                    <pre>Result : {{$find_fibonnaci}}</pre>
                </div>

            </div>

            <div class="row mt-5">
                <div class="col-lg-6">

                    <h2 id="text-alignment">Calculate Fibonacci</h2>
                    <p>Buatlah fungsi untuk menampilkan suatu bilangan Fibonacci ke-n. Note : n-1</p>
                    
                    <pre>
$calculate_fibonacci = $this->calculateFibonacci(5);

public function calculateFibonacci($n)
{
    if ($n <= 0){
        return 0;
    }
     
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;
     
    $sum = $fibonacci[0] + $fibonacci[1];
     
    for($i = 2; $i <= $n; $i++)
    {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        $sum += $fibonacci[$i];
    }
     
    return $sum;
}
                    </pre>
                    <pre>Result : {{$calculate_fibonacci}}</pre>
                </div>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
