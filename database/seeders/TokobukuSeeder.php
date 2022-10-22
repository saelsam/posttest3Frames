<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tokobuku; 


// Route::get('/', function () {
//     return view ('home', [
//         "tokobukus" => Tokobuku::all()
//     ]);
// })->name('home');

class TokobukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tokobukus = [
            [
                'id' => '1',
                'nama' => 'Sang Pemimpi',
                'jenis' => 'fiksi',
                'harga' => '30000',
            ],
            [
                'id' => '2',
                'nama' => 'Laskar Pelangi',
                'jenis' => 'fiksi',
                'harga' => '115000',
            ],
            [
                'id' => '3',
                'nama' => 'Perahu Kertas',
                'jenis' => 'fiksi',
                'harga' => '40000',
            ],
        ];
        foreach ($tokobukus as $tokobuku) {
            Tokobuku::create([
            'nama' => $tokobuku["nama"],
            'jenis' => $tokobuku["jenis"],
            'harga' => $tokobuku["harga"]
            ]);
            }
            
}
}
