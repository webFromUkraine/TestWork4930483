<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CustomerRegion;

class CustomerRegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CustomerRegion::factory()->times(20)->create();
    }
}
