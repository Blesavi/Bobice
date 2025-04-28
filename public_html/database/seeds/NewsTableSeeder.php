<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('news')->delete();
        
        \DB::table('news')->insert(array (
            0 => 
                array (
                    'id' => 1,
                    'title' => 'Prva novost',
                    'text' => 'Ovo je tekst prve novisti',
                    'main_image_url' => '',
                    'category' => 'Organic',
                    'created_at' => '2018-12-28 10:00:46',
                    'updated_at' => '2018-12-28 10:00:46',
            ),
            1 =>
                array (
                    'id' => 2,
                    'title' => 'Druga novost',
                    'text' => 'Ovo je tekst druge novisti',
                    'main_image_url' => '',
                    'category' => 'Events',
                    'created_at' => '2018-12-28 10:00:46',
                    'updated_at' => '2018-12-28 10:00:46',
                ),
        ));
    }
}