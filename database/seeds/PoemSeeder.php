<?php

use Illuminate\Database\Seeder;

class PoemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Poem::class, 50)->create();
    }
}
