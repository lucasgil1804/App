<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Equipo;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('equipos')->insert([
        // 'id_marca' => '4',
        // 'modelo'   => 'P71',
        // ]);

        Equipo::create([
        'id_marca' => '4',
        'modelo'   => 'P71',
         ]);

        Equipo::create([
        'id_marca' => '4',
        'modelo'   => 'G50',
        ]);

        Equipo::create([
         'id_marca' => '1',
         'modelo' => '15-bn000'
        ]);

        Equipo::create([
         'id_marca' => '1',
         'modelo' => '17-an100'
        ]);

        Equipo::create([
         'id_marca' => '1',
         'modelo' => '14-ck0000'
        ]);
    }
}
