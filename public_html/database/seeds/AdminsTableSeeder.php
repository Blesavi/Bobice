<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('admins')->delete();
        
        \DB::table('admins')->insert(array (
            0 => 
                array (
                    'id' => 1,
                    'email' => 'neca@goji.com',
                    'password' => bcrypt('G1234567'),
                    'created_at' => '2018-12-28 10:00:46',
                    'updated_at' => '2018-12-28 10:00:46',
            ),
            1 =>
                array (
                    'id' => 2,
                    'email' => 'kole@goji.com',
                    'password' => bcrypt('G1234567'),
                    'created_at' => '2018-12-28 10:00:46',
                    'updated_at' => '2018-12-28 10:00:46',
                ),
        ));
    }
}