<?php

use Illuminate\Database\Seeder;

class ForbiddenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('forbiddens')->insert([
            ['word' => 'медведев'],
            ['word' => 'москва'],
            ['word' => 'порошенко'],
            ['word' => 'путин'],
        ]);
    }
}
