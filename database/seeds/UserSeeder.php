<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
         'name' => 'Juan Cruz Fernandez',
         'email' => 'juancruzf017@gmail.com',
         'password' => bcrypt('juan123'),
        ]);

        factory(User::class,30)->create([ 
          'password' => bcrypt('juan123'),
        ]);
    }
}
