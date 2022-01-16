<?php

namespace Database\Seeders;

use App\Models\QuestionOption;
use Illuminate\Database\Seeder;

class QuestionOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #1
        QuestionOption::create([
            'question_id' => 1,
            'option_title' => 'Correct',
            'is_correct' => 1
        ]);

        QuestionOption::create([
            'question_id' => 1,
            'option_title' => 'Incorrect',
            'is_correct' => 0
        ]);

        QuestionOption::create([
            'question_id' => 1,
            'option_title' => 'Incorrect',
            'is_correct' => 0
        ]);

        QuestionOption::create([
            'question_id' => 1,
            'option_title' => 'Incorrect',
            'is_correct' => 0
        ]);

        #2
        QuestionOption::create([
            'question_id' => 2,
            'option_title' => 'Incorrect',
            'is_correct' => 0
        ]);


        QuestionOption::create([
            'question_id' => 2,
            'option_title' => 'Correct',
            'is_correct' => 1
        ]);

        QuestionOption::create([
            'question_id' => 2,
            'option_title' => 'Incorrect',
            'is_correct' => 0
        ]);

        QuestionOption::create([
            'question_id' => 2,
            'option_title' => 'Incorrect',
            'is_correct' => 0
        ]);
        
        #3
        QuestionOption::create([
            'question_id' => 3,
            'option_title' => 'Correct',
            'is_correct' => 1
        ]);

        QuestionOption::create([
            'question_id' => 3,
            'option_title' => 'Incorrect',
            'is_correct' => 0
        ]);

        QuestionOption::create([
            'question_id' => 3,
            'option_title' => 'Incorrect',
            'is_correct' => 0
        ]);

        QuestionOption::create([
            'question_id' => 3,
            'option_title' => 'Incorrect',
            'is_correct' => 0
        ]);



        #4

        QuestionOption::create([
            'question_id' => 4,
            'option_title' => 'Incorrect',
            'is_correct' => 0
        ]);

        QuestionOption::create([
            'question_id' => 4,
            'option_title' => 'Incorrect',
            'is_correct' => 0
        ]);

        QuestionOption::create([
            'question_id' => 4,
            'option_title' => 'Incorrect',
            'is_correct' => 0
        ]);

        QuestionOption::create([
            'question_id' => 4,
            'option_title' => 'Correct',
            'is_correct' => 1
        ]);


    }
}
