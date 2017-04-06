<?php

use Illuminate\Database\Seeder;

class AgriculturalRetailersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          factory(App\AgriculturalRetailer::class, 50)->create();
    }
}
