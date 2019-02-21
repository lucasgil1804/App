<?php

use App\Marca;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('marcas')->insert([
        //'nombre' => 'Lenovo',
        //]);

        Marca::create([
        'nombre' => 'HP',
        ]);

        Marca::create([
        'nombre' => 'ASUS',
        ]);

        Marca::create([
        'nombre' => 'DELL',
        ]);

        Marca::create([
         'nombre' => 'Lenovo',
        ]);
    }
}
