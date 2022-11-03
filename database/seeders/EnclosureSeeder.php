<?php

namespace Database\Seeders;

use App\Models\Enclosure;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EnclosureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Enclosure::factory(20)->create();
    }
}
