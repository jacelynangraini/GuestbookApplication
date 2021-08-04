<?php

use Illuminate\Database\Seeder;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('guests')->insert([
            ['name'=>'ramen', 'email'=>'ramen@gmail.com', 'address'=>'lorem ipsum ']
        ]);
    }
}
