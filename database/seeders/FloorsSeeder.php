<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FloorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Floor::factory()->count(30)->create();

    }
}
