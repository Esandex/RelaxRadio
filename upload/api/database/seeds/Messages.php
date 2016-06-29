<?php

use Illuminate\Database\Seeder;
use App\Message;

class MessagesTableSeeder extends Seeder
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
 
        foreach(range(1,250) as $index)
        {
            Message::create([                
            	'photo' => $faker->imageUrl($width = 400, $height = 400),
            	'name' => $faker->firstName($gender = null|'male'|'female'),
                'message' => $faker->sentence($nbWords = 6, $variableNbWords = true)
            ]);
        }
    }
}
