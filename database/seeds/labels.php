<?php

use Illuminate\Database\Seeder;

class labels extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\Label::class, 10)->create();
    }
}
