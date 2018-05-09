<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
    	foreach (range(1,100) as $index) {
	        DB::table('customers')->insert([
	            'nama' => $faker->name,
	            'alamat' => $faker->address
	        ]);
        }
    }
}
