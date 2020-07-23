<?php

use Illuminate\Database\Seeder;

class VisaCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('visa_categories')->insert(['slug' => 'tourist', 'name' => 'Tourist Visa', 'summary' => 'Travel to Pakistan for tourism purposes', 'image' => '', 'body' => '']);
        DB::table('visa_categories')->insert(['slug' => 'family', 'name' => 'Family Visit Visa', 'summary' => 'Visit Pakistan as an individual or with family', 'image' => '', 'body' => '']);
        DB::table('visa_categories')->insert(['slug' => 'business', 'name' => 'Business Visa', 'summary' => 'Visit Pakistan for business purpose', 'image' => '', 'body' => '']);
        DB::table('visa_categories')->insert(['slug' => 'student', 'name' => 'Student Visa', 'summary' => 'Travel to Pakistan for educational purposes', 'image' => '', 'body' => '']);
        DB::table('visa_categories')->insert(['slug' => 'official', 'name' => 'Official Visa', 'summary' => 'Travel to Pakistan for official assignments', 'image' => '', 'body' => '']);
        DB::table('visa_categories')->insert(['slug' => 'work', 'name' => 'Work Visa', 'summary' => 'Travel to Pakistan for employment purpose', 'image' => '', 'body' => '']);
        DB::table('visa_categories')->insert(['slug' => 'diplomatic', 'name' => 'Diplomatic Visa', 'summary' => 'Travel to Pakistan on Diplomatic duty', 'image' => '', 'body' => '']);
        DB::table('visa_categories')->insert(['slug' => 'journalist', 'name' => 'Journalist Visa', 'summary' => 'Travel to Pakistan as a Journalist', 'image' => '', 'body' => '']);
        DB::table('visa_categories')->insert(['slug' => 'ngo', 'name' => 'NGO/INGO Visa', 'summary' => 'Travel to Pakistan to work for a NGO/INGO', 'image' => '', 'body' => '']);
        DB::table('visa_categories')->insert(['slug' => 'missionary', 'name' => 'Missionary Visa', 'summary' => 'Travel to Pakistan for Missionary work', 'image' => '', 'body' => '']);
        DB::table('visa_categories')->insert(['slug' => 'tabligh', 'name' => 'Tabligh Visa', 'summary' => 'Travel to participate in the religious gathering', 'image' => '', 'body' => '']);
        DB::table('visa_categories')->insert(['slug' => 'domestic', 'name' => 'Domestic Aide Visa', 'summary' => 'Visa for employment as domestic aide', 'image' => '', 'body' => '']);
        DB::table('visa_categories')->insert(['slug' => 'trekking', 'name' => 'Mountaineering and Trekking', 'summary' => 'Travel to Pakistan to Climb up the mountains', 'image' => '', 'body' => '']);
        DB::table('visa_categories')->insert(['slug' => 'pilgrim', 'name' => 'Pilgrim Tourism', 'summary' => 'Travel to Pakistan for religious tourism', 'image' => '', 'body' => '']);
        DB::table('visa_categories')->insert(['slug' => 'other', 'name' => 'Other Visa', 'summary' => 'Travel to Pakistan for Cultural Activities', 'image' => '', 'body' => '']);
    }
}
