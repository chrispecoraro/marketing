<?php

use Illuminate\Database\Seeder;

class LeadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Lead::class, 10)->create()->each(function ($lead) {
            $lead->telephone_number()->save(factory(App\TelephoneNumber::class)->make());
        });
    }
}
