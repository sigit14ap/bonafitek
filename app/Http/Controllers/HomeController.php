<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public $temp;

    public function index()
    {
        //1
        $innerQuery = DB::select("SELECT kendaraan.nama, kendaraan.keterangan, merek.nama as nama_merek, mesin.keterangan as keterangan_mesin
        FROM kendaraan
        INNER JOIN merek ON kendaraan.merek_id=merek.id
        INNER JOIN mesin ON kendaraan.mesin_id=mesin.id
        WHERE mesin.kapasitas BETWEEN 150 AND 1000
        ");

        //2
        $leftQuery = DB::select("SELECT merek.nama, merek.keterangan
        FROM merek
        LEFT JOIN kendaraan ON kendaraan.merek_id=merek.id
        WHERE kendaraan.merek_id IS NULL 
        ");

        //3.a
        $a = 7;
        $b = 9;
        
        $c = $a;
        $a = $b;
        $b = $c;

        //3.b
        $a2 = 7;
        $b2 = 9;
        
        list($a2, $b2) = array($b2, $a2);

        //4
        $data = [
            'a' => [
                'b' => [
                    'c',
                    'd' => [
                        'e',
                        'f',
                        'g',
                    ],
                ],
                'h',
            ],
            'i' => [
                'j',
                'k',
            ],
            'l' => [
                'm' => [
                    'n' => ['o'],
                ]
            ],
        ];

        $this->manipulate($data);
        $result = $this->temp;

        //5
        $find_fibonnaci = $this->findFibonacci(5);
        
        //6
        $calculate_fibonacci = $this->calculateFibonacci(5);
        
        return view('home', compact('innerQuery', 'leftQuery', 'a', 'b', 'a2', 'b2', 'result', 'find_fibonnaci', 'calculate_fibonacci'));
    }

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

    public function findFibonacci($n)
    {
        if ($n == 0 || $n == 1){
            return $n;
        }else{
            return ($this->findFibonacci($n-1) + $this->findFibonacci($n-2));
        }
    }

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
}
