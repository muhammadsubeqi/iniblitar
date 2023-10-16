<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        District::create([
            'name' => 'Garum'
        ]);
        District::create([
            'name' => 'Sanankulon'
        ]);
        District::create([
            'name' => 'Gandusari'
        ]);
    }
}
