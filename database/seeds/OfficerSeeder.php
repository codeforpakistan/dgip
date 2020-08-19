<?php

use Illuminate\Database\Seeder;

class OfficerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('officers')->insert(['name' => 'Mr Ijaz Ahmad Shah', 'title' => 'Minister of Interior', 'photo' => 'public/HCmhnMUpQoWm5kv1ZycuE1Okjn8GZnmYz6fAF1uh.jpeg']);
        DB::table('officers')->insert(['name' => 'Mr Yousaf Naseem Khokar', 'title' => 'Secretary Interior', 'photo' => 'public/2zTmi6bExNrxR4jSgJfRabWiG38oTIKaFF7Zysap.jpeg']);
        DB::table('officers')->insert(['name' => 'Dr Naeem Rauf', 'title' => 'Director General', 'photo' => 'public/0qfuQVVxo8ldrJeIYTcmSi1tDz1dZEtFEn5HKAiG.jpeg']);
    }
}
