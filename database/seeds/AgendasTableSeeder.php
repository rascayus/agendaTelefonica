<?php

use Illuminate\Database\Seeder;

class AgendasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Agenda::class, 30)->create();
    }
}
