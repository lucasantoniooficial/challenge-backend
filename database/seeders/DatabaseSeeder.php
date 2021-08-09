<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Car;
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
        Brand::factory(7)->create();

        Car::factory(10)->create();

        $this->call([
            UserSeeder::class
        ]);
    }
}
