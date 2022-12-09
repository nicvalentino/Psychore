<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\psikiater;
use App\Models\user;
use App\Models\artikel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        user::factory(15)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // psikiater::create([
        //     'id' => '123',
        //     'name' => 'Nico Valentino',
        //     'email' => 'nicovalentino@gmail.com',
        //     'password' => bcrypt('cobacoba')
        // ]);

        // psikiater::create([
        //     'id' => '312',
        //     'name' => 'tes1',
        //     'email' => 'tes1@gmail.com',
        //     'password' => bcrypt('cobacoba')
        // ]);

        // psikiater::create([
        //     'name' => 'tes2',
        //     'email' => 'tes2@gmail.com',
        //     'password' => bcrypt('cobacoba')
        // ]);

        // user::create([

        // ]);

    }


}
