<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'Bombastic',
            'email' => 'bombastic@gmail.com',
            'password' => bcrypt('max123alexander')
        ]);

        \App\Models\Periodista::factory(10)->create();
        \App\Models\Noticia::factory(20)->create();
    }
}
