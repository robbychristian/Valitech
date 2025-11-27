<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use App\Models\Products;
use App\Models\ProductScent;
use App\Models\Subjects;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Admin',
            'email' => "admin@valitech.com",
            'password' => Hash::make("admin"),
            'user_role' => 1
        ]);

        Subjects::create([
            'course_id' => 1,
            'subject_year' => 1,
            'subject_semester' => 1,
            'subject_name' => 'Purposive Communication',
            'subject_code' => 'ENG 1',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'None',
        ]);

        Subjects::create([
            'course_id' => 1,
            'subject_year' => 1,
            'subject_semester' => 1,
            'subject_name' => 'Understanding the Self',
            'subject_code' => 'PER DEV 1',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'None',
        ]);
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 1,
            'subject_semester' => 1,
            'subject_name' => 'Character Formation I',
            'subject_code' => 'C.F. 1',
            'subject_price' => 0,
            'subject_lec_units' => 1,
            'subject_lab_units' => 0,
            'subject_prereq' => 'None',
        ]);
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 1,
            'subject_semester' => 1,
            'subject_name' => 'Mathematics in the Modern World',
            'subject_code' => 'MATH 101',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'None',
        ]);
        //
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 1,
            'subject_semester' => 1,
            'subject_name' => 'The Entrepreneurial Mind',
            'subject_code' => 'ENTREP 1',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'None',
        ]);
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 1,
            'subject_semester' => 1,
            'subject_name' => 'Readings in Philippine History',
            'subject_code' => 'HISTORY 1',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'None',
        ]);
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 1,
            'subject_semester' => 1,
            'subject_name' => 'Micro Perspective of Tourism and Hospitality',
            'subject_code' => 'TM 611',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'None',
        ]);
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 1,
            'subject_semester' => 1,
            'subject_name' => 'Movement Competency Training',
            'subject_code' => 'PATHFIT 1',
            'subject_price' => 0,
            'subject_lec_units' => 2,
            'subject_lab_units' => 0,
            'subject_prereq' => 'None',
        ]);
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 1,
            'subject_semester' => 1,
            'subject_name' => 'Civic Welfare Training Service 1',
            'subject_code' => 'NSTP 1/ROTC1',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'None',
        ]);
        
        // 1st yr SECOND SEMESTER
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 1,
            'subject_semester' => 2,
            'subject_name' => 'Technical Communication',
            'subject_code' => 'ENG 2',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'ENG 1',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 1,
            'subject_semester' => 2,
            'subject_name' => 'Ethics',
            'subject_code' => 'PER DEV 2',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'PERDEV 1',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 1,
            'subject_semester' => 2,
            'subject_name' => 'Character Formation 2',
            'subject_code' => 'C.F. 2',
            'subject_price' => 0,
            'subject_lec_units' => 1,
            'subject_lab_units' => 0,
            'subject_prereq' => 'None',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 1,
            'subject_semester' => 2,
            'subject_name' => 'Living in the I.T. Era',
            'subject_code' => 'I.T. 1',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'None',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 1,
            'subject_semester' => 2,
            'subject_name' => 'Risk Management as Applied to Safety, Security and Sanitation',
            'subject_code' => 'TM 621',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'TM 611',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 1,
            'subject_semester' => 2,
            'subject_name' => 'Strategic Management & Total Quality Management',
            'subject_code' => 'MGT 130',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'None',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 1,
            'subject_semester' => 2,
            'subject_name' => 'Macro Perspective of Tourism and Hospitality',
            'subject_code' => 'TM 622',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'TM 611',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 1,
            'subject_semester' => 2,
            'subject_name' => 'Exercise-based Fitness Activities',
            'subject_code' => 'PATHFIT 2',
            'subject_price' => 0,
            'subject_lec_units' => 2,
            'subject_lab_units' => 0,
            'subject_prereq' => 'PATHFIT 1',
        ]);

        Subjects::create([
            'course_id' => 1,
            'subject_year' => 1,
            'subject_semester' => 2,
            'subject_name' => 'Civic Welfare Training Service 2',
            'subject_code' => 'NSTP 2/ROTC2',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'NSTP 1/ROTC 1',
        ]);

        // 2nd yr FIRST SEMESTER
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 2,
            'subject_semester' => 1,
            'subject_name' => 'Tourism English',
            'subject_code' => 'ENG 3',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'ENG 2',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 2,
            'subject_semester' => 1,
            'subject_name' => 'Character Formation 3',
            'subject_code' => 'C.F. 3',
            'subject_price' => 0,
            'subject_lec_units' => 1,
            'subject_lab_units' => 0,
            'subject_prereq' => 'C.F. 2',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 2,
            'subject_semester' => 1,
            'subject_name' => 'Life and Works of Dr. Jose Rizal',
            'subject_code' => 'RIZAL 1',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'None',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 2,
            'subject_semester' => 1,
            'subject_name' => 'Quality Service Management in Tourism and Hospitality',
            'subject_code' => 'TM 631',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'TM 621, TM 611',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 2,
            'subject_semester' => 1,
            'subject_name' => 'Legal Aspects in Tourism and Hospitality',
            'subject_code' => 'TM 632',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'TM 611, TM 621',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 2,
            'subject_semester' => 1,
            'subject_name' => 'Survival and Rescue Training',
            'subject_code' => 'SRT',
            'subject_price' => 0,
            'subject_lec_units' => 1,
            'subject_lab_units' => 0,
            'subject_prereq' => 'None',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 2,
            'subject_semester' => 1,
            'subject_name' => '***Foreign Language 1',
            'subject_code' => 'TM 633',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'None',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 2,
            'subject_semester' => 1,
            'subject_name' => '*Eco-Tourism Management',
            'subject_code' => 'TM ELECT 634',
            'subject_price' => 0,
            'subject_lec_units' => 2,
            'subject_lab_units' => 0,
            'subject_prereq' => 'PATHFIT 1',
        ]);

        Subjects::create([
            'course_id' => 1,
            'subject_year' => 2,
            'subject_semester' => 1,
            'subject_name' => '**Dangerous Goods',
            'subject_code' => 'AVIATION 108',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'None',
        ]);

        Subjects::create([
            'course_id' => 1,
            'subject_year' => 2,
            'subject_semester' => 1,
            'subject_name' => 'Dance',
            'subject_code' => 'PATHFIT 3',
            'subject_price' => 0,
            'subject_lec_units' => 2,
            'subject_lab_units' => 0,
            'subject_prereq' => 'PATHFIT 1&2',
        ]);

        // 2ND YEAR SECOND SEMESTER
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 2,
            'subject_semester' => 2,
            'subject_name' => 'Character Formation 4',
            'subject_code' => 'C.F. 4',
            'subject_price' => 0,
            'subject_lec_units' => 1,
            'subject_lab_units' => 0,
            'subject_prereq' => 'None',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 2,
            'subject_semester' => 2,
            'subject_name' => 'Professional Development and Applied Ethics',
            'subject_code' => 'TM 641',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'TM 631',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 2,
            'subject_semester' => 2,
            'subject_name' => 'Applied Business Tools & Technologies in Tourism',
            'subject_code' => 'TM 631',
            'subject_price' => 0,
            'subject_lec_units' => 2,
            'subject_lab_units' => 1,
            'subject_prereq' => 'TM 611, TM 621',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 2,
            'subject_semester' => 2,
            'subject_name' => 'Philippine Culture and Tourism Geography Multicultural Diversity in Workplace for the Tourism Professionals',
            'subject_code' => 'TM 644',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'TM 611, TM 621',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 2,
            'subject_semester' => 2,
            'subject_name' => 'Professionals',
            'subject_code' => 'TM 644',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'TM 611, TM 621',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 2,
            'subject_semester' => 2,
            'subject_name' => '***Foreign Language 2',
            'subject_code' => 'TM 645',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'TM 634',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 2,
            'subject_semester' => 2,
            'subject_name' => '*Recreational and Leisure Management',
            'subject_code' => 'TM ELECT 646',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'TM ELECT 634',
        ]);

        Subjects::create([
            'course_id' => 1,
            'subject_year' => 2,
            'subject_semester' => 2,
            'subject_name' => '** Air Transportation',
            'subject_code' => 'AVIATION 109',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'AVIATION 108',
        ]);

        Subjects::create([
            'course_id' => 1,
            'subject_year' => 2,
            'subject_semester' => 2,
            'subject_name' => 'Sports',
            'subject_code' => 'PATHFIT 4',
            'subject_price' => 0,
            'subject_lec_units' => 2,
            'subject_lab_units' => 0,
            'subject_prereq' => 'PATHFIT 1&2',
        ]);
        
        // 3ND YEAR FIRST SEMESTER
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 3,
            'subject_semester' => 1,
            'subject_name' => 'Art Appreciation',
            'subject_code' => 'HUM 1',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'None',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 3,
            'subject_semester' => 1,
            'subject_name' => 'Character Formation 5',
            'subject_code' => 'C.F. 5',
            'subject_price' => 0,
            'subject_lec_units' => 1,
            'subject_lab_units' => 0,
            'subject_prereq' => 'None',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 3,
            'subject_semester' => 1,
            'subject_name' => 'The Contemporary World',
            'subject_code' => 'SOC SCI 10',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 1,
            'subject_prereq' => 'None',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 3,
            'subject_semester' => 1,
            'subject_name' => 'Operations Management',
            'subject_code' => 'MGT 131',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'MGT 130',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 3,
            'subject_semester' => 1,
            'subject_name' => 'Tourism and Hospitality Marketing',
            'subject_code' => 'TM 651',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'TM 641',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 3,
            'subject_semester' => 1,
            'subject_name' => 'Global Culture and Tourism Geography',
            'subject_code' => 'TM 653',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'TM 641',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 3,
            'subject_semester' => 1,
            'subject_name' => 'Sustainable Tourism',
            'subject_code' => 'TM 653',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'TM 641',
        ]);

        Subjects::create([
            'course_id' => 1,
            'subject_year' => 3,
            'subject_semester' => 1,
            'subject_name' => 'Travel and Tour Management',
            'subject_code' => 'TM 655',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'TM 643',
        ]);

        Subjects::create([
            'course_id' => 1,
            'subject_year' => 3,
            'subject_semester' => 1,
            'subject_name' => '*Tour Guiding',
            'subject_code' => 'TM ELECT 656',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'TM ELECT 646, TM 643',
        ]);

        Subjects::create([
            'course_id' => 1,
            'subject_year' => 3,
            'subject_semester' => 1,
            'subject_name' => '**Aviation Legislations (PCAR and CAB)',
            'subject_code' => 'F.A. Elective 1',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'None',
        ]);

        // 3ND YEAR SECOND SEMESTER
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 3,
            'subject_semester' => 2,
            'subject_name' => 'Science, Technology, and Society',
            'subject_code' => 'STS',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'None',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 3,
            'subject_semester' => 2,
            'subject_name' => 'Character Formation 6',
            'subject_code' => 'C.F. 6',
            'subject_price' => 0,
            'subject_lec_units' => 1,
            'subject_lab_units' => 0,
            'subject_prereq' => 'None',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 3,
            'subject_semester' => 2,
            'subject_name' => 'Life & Works of Carlos Bulosan',
            'subject_code' => 'LIT 1',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 1,
            'subject_prereq' => 'None',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 3,
            'subject_semester' => 2,
            'subject_name' => 'Transportation Management',
            'subject_code' => 'TM 661',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'TM 655',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 3,
            'subject_semester' => 2,
            'subject_name' => 'Tourism Policy Planning and Development',
            'subject_code' => 'TM 662',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'TM 654',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 3,
            'subject_semester' => 2,
            'subject_name' => 'Introduction to Meetings Incentives, Conferences and Events Management (MICE)',
            'subject_code' => 'TM 663',
            'subject_price' => 0,
            'subject_lec_units' => 2,
            'subject_lab_units' => 0,
            'subject_prereq' => 'TM 621, TM 641, TM 642',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 3,
            'subject_semester' => 2,
            'subject_name' => 'Entrepreneurship in Tourism and Hospitality',
            'subject_code' => 'TM 664',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'TM 642',
        ]);

        Subjects::create([
            'course_id' => 1,
            'subject_year' => 3,
            'subject_semester' => 2,
            'subject_name' => '*Heritage Tourism',
            'subject_code' => 'TM ELECT 665',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'TM ELECT 656',
        ]);

        Subjects::create([
            'course_id' => 1,
            'subject_year' => 3,
            'subject_semester' => 2,
            'subject_name' => '**Low Cost and Legacy Air Carriers',
            'subject_code' => 'F.A. ELECTIVE 2',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'ELECTIVE 1',
        ]);

        Subjects::create([
            'course_id' => 1,
            'subject_year' => 3,
            'subject_semester' => 2,
            'subject_name' => 'Thesis 1/Tourism Research 1',
            'subject_code' => 'TM 600 A',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'None',
        ]);

        // 4TH YEAR FIRST SEMESTER
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 4,
            'subject_semester' => 1,
            'subject_name' => 'Character Formation 7',
            'subject_code' => 'C.F. 7',
            'subject_price' => 0,
            'subject_lec_units' => 1,
            'subject_lab_units' => 0,
            'subject_prereq' => 'None',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 4,
            'subject_semester' => 1,
            'subject_name' => 'Character Formation 8',
            'subject_code' => 'C.F. 8',
            'subject_price' => 0,
            'subject_lec_units' => 1,
            'subject_lab_units' => 0,
            'subject_prereq' => 'None',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 4,
            'subject_semester' => 1,
            'subject_name' => '*Philippine Gastronomical Tourism',
            'subject_code' => 'TM ELECT 672',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 1,
            'subject_prereq' => 'TM 643',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 4,
            'subject_semester' => 1,
            'subject_name' => '*Agri-Tourism',
            'subject_code' => 'TM ELECT 673',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'TM 643',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 4,
            'subject_semester' => 1,
            'subject_name' => '**Airport Planning and Management',
            'subject_code' => 'F.A. ELECTIVE 3',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'ELECTIVE 1',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 4,
            'subject_semester' => 1,
            'subject_name' => '**Fiscal Aspects of Aviation',
            'subject_code' => 'F.A. ELECTIVE 4',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'ELECTIVE 1',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 4,
            'subject_semester' => 1,
            'subject_name' => '**Current Issues and Trends in Aviation',
            'subject_code' => 'F.A. ELECTIVE 5',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'ELECTIVE 1',
        ]);

        Subjects::create([
            'course_id' => 1,
            'subject_year' => 4,
            'subject_semester' => 1,
            'subject_name' => 'Thesis 2/Tourism Research 2',
            'subject_code' => 'TM 700 B',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 0,
            'subject_prereq' => 'TM 200 A',
        ]);
        
        // 4TH YEAR FIRST SEMESTER
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 4,
            'subject_semester' => 2,
            'subject_name' => '*Practicum / Internship (600 Hours)',
            'subject_code' => 'TM 681',
            'subject_price' => 0,
            'subject_lec_units' => 0,
            'subject_lab_units' => 6,
            'subject_prereq' => 'All TM Professional Subjects',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 4,
            'subject_semester' => 2,
            'subject_name' => '**Cabin Crew Training 1',
            'subject_code' => 'FA 1',
            'subject_price' => 0,
            'subject_lec_units' => 4,
            'subject_lab_units' => 1,
            'subject_prereq' => 'AVIATION 108',
        ]);
        
        Subjects::create([
            'course_id' => 1,
            'subject_year' => 4,
            'subject_semester' => 2,
            'subject_name' => '**Cabin Crew Training 2',
            'subject_code' => 'FA 2',
            'subject_price' => 0,
            'subject_lec_units' => 3,
            'subject_lab_units' => 1,
            'subject_prereq' => 'FA 1',
        ]);

        Products::create([
            'product_name' => 'Bubble N Fizz Handcrafted Body Bar 120g',
            'product_description' => "Handcrafted artisan soaps are a departure from mass-produced commercial soaps. ~
            Each bar is carefully made in small batches, allowing for individual attention to detail and the incorporation 
            of unique ingredients and designs. From the selection of nourishing oils and butters to the infusion of botanical extracts 
            and essential oils, these soaps are a celebration of nature's bounty. ~            
            By choosing handcrafted artisan soaps, you not only elevate your self-care routine but also support local artisans and small businesses. 
            Each bar represents hours of dedication, expertise, and a commitment to creating a product that brings joy and indulgence to your everyday life. ~
            So why settle for the ordinary when you can experience the extraordinary? Explore the world of handcrafted artisan soaps and unlock a whole new level 
            of bathing luxury and self-care bliss. ~",
            'product_images' => '',
            'product_price' => '95',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Toasted Marshmallow',
        ]);

        ProductCategory::create([
            'product_id' => 1,
            'product_category' => "Artisan Facial and Body Soaps"
        ]);

        ProductScent::create([
            'product_id' => 1,
            'product_scent' => 'Toasted Marshmallow',
        ]);

        Products::create([
            'product_name' => 'Bubble N Fizz Handcrafted Body Bar 120g',
            'product_description' => "Handcrafted artisan soaps are a departure from mass-produced commercial soaps. ~
            Each bar is carefully made in small batches, allowing for individual attention to detail and the incorporation 
            of unique ingredients and designs. From the selection of nourishing oils and butters to the infusion of botanical extracts 
            and essential oils, these soaps are a celebration of nature's bounty. ~            
            By choosing handcrafted artisan soaps, you not only elevate your self-care routine but also support local artisans and small businesses. 
            Each bar represents hours of dedication, expertise, and a commitment to creating a product that brings joy and indulgence to your everyday life. ~
            So why settle for the ordinary when you can experience the extraordinary? Explore the world of handcrafted artisan soaps and unlock a whole new level 
            of bathing luxury and self-care bliss. ~",
            'product_images' => '',
            'product_price' => '95',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Lavender',
        ]);

        ProductCategory::create([
            'product_id' => 2,
            'product_category' => "Artisan Facial and Body Soaps"
        ]);

        ProductScent::create([
            'product_id' => 2,
            'product_scent' => 'Lavender',
        ]);

        Products::create([
            'product_name' => 'Bubble N Fizz Handcrafted Body Bar 120g',
            'product_description' => "Handcrafted artisan soaps are a departure from mass-produced commercial soaps. ~
            Each bar is carefully made in small batches, allowing for individual attention to detail and the incorporation 
            of unique ingredients and designs. From the selection of nourishing oils and butters to the infusion of botanical extracts 
            and essential oils, these soaps are a celebration of nature's bounty. ~            
            By choosing handcrafted artisan soaps, you not only elevate your self-care routine but also support local artisans and small businesses. 
            Each bar represents hours of dedication, expertise, and a commitment to creating a product that brings joy and indulgence to your everyday life. ~
            So why settle for the ordinary when you can experience the extraordinary? Explore the world of handcrafted artisan soaps and unlock a whole new level 
            of bathing luxury and self-care bliss. ~",
            'product_images' => '',
            'product_price' => '95',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Rosewood',
        ]);

        ProductCategory::create([
            'product_id' => 3,
            'product_category' => "Artisan Facial and Body Soaps"
        ]);

        ProductScent::create([
            'product_id' => 3,
            'product_scent' => 'Rosewood',
        ]);

        Products::create([
            'product_name' => 'Bubble N Fizz Handcrafted Body Bar 120g',
            'product_description' => "Handcrafted artisan soaps are a departure from mass-produced commercial soaps. ~
            Each bar is carefully made in small batches, allowing for individual attention to detail and the incorporation 
            of unique ingredients and designs. From the selection of nourishing oils and butters to the infusion of botanical extracts 
            and essential oils, these soaps are a celebration of nature's bounty. ~            
            By choosing handcrafted artisan soaps, you not only elevate your self-care routine but also support local artisans and small businesses. 
            Each bar represents hours of dedication, expertise, and a commitment to creating a product that brings joy and indulgence to your everyday life. ~
            So why settle for the ordinary when you can experience the extraordinary? Explore the world of handcrafted artisan soaps and unlock a whole new level 
            of bathing luxury and self-care bliss. ~",
            'product_images' => '',
            'product_price' => '95',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Activated Charcoal',
        ]);

        ProductCategory::create([
            'product_id' => 4,
            'product_category' => "Artisan Facial and Body Soaps"
        ]);

        ProductScent::create([
            'product_id' => 4,
            'product_scent' => 'Activated Charcoal',
        ]);

        Products::create([
            'product_name' => 'Bubble N Fizz Handcrafted Body Bar 120g',
            'product_description' => "Handcrafted artisan soaps are a departure from mass-produced commercial soaps. ~
            Each bar is carefully made in small batches, allowing for individual attention to detail and the incorporation 
            of unique ingredients and designs. From the selection of nourishing oils and butters to the infusion of botanical extracts 
            and essential oils, these soaps are a celebration of nature's bounty. ~            
            By choosing handcrafted artisan soaps, you not only elevate your self-care routine but also support local artisans and small businesses. 
            Each bar represents hours of dedication, expertise, and a commitment to creating a product that brings joy and indulgence to your everyday life. ~
            So why settle for the ordinary when you can experience the extraordinary? Explore the world of handcrafted artisan soaps and unlock a whole new level 
            of bathing luxury and self-care bliss. ~",
            'product_images' => '',
            'product_price' => '95',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Vanilla Latte',
        ]);

        ProductCategory::create([
            'product_id' => 5,
            'product_category' => "Artisan Facial and Body Soaps"
        ]);

        ProductScent::create([
            'product_id' => 5,
            'product_scent' => 'Vanilla Latte',
        ]);

        Products::create([
            'product_name' => 'Bubble N Fizz Handcrafted Body Bar 120g',
            'product_description' => "Handcrafted artisan soaps are a departure from mass-produced commercial soaps. ~
            Each bar is carefully made in small batches, allowing for individual attention to detail and the incorporation 
            of unique ingredients and designs. From the selection of nourishing oils and butters to the infusion of botanical extracts 
            and essential oils, these soaps are a celebration of nature's bounty. ~            
            By choosing handcrafted artisan soaps, you not only elevate your self-care routine but also support local artisans and small businesses. 
            Each bar represents hours of dedication, expertise, and a commitment to creating a product that brings joy and indulgence to your everyday life. ~
            So why settle for the ordinary when you can experience the extraordinary? Explore the world of handcrafted artisan soaps and unlock a whole new level 
            of bathing luxury and self-care bliss. ~",
            'product_images' => '',
            'product_price' => '95',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Oh Papaya!',
        ]);

        ProductCategory::create([
            'product_id' => 6,
            'product_category' => "Artisan Facial and Body Soaps"
        ]);

        ProductScent::create([
            'product_id' => 6,
            'product_scent' => 'Oh Papaya',
        ]);

        Products::create([
            'product_name' => 'Bubble N Fizz Handcrafted Body Bar 120g',
            'product_description' => "Handcrafted artisan soaps are a departure from mass-produced commercial soaps. ~
            Each bar is carefully made in small batches, allowing for individual attention to detail and the incorporation 
            of unique ingredients and designs. From the selection of nourishing oils and butters to the infusion of botanical extracts 
            and essential oils, these soaps are a celebration of nature's bounty. ~            
            By choosing handcrafted artisan soaps, you not only elevate your self-care routine but also support local artisans and small businesses. 
            Each bar represents hours of dedication, expertise, and a commitment to creating a product that brings joy and indulgence to your everyday life. ~
            So why settle for the ordinary when you can experience the extraordinary? Explore the world of handcrafted artisan soaps and unlock a whole new level 
            of bathing luxury and self-care bliss. ~",
            'product_images' => '',
            'product_price' => '60',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Oatmeal',
        ]);

        ProductCategory::create([
            'product_id' => 7,
            'product_category' => "Artisan Facial and Body Soaps"
        ]);

        ProductScent::create([
            'product_id' => 7,
            'product_scent' => 'Oatmeal',
        ]);


        Products::create([
            'product_name' => 'Bubble N Fizz Shampoo Bar 75g',
            'product_description' => "Natural and Eco-friendly Shampoo bars and a much affordable and premium shampoo bar made organically by hand~
            How to use:~
            Directly apply the soap to your hair under running water. As it starts to lather, massage your hair gently up your scalp. Rinse well and pat dry. ~            
            These shampoo bar is compact in size and can last for about 70 to 80 washes depending on your hair length. We package your shampoo bar with paper and an 
            option of a tin can for travel. ~",
            'product_images' => '',
            'product_price' => '90',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Aloe Berry',
        ]);

        ProductCategory::create([
            'product_id' => 8,
            'product_category' => "Shampoo Bars"
        ]);

        ProductScent::create([
            'product_id' => 8,
            'product_scent' => 'Aloe Berry',
        ]);

        Products::create([
            'product_name' => 'Bubble N Fizz Shampoo Bar 75g',
            'product_description' => "Natural and Eco-friendly Shampoo bars and a much affordable and premium shampoo bar made organically by hand~
            How to use:~
            Directly apply the soap to your hair under running water. As it starts to lather, massage your hair gently up your scalp. Rinse well and pat dry. ~            
            These shampoo bar is compact in size and can last for about 70 to 80 washes depending on your hair length. We package your shampoo bar with paper and an 
            option of a tin can for travel. ~",
            'product_images' => '',
            'product_price' => '90',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Sea Shine',
        ]);

        ProductCategory::create([
            'product_id' => 9,
            'product_category' => "Shampoo Bars"
        ]);

        ProductScent::create([
            'product_id' => 9,
            'product_scent' => 'Sea Shine',
        ]);

        Products::create([
            'product_name' => 'Bubble N Fizz Shampoo Bar 75g',
            'product_description' => "Natural and Eco-friendly Shampoo bars and a much affordable and premium shampoo bar made organically by hand~
            How to use:~
            Directly apply the soap to your hair under running water. As it starts to lather, massage your hair gently up your scalp. Rinse well and pat dry. ~            
            These shampoo bar is compact in size and can last for about 70 to 80 washes depending on your hair length. We package your shampoo bar with paper and an 
            option of a tin can for travel. ~",
            'product_images' => '',
            'product_price' => '90',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Royal Goddess',
        ]);

        ProductCategory::create([
            'product_id' => 10,
            'product_category' => "Shampoo Bars"
        ]);

        ProductScent::create([
            'product_id' => 10,
            'product_scent' => 'Royal Goddess',
        ]);

        Products::create([
            'product_name' => 'Bubble N Fizz Shampoo Bar 75g',
            'product_description' => "Natural and Eco-friendly Shampoo bars and a much affordable and premium shampoo bar made organically by hand~
            How to use:~
            Directly apply the soap to your hair under running water. As it starts to lather, massage your hair gently up your scalp. Rinse well and pat dry. ~            
            These shampoo bar is compact in size and can last for about 70 to 80 washes depending on your hair length. We package your shampoo bar with paper and an 
            option of a tin can for travel. ~",
            'product_images' => '',
            'product_price' => '90',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Rosemary Tea',
        ]);

        ProductCategory::create([
            'product_id' => 11,
            'product_category' => "Shampoo Bars"
        ]);

        ProductScent::create([
            'product_id' => 11,
            'product_scent' => 'Rosemary Tea',
        ]);


        Products::create([
            'product_name' => 'Bubble N Fizz Shampoo Bar 75g',
            'product_description' => "Natural and Eco-friendly Shampoo bars and a much affordable and premium shampoo bar made organically by hand~
            How to use:~
            Directly apply the soap to your hair under running water. As it starts to lather, massage your hair gently up your scalp. Rinse well and pat dry. ~            
            These shampoo bar is compact in size and can last for about 70 to 80 washes depending on your hair length. We package your shampoo bar with paper and an 
            option of a tin can for travel. ~",
            'product_images' => '',
            'product_price' => '90',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Coco Gugo',
        ]);

        ProductCategory::create([
            'product_id' => 12,
            'product_category' => "Shampoo Bars"
        ]);

        ProductScent::create([
            'product_id' => 12,
            'product_scent' => 'Coco Gugo',
        ]);

        Products::create([
            'product_name' => 'Bubble N Fizz Bath Bomb Fizzing 150g',
            'product_description' => "Bath bombs do not create or form bubbles ~
            For a bubble bath experience, we have our Bubble bath liquids. ~
            We have already reformulated our bath bomb mixture and upgraded it to make sure our bombs won't be damaged during shipping. ~
            Best Advise use warm or hot water for the best fizzing result!! ~
            General Note: ~            
            - One large bath bomb is good enough to provide a relaxing and fizzing experience for an average bathtub. ~
            - Bath bombs do not produce bubbles when mixed with water; instead, they fizz. ~
            - Our bath bombs are made from water-soluble colorants for easy cleaning, and they do not stain your tub. ~
            - We do advise doing a patch test by rubbing the bath bomb on an area of the skin to see if it causes any skin irritation. ~",
            'product_images' => '',
            'product_price' => '125',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Lavender',
        ]);

        ProductCategory::create([
            'product_id' => 13,
            'product_category' => "Bath Bomb"
        ]);

        ProductScent::create([
            'product_id' => 13,
            'product_scent' => 'Lavender',
        ]);
        Products::create([
            'product_name' => 'Bubble N Fizz Bath Bomb Fizzing 200g',
            'product_description' => "Bath bombs do not create or form bubbles ~
            For a bubble bath experience, we have our Bubble bath liquids. ~
            We have already reformulated our bath bomb mixture and upgraded it to make sure our bombs won't be damaged during shipping. ~
            Best Advise use warm or hot water for the best fizzing result!! ~
            General Note: ~            
            - One large bath bomb is good enough to provide a relaxing and fizzing experience for an average bathtub. ~
            - Bath bombs do not produce bubbles when mixed with water; instead, they fizz. ~
            - Our bath bombs are made from water-soluble colorants for easy cleaning, and they do not stain your tub. ~
            - We do advise doing a patch test by rubbing the bath bomb on an area of the skin to see if it causes any skin irritation. ~",
            'product_images' => '',
            'product_price' => '149',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Lavender',
        ]);

        ProductCategory::create([
            'product_id' => 14,
            'product_category' => "Bath Bomb"
        ]);

        ProductScent::create([
            'product_id' => 14,
            'product_scent' => 'Lavender',
        ]);

        Products::create([
            'product_name' => 'Bubble N Fizz Bath Bomb Fizzing 150g',
            'product_description' => "Bath bombs do not create or form bubbles ~
            For a bubble bath experience, we have our Bubble bath liquids. ~
            We have already reformulated our bath bomb mixture and upgraded it to make sure our bombs won't be damaged during shipping. ~
            Best Advise use warm or hot water for the best fizzing result!! ~
            General Note: ~            
            - One large bath bomb is good enough to provide a relaxing and fizzing experience for an average bathtub. ~
            - Bath bombs do not produce bubbles when mixed with water; instead, they fizz. ~
            - Our bath bombs are made from water-soluble colorants for easy cleaning, and they do not stain your tub. ~
            - We do advise doing a patch test by rubbing the bath bomb on an area of the skin to see if it causes any skin irritation. ~",
            'product_images' => '',
            'product_price' => '125',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Eucalyptus',
        ]);

        ProductCategory::create([
            'product_id' => 15,
            'product_category' => "Bath Bomb"
        ]);

        ProductScent::create([
            'product_id' => 15,
            'product_scent' => 'Eucalyptus',
        ]);
        Products::create([
            'product_name' => 'Bubble N Fizz Bath Bomb Fizzing 200g',
            'product_description' => "Bath bombs do not create or form bubbles ~
            For a bubble bath experience, we have our Bubble bath liquids. ~
            We have already reformulated our bath bomb mixture and upgraded it to make sure our bombs won't be damaged during shipping. ~
            Best Advise use warm or hot water for the best fizzing result!! ~
            General Note: ~            
            - One large bath bomb is good enough to provide a relaxing and fizzing experience for an average bathtub. ~
            - Bath bombs do not produce bubbles when mixed with water; instead, they fizz. ~
            - Our bath bombs are made from water-soluble colorants for easy cleaning, and they do not stain your tub. ~
            - We do advise doing a patch test by rubbing the bath bomb on an area of the skin to see if it causes any skin irritation. ~",
            'product_images' => '',
            'product_price' => '149',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Eucalyptus',
        ]);

        ProductCategory::create([
            'product_id' => 16,
            'product_category' => "Bath Bomb"
        ]);

        ProductScent::create([
            'product_id' => 16,
            'product_scent' => 'Eucalyptus',
        ]);

        Products::create([
            'product_name' => 'Bubble N Fizz Bath Bomb Fizzing 150g',
            'product_description' => "Bath bombs do not create or form bubbles ~
            For a bubble bath experience, we have our Bubble bath liquids. ~
            We have already reformulated our bath bomb mixture and upgraded it to make sure our bombs won't be damaged during shipping. ~
            Best Advise use warm or hot water for the best fizzing result!! ~
            General Note: ~            
            - One large bath bomb is good enough to provide a relaxing and fizzing experience for an average bathtub. ~
            - Bath bombs do not produce bubbles when mixed with water; instead, they fizz. ~
            - Our bath bombs are made from water-soluble colorants for easy cleaning, and they do not stain your tub. ~
            - We do advise doing a patch test by rubbing the bath bomb on an area of the skin to see if it causes any skin irritation. ~",
            'product_images' => '',
            'product_price' => '125',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Peppermint',
        ]);

        ProductCategory::create([
            'product_id' => 17,
            'product_category' => "Bath Bomb"
        ]);

        ProductScent::create([
            'product_id' => 17,
            'product_scent' => 'Peppermint',
        ]);
        Products::create([
            'product_name' => 'Bubble N Fizz Fizzing Bath Bomb 200g',
            'product_description' => "Bath bombs do not create or form bubbles ~
            For a bubble bath experience, we have our Bubble bath liquids. ~
            We have already reformulated our bath bomb mixture and upgraded it to make sure our bombs won't be damaged during shipping. ~
            Best Advise use warm or hot water for the best fizzing result!! ~
            General Note: ~            
            - One large bath bomb is good enough to provide a relaxing and fizzing experience for an average bathtub. ~
            - Bath bombs do not produce bubbles when mixed with water; instead, they fizz. ~
            - Our bath bombs are made from water-soluble colorants for easy cleaning, and they do not stain your tub. ~
            - We do advise doing a patch test by rubbing the bath bomb on an area of the skin to see if it causes any skin irritation. ~",
            'product_images' => '',
            'product_price' => '149',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Peppermint',
        ]);

        ProductCategory::create([
            'product_id' => 18,
            'product_category' => "Bath Bomb"
        ]);

        ProductScent::create([
            'product_id' => 18,
            'product_scent' => 'Peppermint',
        ]);

        Products::create([
            'product_name' => 'Bubble N Fizz Bath Bomb Fizzing 150g',
            'product_description' => "Bath bombs do not create or form bubbles ~
            For a bubble bath experience, we have our Bubble bath liquids. ~
            We have already reformulated our bath bomb mixture and upgraded it to make sure our bombs won't be damaged during shipping. ~
            Best Advise use warm or hot water for the best fizzing result!! ~
            General Note: ~            
            - One large bath bomb is good enough to provide a relaxing and fizzing experience for an average bathtub. ~
            - Bath bombs do not produce bubbles when mixed with water; instead, they fizz. ~
            - Our bath bombs are made from water-soluble colorants for easy cleaning, and they do not stain your tub. ~
            - We do advise doing a patch test by rubbing the bath bomb on an area of the skin to see if it causes any skin irritation. ~",
            'product_images' => '',
            'product_price' => '125',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Bubblegum',
        ]);

        ProductCategory::create([
            'product_id' => 19,
            'product_category' => "Bath Bomb"
        ]);

        ProductScent::create([
            'product_id' => 19,
            'product_scent' => 'Bubblegum',
        ]);

        Products::create([
            'product_name' => 'Bubble N Fizz Fizzing Bath Bomb 200g',
            'product_description' => "Bath bombs do not create or form bubbles ~
            For a bubble bath experience, we have our Bubble bath liquids. ~
            We have already reformulated our bath bomb mixture and upgraded it to make sure our bombs won't be damaged during shipping. ~
            Best Advise use warm or hot water for the best fizzing result!! ~
            General Note: ~            
            - One large bath bomb is good enough to provide a relaxing and fizzing experience for an average bathtub. ~
            - Bath bombs do not produce bubbles when mixed with water; instead, they fizz. ~
            - Our bath bombs are made from water-soluble colorants for easy cleaning, and they do not stain your tub. ~
            - We do advise doing a patch test by rubbing the bath bomb on an area of the skin to see if it causes any skin irritation. ~",
            'product_images' => '',
            'product_price' => '149',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Bubblegum',
        ]);

        ProductCategory::create([
            'product_id' => 20,
            'product_category' => "Bath Bomb"
        ]);

        ProductScent::create([
            'product_id' => 20,
            'product_scent' => 'Bubblegum',
        ]);

        Products::create([
            'product_name' => 'Bubble N Fizz Bath Bomb Fizzing 150g',
            'product_description' => "Bath bombs do not create or form bubbles ~
            For a bubble bath experience, we have our Bubble bath liquids. ~
            We have already reformulated our bath bomb mixture and upgraded it to make sure our bombs won't be damaged during shipping. ~
            Best Advise use warm or hot water for the best fizzing result!! ~
            General Note: ~            
            - One large bath bomb is good enough to provide a relaxing and fizzing experience for an average bathtub. ~
            - Bath bombs do not produce bubbles when mixed with water; instead, they fizz. ~
            - Our bath bombs are made from water-soluble colorants for easy cleaning, and they do not stain your tub. ~
            - We do advise doing a patch test by rubbing the bath bomb on an area of the skin to see if it causes any skin irritation. ~",
            'product_images' => '',
            'product_price' => '125',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Ocean Galaxy',
        ]);

        ProductCategory::create([
            'product_id' => 21,
            'product_category' => "Bath Bomb"
        ]);

        ProductScent::create([
            'product_id' => 21,
            'product_scent' => 'Ocean Galaxy',
        ]);
        Products::create([
            'product_name' => 'Bubble N Fizz Fizzing Bath Bomb 200g',
            'product_description' => "Bath bombs do not create or form bubbles ~
            For a bubble bath experience, we have our Bubble bath liquids. ~
            We have already reformulated our bath bomb mixture and upgraded it to make sure our bombs won't be damaged during shipping. ~
            Best Advise use warm or hot water for the best fizzing result!! ~
            General Note: ~            
            - One large bath bomb is good enough to provide a relaxing and fizzing experience for an average bathtub. ~
            - Bath bombs do not produce bubbles when mixed with water; instead, they fizz. ~
            - Our bath bombs are made from water-soluble colorants for easy cleaning, and they do not stain your tub. ~
            - We do advise doing a patch test by rubbing the bath bomb on an area of the skin to see if it causes any skin irritation. ~",
            'product_images' => '',
            'product_price' => '149',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Ocean Galaxy',
        ]);

        ProductCategory::create([
            'product_id' => 22,
            'product_category' => "Bath Bomb"
        ]);

        ProductScent::create([
            'product_id' => 22,
            'product_scent' => 'Ocean Galaxy',
        ]);

        Products::create([
            'product_name' => 'Bubble N Fizz Bath Bomb Fizzing 150g',
            'product_description' => "Bath bombs do not create or form bubbles ~
            For a bubble bath experience, we have our Bubble bath liquids. ~
            We have already reformulated our bath bomb mixture and upgraded it to make sure our bombs won't be damaged during shipping. ~
            Best Advise use warm or hot water for the best fizzing result!! ~
            General Note: ~            
            - One large bath bomb is good enough to provide a relaxing and fizzing experience for an average bathtub. ~
            - Bath bombs do not produce bubbles when mixed with water; instead, they fizz. ~
            - Our bath bombs are made from water-soluble colorants for easy cleaning, and they do not stain your tub. ~
            - We do advise doing a patch test by rubbing the bath bomb on an area of the skin to see if it causes any skin irritation. ~",
            'product_images' => '',
            'product_price' => '125',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Rose Valentine',
        ]);

        ProductCategory::create([
            'product_id' => 23,
            'product_category' => "Bath Bomb"
        ]);

        ProductScent::create([
            'product_id' => 23,
            'product_scent' => 'Rose Valentine',
        ]);
        Products::create([
            'product_name' => 'Bubble N Fizz Fizzing Bath Bomb 200g',
            'product_description' => "Bath bombs do not create or form bubbles ~
            For a bubble bath experience, we have our Bubble bath liquids. ~
            We have already reformulated our bath bomb mixture and upgraded it to make sure our bombs won't be damaged during shipping. ~
            Best Advise use warm or hot water for the best fizzing result!! ~
            General Note: ~            
            - One large bath bomb is good enough to provide a relaxing and fizzing experience for an average bathtub. ~
            - Bath bombs do not produce bubbles when mixed with water; instead, they fizz. ~
            - Our bath bombs are made from water-soluble colorants for easy cleaning, and they do not stain your tub. ~
            - We do advise doing a patch test by rubbing the bath bomb on an area of the skin to see if it causes any skin irritation. ~",
            'product_images' => '',
            'product_price' => '149',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Rose Valentine',
        ]);

        ProductCategory::create([
            'product_id' => 24,
            'product_category' => "Bath Bomb"
        ]);

        ProductScent::create([
            'product_id' => 24,
            'product_scent' => 'Rose Valentine',
        ]);

        Products::create([
            'product_name' => 'Bubble N Fizz Bath Bomb Fizzing 150g',
            'product_description' => "Bath bombs do not create or form bubbles ~
            For a bubble bath experience, we have our Bubble bath liquids. ~
            We have already reformulated our bath bomb mixture and upgraded it to make sure our bombs won't be damaged during shipping. ~
            Best Advise use warm or hot water for the best fizzing result!! ~
            General Note: ~            
            - One large bath bomb is good enough to provide a relaxing and fizzing experience for an average bathtub. ~
            - Bath bombs do not produce bubbles when mixed with water; instead, they fizz. ~
            - Our bath bombs are made from water-soluble colorants for easy cleaning, and they do not stain your tub. ~
            - We do advise doing a patch test by rubbing the bath bomb on an area of the skin to see if it causes any skin irritation. ~",
            'product_images' => '',
            'product_price' => '125',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Green Apple',
        ]);

        ProductCategory::create([
            'product_id' => 25,
            'product_category' => "Bath Bomb"
        ]);

        ProductScent::create([
            'product_id' => 25,
            'product_scent' => 'Green Apple',
        ]);
        Products::create([
            'product_name' => 'Bubble N Fizz Fizzing Bath Bomb 200g',
            'product_description' => "Bath bombs do not create or form bubbles ~
            For a bubble bath experience, we have our Bubble bath liquids. ~
            We have already reformulated our bath bomb mixture and upgraded it to make sure our bombs won't be damaged during shipping. ~
            Best Advise use warm or hot water for the best fizzing result!! ~
            General Note: ~            
            - One large bath bomb is good enough to provide a relaxing and fizzing experience for an average bathtub. ~
            - Bath bombs do not produce bubbles when mixed with water; instead, they fizz. ~
            - Our bath bombs are made from water-soluble colorants for easy cleaning, and they do not stain your tub. ~
            - We do advise doing a patch test by rubbing the bath bomb on an area of the skin to see if it causes any skin irritation. ~",
            'product_images' => '',
            'product_price' => '149',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Green Apple',
        ]);

        ProductCategory::create([
            'product_id' => 26,
            'product_category' => "Bath Bomb"
        ]);

        ProductScent::create([
            'product_id' => 26,
            'product_scent' => 'Green Apple',
        ]);

        Products::create([
            'product_name' => 'Bubble N Fizz Bath Bomb Fizzing 150g',
            'product_description' => "Bath bombs do not create or form bubbles ~
            For a bubble bath experience, we have our Bubble bath liquids. ~
            We have already reformulated our bath bomb mixture and upgraded it to make sure our bombs won't be damaged during shipping. ~
            Best Advise use warm or hot water for the best fizzing result!! ~
            General Note: ~            
            - One large bath bomb is good enough to provide a relaxing and fizzing experience for an average bathtub. ~
            - Bath bombs do not produce bubbles when mixed with water; instead, they fizz. ~
            - Our bath bombs are made from water-soluble colorants for easy cleaning, and they do not stain your tub. ~
            - We do advise doing a patch test by rubbing the bath bomb on an area of the skin to see if it causes any skin irritation. ~",
            'product_images' => '',
            'product_price' => '125',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Energize Lemon',
        ]);

        ProductCategory::create([
            'product_id' => 27,
            'product_category' => "Bath Bomb"
        ]);

        ProductScent::create([
            'product_id' => 27,
            'product_scent' => 'Energize Lemon',
        ]);
        Products::create([
            'product_name' => 'Bubble N Fizz Fizzing Bath Bomb 200g',
            'product_description' => "Bath bombs do not create or form bubbles ~
            For a bubble bath experience, we have our Bubble bath liquids. ~
            We have already reformulated our bath bomb mixture and upgraded it to make sure our bombs won't be damaged during shipping. ~
            Best Advise use warm or hot water for the best fizzing result!! ~
            General Note: ~            
            - One large bath bomb is good enough to provide a relaxing and fizzing experience for an average bathtub. ~
            - Bath bombs do not produce bubbles when mixed with water; instead, they fizz. ~
            - Our bath bombs are made from water-soluble colorants for easy cleaning, and they do not stain your tub. ~
            - We do advise doing a patch test by rubbing the bath bomb on an area of the skin to see if it causes any skin irritation. ~",
            'product_images' => '',
            'product_price' => '149',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Energize Lemon',
        ]);

        ProductCategory::create([
            'product_id' => 28,
            'product_category' => "Bath Bomb"
        ]);

        ProductScent::create([
            'product_id' => 28,
            'product_scent' => 'Energize Lemon',
        ]);

        Products::create([
            'product_name' => 'Bubble N Fizz Bath Bomb Fizzing 150g',
            'product_description' => "Bath bombs do not create or form bubbles ~
            For a bubble bath experience, we have our Bubble bath liquids. ~
            We have already reformulated our bath bomb mixture and upgraded it to make sure our bombs won't be damaged during shipping. ~
            Best Advise use warm or hot water for the best fizzing result!! ~
            General Note: ~            
            - One large bath bomb is good enough to provide a relaxing and fizzing experience for an average bathtub. ~
            - Bath bombs do not produce bubbles when mixed with water; instead, they fizz. ~
            - Our bath bombs are made from water-soluble colorants for easy cleaning, and they do not stain your tub. ~
            - We do advise doing a patch test by rubbing the bath bomb on an area of the skin to see if it causes any skin irritation. ~",
            'product_images' => '',
            'product_price' => '125',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Coal Black',
        ]);

        ProductCategory::create([
            'product_id' => 29,
            'product_category' => "Bath Bomb"
        ]);

        ProductScent::create([
            'product_id' => 29,
            'product_scent' => 'Coal Black',
        ]);
        Products::create([
            'product_name' => 'Bubble N Fizz Fizzing Bath Bomb 200g',
            'product_description' => "Bath bombs do not create or form bubbles ~
            For a bubble bath experience, we have our Bubble bath liquids. ~
            We have already reformulated our bath bomb mixture and upgraded it to make sure our bombs won't be damaged during shipping. ~
            Best Advise use warm or hot water for the best fizzing result!! ~
            General Note: ~            
            - One large bath bomb is good enough to provide a relaxing and fizzing experience for an average bathtub. ~
            - Bath bombs do not produce bubbles when mixed with water; instead, they fizz. ~
            - Our bath bombs are made from water-soluble colorants for easy cleaning, and they do not stain your tub. ~
            - We do advise doing a patch test by rubbing the bath bomb on an area of the skin to see if it causes any skin irritation. ~",
            'product_images' => '',
            'product_price' => '149',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Coal Black',
        ]);

        ProductCategory::create([
            'product_id' => 30,
            'product_category' => "Bath Bomb"
        ]);

        ProductScent::create([
            'product_id' => 30,
            'product_scent' => 'Coal Black',
        ]);

        Products::create([
            'product_name' => 'Bubble N Fizz Bath Bomb Fizzing 150g',
            'product_description' => "Bath bombs do not create or form bubbles ~
            For a bubble bath experience, we have our Bubble bath liquids. ~
            We have already reformulated our bath bomb mixture and upgraded it to make sure our bombs won't be damaged during shipping. ~
            Best Advise use warm or hot water for the best fizzing result!! ~
            General Note: ~            
            - One large bath bomb is good enough to provide a relaxing and fizzing experience for an average bathtub. ~
            - Bath bombs do not produce bubbles when mixed with water; instead, they fizz. ~
            - Our bath bombs are made from water-soluble colorants for easy cleaning, and they do not stain your tub. ~
            - We do advise doing a patch test by rubbing the bath bomb on an area of the skin to see if it causes any skin irritation. ~",
            'product_images' => '',
            'product_price' => '125',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Oh Papaya/Whitening',
        ]);

        ProductCategory::create([
            'product_id' => 31,
            'product_category' => "Bath Bomb"
        ]);

        ProductScent::create([
            'product_id' => 31,
            'product_scent' => 'Oh Papaya/Whitening',
        ]);
        Products::create([
            'product_name' => 'Bubble N Fizz Fizzing Bath Bomb 200g',
            'product_description' => "Bath bombs do not create or form bubbles ~
            For a bubble bath experience, we have our Bubble bath liquids. ~
            We have already reformulated our bath bomb mixture and upgraded it to make sure our bombs won't be damaged during shipping. ~
            Best Advise use warm or hot water for the best fizzing result!! ~
            General Note: ~            
            - One large bath bomb is good enough to provide a relaxing and fizzing experience for an average bathtub. ~
            - Bath bombs do not produce bubbles when mixed with water; instead, they fizz. ~
            - Our bath bombs are made from water-soluble colorants for easy cleaning, and they do not stain your tub. ~
            - We do advise doing a patch test by rubbing the bath bomb on an area of the skin to see if it causes any skin irritation. ~",
            'product_images' => '',
            'product_price' => '149',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Oh Papaya/ Whitening',
        ]);

        ProductCategory::create([
            'product_id' => 32,
            'product_category' => "Bath Bomb"
        ]);

        ProductScent::create([
            'product_id' => 32,
            'product_scent' => 'Oh Papaya/ Whitening',
        ]);

        Products::create([
            'product_name' => 'Bubble N Fizz Bath Bomb Fizzing 150g',
            'product_description' => "Bath bombs do not create or form bubbles ~
            For a bubble bath experience, we have our Bubble bath liquids. ~
            We have already reformulated our bath bomb mixture and upgraded it to make sure our bombs won't be damaged during shipping. ~
            Best Advise use warm or hot water for the best fizzing result!! ~
            General Note: ~            
            - One large bath bomb is good enough to provide a relaxing and fizzing experience for an average bathtub. ~
            - Bath bombs do not produce bubbles when mixed with water; instead, they fizz. ~
            - Our bath bombs are made from water-soluble colorants for easy cleaning, and they do not stain your tub. ~
            - We do advise doing a patch test by rubbing the bath bomb on an area of the skin to see if it causes any skin irritation. ~",
            'product_images' => '',
            'product_price' => '125',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Surprise Toy For Boy',
        ]);

        ProductCategory::create([
            'product_id' => 33,
            'product_category' => "Bath Bomb"
        ]);

        ProductScent::create([
            'product_id' => 33,
            'product_scent' => 'Surprise Toy For Boy',
        ]);
        Products::create([
            'product_name' => 'Bubble N Fizz Bath Bomb Fizzing 200g',
            'product_description' => "Bath bombs do not create or form bubbles ~
            For a bubble bath experience, we have our Bubble bath liquids. ~
            We have already reformulated our bath bomb mixture and upgraded it to make sure our bombs won't be damaged during shipping. ~
            Best Advise use warm or hot water for the best fizzing result!! ~
            General Note: ~            
            - One large bath bomb is good enough to provide a relaxing and fizzing experience for an average bathtub. ~
            - Bath bombs do not produce bubbles when mixed with water; instead, they fizz. ~
            - Our bath bombs are made from water-soluble colorants for easy cleaning, and they do not stain your tub. ~
            - We do advise doing a patch test by rubbing the bath bomb on an area of the skin to see if it causes any skin irritation. ~",
            'product_images' => '',
            'product_price' => '149',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Surprise Toy For Boy',
        ]);

        ProductCategory::create([
            'product_id' => 34,
            'product_category' => "Bath Bomb"
        ]);

        ProductScent::create([
            'product_id' => 34,
            'product_scent' => 'Surprise Toy For Boy',
        ]);


        Products::create([
            'product_name' => 'Bubble N Fizz Bubble Bath Liquid 100ml',
            'product_description' => "Bubble N Fizz Bubble Bath Liquid ~
            Have you ever tried bathing in a pool of bubbles? Indulge in our newest bubble bath design. ~
            How does it work? ~
            Gently pour a few drops of the bubble bath liquid under running water until your desired liking. ~
            Maintain a constant agitation with your hands. ~
            Handmade soaps! ~
            Discontinue use if irritation occurs. ~
            For external use only. ~",
            'product_images' => '',
            'product_price' => '125',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Sweet Berry',
        ]);

        ProductCategory::create([
            'product_id' => 35,
            'product_category' => "Bubble Bath",
        ]);

        ProductScent::create([
            'product_id' => 35,
            'product_scent' => 'Sweet Berry',
        ]);
        Products::create([
            'product_name' => 'Bubble N Fizz Bubble Bath Liquid 250ml',
            'product_description' => "Bubble N Fizz Bubble Bath Liquid ~
            Have you ever tried bathing in a pool of bubbles? Indulge in our newest bubble bath design. ~
            How does it work? ~
            Gently pour a few drops of the bubble bath liquid under running water until your desired liking. ~
            Maintain a constant agitation with your hands. ~
            Handmade soaps! ~
            Discontinue use if irritation occurs. ~
            For external use only. ~",
            'product_images' => '',
            'product_price' => '400',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Sweet Berry',
        ]);

        ProductCategory::create([
            'product_id' => 36,
            'product_category' => "Bubble Bath",
        ]);

        ProductScent::create([
            'product_id' => 36,
            'product_scent' => 'Sweet Berry',
        ]);

        Products::create([
            'product_name' => 'Bubble N Fizz Bubble Bath Liquid 100ml',
            'product_description' => "Bubble N Fizz Bubble Bath Liquid ~
            Have you ever tried bathing in a pool of bubbles? Indulge in our newest bubble bath design. ~
            How does it work? ~
            Gently pour a few drops of the bubble bath liquid under running water until your desired liking. ~
            Maintain a constant agitation with your hands. ~
            Handmade soaps! ~
            Discontinue use if irritation occurs. ~
            For external use only. ~",
            'product_images' => '',
            'product_price' => '125',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Calm Lavender',
        ]);

        ProductCategory::create([
            'product_id' => 37,
            'product_category' => "Bubble Bath",
        ]);

        ProductScent::create([
            'product_id' => 37,
            'product_scent' => 'Calm Lavender',
        ]);
        Products::create([
            'product_name' => 'Bubble N Fizz Bubble Bath Liquid 250ml',
            'product_description' => "Bubble N Fizz Bubble Bath Liquid ~
            Have you ever tried bathing in a pool of bubbles? Indulge in our newest bubble bath design. ~
            How does it work? ~
            Gently pour a few drops of the bubble bath liquid under running water until your desired liking. ~
            Maintain a constant agitation with your hands. ~
            Handmade soaps! ~
            Discontinue use if irritation occurs. ~
            For external use only. ~",
            'product_images' => '',
            'product_price' => '400',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Calm Lavender',
        ]);

        ProductCategory::create([
            'product_id' => 38,
            'product_category' => "Bubble Bath",
        ]);

        ProductScent::create([
            'product_id' => 38,
            'product_scent' => 'Calm Lavender',
        ]);

        Products::create([
            'product_name' => 'Bubble N Fizz Bubble Bath Liquid 100ml',
            'product_description' => "Bubble N Fizz Bubble Bath Liquid ~
            Have you ever tried bathing in a pool of bubbles? Indulge in our newest bubble bath design. ~
            How does it work? ~
            Gently pour a few drops of the bubble bath liquid under running water until your desired liking. ~
            Maintain a constant agitation with your hands. ~
            Handmade soaps! ~
            Discontinue use if irritation occurs. ~
            For external use only. ~",
            'product_images' => '',
            'product_price' => '125',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Candy Bubblegum',
        ]);

        ProductCategory::create([
            'product_id' => 39,
            'product_category' => "Bubble Bath",
        ]);

        ProductScent::create([
            'product_id' => 39,
            'product_scent' => 'Candy Bubblegum',
        ]);
        Products::create([
            'product_name' => 'Bubble N Fizz Bubble Bath Liquid 250ml',
            'product_description' => "Bubble N Fizz Bubble Bath Liquid ~
            Have you ever tried bathing in a pool of bubbles? Indulge in our newest bubble bath design. ~
            How does it work? ~
            Gently pour a few drops of the bubble bath liquid under running water until your desired liking. ~
            Maintain a constant agitation with your hands. ~
            Handmade soaps! ~
            Discontinue use if irritation occurs. ~
            For external use only. ~",
            'product_images' => '',
            'product_price' => '400',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Candy Bubblegum',
        ]);

        ProductCategory::create([
            'product_id' => 40,
            'product_category' => "Bubble Bath",
        ]);

        ProductScent::create([
            'product_id' => 40,
            'product_scent' => 'Candy Bubblegum',
        ]);

        Products::create([
            'product_name' => 'Bubble N Fizz Bubble Bath Liquid 100ml',
            'product_description' => "Bubble N Fizz Bubble Bath Liquid ~
            Have you ever tried bathing in a pool of bubbles? Indulge in our newest bubble bath design. ~
            How does it work? ~
            Gently pour a few drops of the bubble bath liquid under running water until your desired liking. ~
            Maintain a constant agitation with your hands. ~
            Handmade soaps! ~
            Discontinue use if irritation occurs. ~
            For external use only. ~",
            'product_images' => '',
            'product_price' => '125',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Peppermint',
        ]);

        ProductCategory::create([
            'product_id' => 41,
            'product_category' => "Bubble Bath",
        ]);

        ProductScent::create([
            'product_id' => 41,
            'product_scent' => 'Peppermint',
        ]);
        Products::create([
            'product_name' => 'Bubble N Fizz Bubble Bath Liquid 250ml',
            'product_description' => "Bubble N Fizz Bubble Bath Liquid ~
            Have you ever tried bathing in a pool of bubbles? Indulge in our newest bubble bath design. ~
            How does it work? ~
            Gently pour a few drops of the bubble bath liquid under running water until your desired liking. ~
            Maintain a constant agitation with your hands. ~
            Handmade soaps! ~
            Discontinue use if irritation occurs. ~
            For external use only. ~",
            'product_images' => '',
            'product_price' => '400',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Peppermint',
        ]);

        ProductCategory::create([
            'product_id' => 42,
            'product_category' => "Bubble Bath",
        ]);

        ProductScent::create([
            'product_id' => 42,
            'product_scent' => 'Peppermint',
        ]);

        Products::create([
            'product_name' => 'Bubble N Fizz Bubble Bath Liquid 100ml',
            'product_description' => "Bubble N Fizz Bubble Bath Liquid ~
            Have you ever tried bathing in a pool of bubbles? Indulge in our newest bubble bath design. ~
            How does it work? ~
            Gently pour a few drops of the bubble bath liquid under running water until your desired liking. ~
            Maintain a constant agitation with your hands. ~
            Handmade soaps! ~
            Discontinue use if irritation occurs. ~
            For external use only. ~",
            'product_images' => '',
            'product_price' => '125',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Cucumber',
        ]);

        ProductCategory::create([
            'product_id' => 43,
            'product_category' => "Bubble Bath",
        ]);

        ProductScent::create([
            'product_id' => 43,
            'product_scent' => 'Cucumber',
        ]);
        Products::create([
            'product_name' => 'Bubble N Fizz Bubble Bath Liquid 250ml',
            'product_description' => "Bubble N Fizz Bubble Bath Liquid ~
            Have you ever tried bathing in a pool of bubbles? Indulge in our newest bubble bath design. ~
            How does it work? ~
            Gently pour a few drops of the bubble bath liquid under running water until your desired liking. ~
            Maintain a constant agitation with your hands. ~
            Handmade soaps! ~
            Discontinue use if irritation occurs. ~
            For external use only. ~",
            'product_images' => '',
            'product_price' => '400',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Cucumber',
        ]);

        ProductCategory::create([
            'product_id' => 44,
            'product_category' => "Bubble Bath",
        ]);

        ProductScent::create([
            'product_id' => 44,
            'product_scent' => 'Cucumber',
        ]);

        Products::create([
            'product_name' => 'Bubble N Fizz Bubble Bath Liquid 100ml',
            'product_description' => "Bubble N Fizz Bubble Bath Liquid ~
            Have you ever tried bathing in a pool of bubbles? Indulge in our newest bubble bath design. ~
            How does it work? ~
            Gently pour a few drops of the bubble bath liquid under running water until your desired liking. ~
            Maintain a constant agitation with your hands. ~
            Handmade soaps! ~
            Discontinue use if irritation occurs. ~
            For external use only. ~",
            'product_images' => '',
            'product_price' => '125',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Trio Bubble Bath',
        ]);

        ProductCategory::create([
            'product_id' => 45,
            'product_category' => "Bubble Bath",
        ]);

        ProductScent::create([
            'product_id' => 45,
            'product_scent' => 'Trio Bubble Bath',
        ]);
        Products::create([
            'product_name' => 'Bubble N Fizz Bubble Bath Liquid 250ml',
            'product_description' => "Bubble N Fizz Bubble Bath Liquid ~
            Have you ever tried bathing in a pool of bubbles? Indulge in our newest bubble bath design. ~
            How does it work? ~
            Gently pour a few drops of the bubble bath liquid under running water until your desired liking. ~
            Maintain a constant agitation with your hands. ~
            Handmade soaps! ~
            Discontinue use if irritation occurs. ~
            For external use only. ~",
            'product_images' => '',
            'product_price' => '400',
            'product_stock' => '100',
            'product_rating' => '0',
            'product_scent_name' => 'Trio Bubble Bath',
        ]);

        ProductCategory::create([
            'product_id' => 46,
            'product_category' => "Bubble Bath",
        ]);

        ProductScent::create([
            'product_id' => 46,
            'product_scent' => 'Trio Bubble Bath',
        ]);
    }
}
