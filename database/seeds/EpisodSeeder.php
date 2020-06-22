<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EpisodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('episodes')->insert([
            'title' => 'title for "أنا بحكيلك القصة"',
            'series_id' => 1,
            'duration' => 1,
            'description' => 'description for "أنا بحكيلك القصة"',
            'show_day' => 'الاحد',
            'show_hour' => '12:30 PM',
            'created_at' => now()
        ]);

        DB::table('episodes')->insert([
            'title' => 'title for "أنا بحكيلك القصة"',
            'series_id' => 1,
            'duration' => 1,
            'description' => 'description for "أنا بحكيلك القصة"',
            'show_day' => 'الاثنين',
            'show_hour' => '12:30 PM',
            'created_at' => now()
        ]);
        
        DB::table('episodes')->insert([
            'title' => 'title for "أنا بحكيلك القصة"',
            'series_id' => 1,
            'duration' => 1,
            'description' => 'description for "أنا بحكيلك القصة"',
            'show_day' => 'الثلاثاء',
            'show_hour' => '12:30 PM',
            'created_at' => now()
        ]);

        DB::table('episodes')->insert([
            'title' => 'title for "حكي TECH"',
            'series_id' => 2,
            'duration' => 1.5,
            'description' => 'description for "حكي TECH"',
            'show_day' => 'الاحد',
            'show_hour' => '4:30 PM',
            'created_at' => now()
        ]);

        DB::table('episodes')->insert([
            'title' => 'title for "حكي TECH"',
            'series_id' => 2,
            'duration' => 1.5,
            'description' => 'description for "حكي TECH"',
            'show_day' => 'الاثنين',
            'show_hour' => '4:30 PM',
            'created_at' => now()
        ]);

        DB::table('episodes')->insert([
            'title' => 'title for "حكي TECH"',
            'series_id' => 2,
            'duration' => 1.5,
            'description' => 'description for "حكي TECH"',
            'show_day' => 'الثلاثاء',
            'show_hour' => '4:30 PM',
            'created_at' => now()
        ]);

        DB::table('episodes')->insert([
            'title' => 'title for "الهيبة - العودة"',
            'series_id' => 3,
            'duration' => 1,
            'description' => 'description for "الهيبة - العودة"',
            'show_day' => 'الاحد',
            'show_hour' => '4:30 PM',
            'created_at' => now()
        ]);

        DB::table('episodes')->insert([
            'title' => 'title for "الهيبة - العودة"',
            'series_id' => 3,
            'duration' => 1,
            'description' => 'description for "الهيبة - العودة"',
            'show_day' => 'الاثنين',
            'show_hour' => '4:30 PM',
            'created_at' => now()
        ]);

        DB::table('episodes')->insert([
            'title' => 'title for "الهيبة - العودة"',
            'series_id' => 3,
            'duration' => 1,
            'description' => 'description for "الهيبة - العودة"',
            'show_day' => 'الثلاثاء',
            'show_hour' => '4:30 PM',
            'created_at' => now()
        ]);

        DB::table('episodes')->insert([
            'title' => 'title for "عائدون "النكبة""',
            'series_id' => 4,
            'duration' => 1,
            'description' => 'description for "عائدون "النكبة""',
            'show_day' => 'الاحد',
            'show_hour' => '6:00 PM',
            'created_at' => now()
        ]);

        DB::table('episodes')->insert([
            'title' => 'title for "عائدون "النكبة""',
            'series_id' => 4,
            'duration' => 1,
            'description' => 'description for "عائدون "النكبة""',
            'show_day' => 'الاثنين',
            'show_hour' => '6:00 PM',
            'created_at' => now()
        ]);

        DB::table('episodes')->insert([
            'title' => 'title for "عائدون "النكبة""',
            'series_id' => 4,
            'duration' => 1,
            'description' => 'description for "عائدون "النكبة""',
            'show_day' => 'الثلاثاء',
            'show_hour' => '6:00 PM',
            'created_at' => now()
        ]);

        DB::table('episodes')->insert([
            'title' => 'title for "جلطة"',
            'series_id' => 5,
            'duration' => 2,
            'description' => 'description for "جلطة"',
            'show_day' => 'الاحد',
            'show_hour' => '7:00 PM',
            'created_at' => now()
        ]);

        DB::table('episodes')->insert([
            'title' => 'title for "جلطة"',
            'series_id' => 5,
            'duration' => 2,
            'description' => 'description for "جلطة"',
            'show_day' => 'الاثنين',
            'show_hour' => '7:00 PM',
            'created_at' => now()
        ]);

        DB::table('episodes')->insert([
            'title' => 'title for "جلطة"',
            'series_id' => 5,
            'duration' => 2,
            'description' => 'description for "جلطة"',
            'show_day' => 'الثلاثاء',
            'show_hour' => '7:00 PM',
            'created_at' => now()
        ]);
    }
}
