<?php

use Illuminate\Database\Seeder;
use App\reply;

class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r1 = [

            'user_id' => 1,

            'discussion_id' => 1,

            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto minus, laboriosam consequuntur ex aut dignissimos? Est qui nulla laboriosam deserunt ea non dicta sunt. Nemo ducimus nesciunt sint repellat officia.'

        ];



        $r2 = [

            'user_id' => 1,

            'discussion_id' => 2,

            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto minus, laboriosam consequuntur ex aut dignissimos? Est qui nulla laboriosam deserunt ea non dicta sunt. Nemo ducimus nesciunt sint repellat officia.'

        ];



        $r3 = [

            'user_id' => 2,

            'discussion_id' => 3,

            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto minus, laboriosam consequuntur ex aut dignissimos? Est qui nulla laboriosam deserunt ea non dicta sunt. Nemo ducimus nesciunt sint repellat officia.'

        ];

        $r4 = [

            'user_id' => 4,

            'discussion_id' => 4,

            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto minus, laboriosam consequuntur ex aut dignissimos? Est qui nulla laboriosam deserunt ea non dicta sunt. Nemo ducimus nesciunt sint repellat officia.'

        ];

        reply::create($r1);
        reply::create($r2);
        reply::create($r3);
        reply::create($r4);
    }
}
