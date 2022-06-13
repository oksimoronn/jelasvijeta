<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JelaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jelas')->insert([
            'title' => Str::random(10),
            'desc' => Str::random(35),
            'tag' => Str::random(5)
        ]);
    }
}
