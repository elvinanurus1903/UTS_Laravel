<?php

use Illuminate\Database\Seeder;
use App\Film;

class filmSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(App\Film::class,7)->create();
    }
}
