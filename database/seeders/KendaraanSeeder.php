<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{
    JenisKendaraan,
    Mesin,
    Merek,
    Kendaraan
};

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jenis_kendaraan = [
            [
                'id'            =>  1,
                'nama'          =>  'Mobil',
                'keterangan'    =>  'Mobil',
                'active'        =>  1,
            ],
            [
                'id'            =>  2,
                'nama'          =>  'Motor',
                'keterangan'    =>  'Motor',
                'active'        =>  1,
            ],
        ];

        JenisKendaraan::insert($jenis_kendaraan);

        $mesin = [
            0 => [
              'id' => '1',
              'kapasitas' => '100',
              'keterangan' => '100 cc',
              'active' => 1,
            ],
            1 => [
              'id' => '2',
              'kapasitas' => '110',
              'keterangan' => '110 cc',
              'active' => 1,
            ],
            2 => [
              'id' => '3',
              'kapasitas' => '125',
              'keterangan' => '125 cc',
              'active' => 1,
            ],
            3 => [
              'id' => '4',
              'kapasitas' => '150',
              'keterangan' => '150 cc',
              'active' => 1,
            ],
            4 => [
              'id' => '5',
              'kapasitas' => '250',
              'keterangan' => '250 cc',
              'active' => 1,
            ],
            5 => [
              'id' => '6',
              'kapasitas' => '500',
              'keterangan' => '500 cc',
              'active' => 1,
            ],
            6 => [
              'id' => '7',
              'kapasitas' => '1000',
              'keterangan' => '1000 cc',
              'active' => 1,
            ],
            7 => [
              'id' => '8',
              'kapasitas' => '1100',
              'keterangan' => '1100 cc',
              'active' => 1,
            ],
            8 => [
              'id' => '9',
              'kapasitas' => '1200',
              'keterangan' => '1200 cc',
              'active' => 1,
            ],
            9 => [
              'id' => '10',
              'kapasitas' => '1300',
              'keterangan' => '1300 cc',
              'active' => 1,
            ],
            10 => [
              'id' => '11',
              'kapasitas' => '1400',
              'keterangan' => '1400 cc',
              'active' => 1,
            ],
            11 => [
              'id' => '12',
              'kapasitas' => '1500',
              'keterangan' => '1500 cc',
              'active' => 1,
            ],
        ];

        Mesin::insert($mesin);

        $merek = [
            0 => [
              'id' => '1',
              'nama' => 'Audi',
              'keterangan' => 'Audi',
              'active' => 1,
            ],
            1 => [
              'id' => '2',
              'nama' => 'BMW',
              'keterangan' => 'BMW',
              'active' => 1,
            ],
            2 => [
              'id' => '3',
              'nama' => 'Chevrolet',
              'keterangan' => 'Chevrolet',
              'active' => 1,
            ],
            3 => [
              'id' => '4',
              'nama' => 'Daihatsu',
              'keterangan' => 'Daihatsu',
              'active' => 1,
            ],
            4 => [
              'id' => '5',
              'nama' => 'Honda',
              'keterangan' => 'Honda',
              'active' => 1,
            ],
            5 => [
              'id' => '6',
              'nama' => 'Suzuki',
              'keterangan' => 'Suzuki',
              'active' => 1,
            ],
            6 => [
              'id' => '7',
              'nama' => 'Toyota',
              'keterangan' => 'Toyota',
              'active' => 1,
            ],
            7 => [
              'id' => '8',
              'nama' => 'Yamaha',
              'keterangan' => 'Yamaha',
              'active' => 1,
            ],
        ];

        Merek::insert($merek);

        $kendaraan = [
            0 => [
              'id' => '1',
              'jenis_kendaraan_id' => '1',
              'merek_id' => '5',
              'mesin_id' => '12',
              'nama' => 'Jazz',
              'keterangan' => 'Honda Jazz',
              'active' => 1,
            ],
            1 => [
              'id' => '2',
              'jenis_kendaraan_id' => '1',
              'merek_id' => '5',
              'mesin_id' => '9',
              'nama' => 'Brio',
              'keterangan' => 'Honda Brio',
              'active' => '0',
            ],
            2 => [
              'id' => '3',
              'jenis_kendaraan_id' => '2',
              'merek_id' => '6',
              'mesin_id' => '4',
              'nama' => 'Satria FU',
              'keterangan' => 'Suzuki Satria FU',
              'active' => 1,
            ],
            3 => [
              'id' => '4',
              'jenis_kendaraan_id' => '2',
              'merek_id' => '8',
              'mesin_id' => '4',
              'nama' => 'New vixion',
              'keterangan' => 'Yamaha New vixion',
              'active' => 1,
            ],
            4 => [
              'id' => '5',
              'jenis_kendaraan_id' => '2',
              'merek_id' => '5',
              'mesin_id' => '3',
              'nama' => 'Sonic',
              'keterangan' => 'Honda Sonic 125',
              'active' => 1,
            ],
            5 => [
              'id' => '6',
              'jenis_kendaraan_id' => '1',
              'merek_id' => '7',
              'mesin_id' => '7',
              'nama' => 'Calya',
              'keterangan' => 'Toyota Calya',
              'active' => 1,
            ],
            6 => [
              'id' => '7',
              'jenis_kendaraan_id' => '1',
              'merek_id' => '4',
              'mesin_id' => '9',
              'nama' => 'Sigra',
              'keterangan' => 'Daihatsu Sigra',
              'active' => '0',
            ],
            7 => [
              'id' => '8',
              'jenis_kendaraan_id' => '1',
              'merek_id' => '7',
              'mesin_id' => '12',
              'nama' => 'Avanza',
              'keterangan' => 'Toyota Avanza',
              'active' => 1,
            ],
            8 => [
              'id' => '9',
              'jenis_kendaraan_id' => '2',
              'merek_id' => '5',
              'mesin_id' => '3',
              'nama' => 'Scoopy',
              'keterangan' => 'Honda Scoopy',
              'active' => 1,
            ],
            9 => [
              'id' => '10',
              'jenis_kendaraan_id' => '2',
              'merek_id' => '8',
              'mesin_id' => '3',
              'nama' => 'Mio',
              'keterangan' => 'Yamaha Mio',
              'active' => 1,
            ],
        ];

        Kendaraan::insert($kendaraan);
    }
}
