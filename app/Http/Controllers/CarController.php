<?php

namespace App\Http\Controllers;

use App\Car;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        return Car::all();
    }

    public function create(Request $request)
    {
        $car = new Car;
        $car->pabrikan = $request->pabrikan;
        $car->merek = $request->merek;
        $car->warna = $request->warna;
        $car->kapasitas_penumpang = $request->kapasitas_penumpang;
        $car->bahan_bakar = $request->bahan_bakar;
        $car->harga_sewa = $request->harga_sewa;
        $car->save();

        return "Data Berhasil Disimpan";
    }
}
