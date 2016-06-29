<?php

use Illuminate\Database\Seeder;
use App\Email;

class EmailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        //

        $faker = Faker\Factory::create(); 
 
        foreach(range(1,35) as $index)
        {
            Email::create([                
                'email' => $faker->freeEmail()
            ]);
        }
    }
}
