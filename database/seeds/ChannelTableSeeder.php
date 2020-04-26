<?php

use Illuminate\Database\Seeder;
use App\channel;

class ChannelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $channel = ['title' => 'laravel 4'];
        $channel1 = ['title' => 'CSS'];
        $channel2 = ['title' => 'HTML5'];
        $channel3 = ['title' => 'JAVA'];
        $channel4 = ['title' => 'Python'];
        $channel5 = ['title' => 'Oracle'];
        $channel6 = ['title' => 'VUE JS'];
        $channel7 = ['title' => 'JQUERY'];
        $channel8 = ['title' => 'JAVASCRIPT'];

        channel::create($channel);
        channel::create($channel1);
        channel::create($channel2);
        channel::create($channel3);
        channel::create($channel4);
        channel::create($channel5);
        channel::create($channel6);
        channel::create($channel7);
        channel::create($channel8);
    }
}
