<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::create([
            'id' => 1,
            'question_title' => 'TestQuestion',
            'image' => 'https://media.istockphoto.com/photos/quiz-time-concept-speech-bubble-with-pencil-on-yellow-background-picture-id1268465415?k=20&m=1268465415&s=612x612&w=0&h=dzRhC8EPw1bZTIDzxc0416FaL8IF71RCPNjBlYUgzQA=',
            'quiz_id' => 1,
        ]);

        Question::create([
            'id' => 2,
            'question_title' => 'TestQuestion 2',
            'image' => 'https://media.istockphoto.com/photos/quiz-time-concept-speech-bubble-with-pencil-on-yellow-background-picture-id1268465415?k=20&m=1268465415&s=612x612&w=0&h=dzRhC8EPw1bZTIDzxc0416FaL8IF71RCPNjBlYUgzQA=',
            'quiz_id' => 1,
        ]);


        Question::create([
            'id' => 3,
            'question_title' => 'TestQuestion 3',
            'image' => 'https://media.istockphoto.com/photos/quiz-time-concept-speech-bubble-with-pencil-on-yellow-background-picture-id1268465415?k=20&m=1268465415&s=612x612&w=0&h=dzRhC8EPw1bZTIDzxc0416FaL8IF71RCPNjBlYUgzQA=',
            'quiz_id' => 1,
        ]);

        Question::create([
            'id' => 4,
            'question_title' => 'TestQuestion 4',
            'image' => 'https://media.istockphoto.com/photos/quiz-time-concept-speech-bubble-with-pencil-on-yellow-background-picture-id1268465415?k=20&m=1268465415&s=612x612&w=0&h=dzRhC8EPw1bZTIDzxc0416FaL8IF71RCPNjBlYUgzQA=',
            'quiz_id' => 1,
        ]);
    }
}
