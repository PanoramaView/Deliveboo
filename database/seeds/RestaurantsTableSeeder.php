<?php

use App\Restaurant;
use Illuminate\Database\Seeder;

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('restaurants')->count() == 0){

            DB::table('restaurants')->insert([

                [
                    'name' => 'Ristorante di Pippo',
                    'address' => 'Via como 1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    
                ],
                [
                    'name' => 'Ristorante di Pluto',
                    'address' => 'Via como 2',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Ristorante di Minnie',
                    'address' => 'Via como 3',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]

            ]);
            
        } else { echo "\e[31mTable is not empty, therefore NOT "; }

    }
}
        
        // foreach($restautants as $restautant){
        //     $new_restaurant_object = new Restaurant();
        //     $new_restaurant_object->name = $restautant;
        //     $new_restaurant_object->save();
        // }
