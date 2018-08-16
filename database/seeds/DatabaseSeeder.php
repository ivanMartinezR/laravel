<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class,50)->create()->each(function(App\user $user){

                factory(App\Message::class)
                ->times(100)
                ->create([
                    'user_id'=>$user->id,
                ]);
        });


       
    }
}
