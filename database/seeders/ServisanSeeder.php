<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ServisanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $status = [
            'Barang Masuk',
            'Menunggu Antrian',
            'On Process',
            'Gagal',
            'Cancel',
            'Berhasil',
            'Komplenan'
        ];
        $kategori = ['Komputer', 'Laptop', 'Lainnya'];
 
    	for($i = 1; $i <= 50; $i++){

            DB::table('servisans')->insert([
                'updated_at' => $faker->dateTimeThisYear(),
                'created_at' => $faker->dateTimeThisYear('+12 months'),
                'KodeServis' => $faker->dateTimeThisYear('+5 months')->format('Ymdhs'),
                'NamaBarang' => $faker->randomElement($kategori),
                'Kategori' => $faker->randomElement($kategori),
                'Kondisi' => $faker->text,
                'Status' => $faker->randomElement($status),
                'Notes' => $faker->text,
                'EstHarga' => $faker->numberBetween($min = 500000, $max = 1000000),
            ]);
        }
    }
}
