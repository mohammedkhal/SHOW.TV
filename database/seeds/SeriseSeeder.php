<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeriseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('serieses')->insert([
            'title' => 'أنا بحكيلك القصة',
            'description' => 'عمل تلفزيوني كرتوني كوميدي، يتناول عدد من الأعمال الفنية المشهورة يستخلص منها خُلاصة موضوعها وتكوينها على شكل رسومات كوميدية مبسطة, و يعاد عرضه في تمام الساعة الثانية عشر مساء و الساعة الثامنة صباحا',
            'show_days' => 'الاحد - الخميس',
            'show_hours' => '12:30 PM',
            'created_at' => now()
        ]);

        DB::table('serieses')->insert([
            'title' => 'حكي TECH',
            'description' => 'آخر المستجدات التكنولوجية في عالم الاتصلات والالعاب والتطبيقات.',
            'show_days' => 'الاحد - الثلاثاء',
            'show_hours' => '4:30 PM',
            'created_at' => now()
        ]);

        DB::table('serieses')->insert([
            'title' => ' الهيبة - العودة',
            'description' => 'تدور أحداث مسلسل ولد الغلابة حول شاب يعيش في اسرة فقيرة مع امه واخوته، ولكن ظروف الحياة الصعبة تجبره على التجارة بالمخدرات لمساعدة عائلته.',
            'show_days' => 'الاحد - الثلاثاء',
            'show_hours' => '9:00 PM',
            'created_at' => now()
        ]);

        DB::table('serieses')->insert([
            'title' => 'عائدون "النكبة"',
            'description' => 'يروي هذا الوثائقي تاريخ النكبة الفلسطينية التي حدثت عام ١٩٤٨م.',
            'show_days' => 'الثلاثاء - الخميس',
            'show_hours' => '6:00 PM',
            'created_at' => now()
        ]);

        DB::table('serieses')->insert([
            'title' => 'جلطة',
            'description' => 'مسلسل كوميدي اجتماعي من بطولة الفنانة أمل الدباس و الفنان زهير النوباني ، تدور أحداثه حول عائلة من الطبقة الوسطى والتحديات التي يمرون بها لمواجهة متطلبات الحياة وتحدياتها المختلفة. يتطرق الموسم الثالث لحلم الهجرة عند العائلة العربية والعرب المغتربين وعلاقتهم بالوطن من خلال زيارة احدى قريباتهم المغتربة في امريكا للاردن. في كل حلقة نتتبع حياة العائلة اليومية ورحلتهم لتوفير مستقبل أفضل لهم.',
            'show_days' => 'الاثنين - الخميس',
            'show_hours' => '7:00 PM',
            'created_at' => now()
        ]);
    }
}
