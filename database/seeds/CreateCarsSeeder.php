<?php

use App\Car;
use Illuminate\Database\Seeder;

class CreateCarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cars = [
            [
                'pabrikan' => 'Honda',
                'merek' => 'Jazz',
                'warna' => 'Merah',
                'kapasitas_penumpang' => 4,
                'bahan_bakar' => 'pertalite',
                'harga_Sewa' => 250.000,
            ],
            [
                'pabrikan' => 'Toyota',
                'merek' => 'Inova',
                'warna' => 'Hitam',
                'kapasitas_penumpang' => 6,
                'bahan_bakar' => 'pertamax',
                'harga_sewa' => 275.000,
            ],
            [
                'pabrikan' => 'Suzuki',
                'merek' => 'Apv',
                'warna' => 'Silver',
                'kapasitas_penumpang' => 7,
                'bahan_bakar' => 'bensin',
                'harga_sewa' => 225.000,
            ],
            [
                'pabrikan' => 'Toyota',
                'merek' => 'Alvard',
                'warna' => 'Putih',
                'kapasitas_penumpang' => 5,
                'bahan_bakar' => 'pertamax',
                'harga_sewa' => 300.000,
            ],
        ];

        foreach ($cars as $key => $value) {
            Car::create($value);
        }
    }
}
