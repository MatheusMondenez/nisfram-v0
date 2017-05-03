<?php

use Illuminate\Database\Seeder;
use App\User; // Para poder usar User::create diretamente sem ter que chamar App\User::create

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Matheus Mondenez',
            'email' => 'matheus@nisfram.com',
            'password' => bcrypt('suporte')
        ]);
    }
}
