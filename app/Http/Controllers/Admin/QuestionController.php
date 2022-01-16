<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function insert(Request $req, $quiz_id) {

        $question = Question::create([
            'question_title' => $req->question_title,
            'image' => $req->image,
            'quiz_id' => $quiz_id,
        ]);

        return redirect()->route('admin.quizzes.quizDetails', $quiz_id)->with('status', 'კითხვა წარმატებით დაემატა');

        
    }

    public function add($quiz_id) {
        return view("admin.quiz.questions.add", compact('quiz_id'));
    }

    public function edit($question_id) {
        $question = Question::find($question_id);
        return view("admin.quiz.questions.edit", compact('question'));
    }

    public function update(Request $req, $question_id) {
        $question = Question::find($question_id);
        $question->fill($req->all())->save();

        return redirect()->route('admin.quizzes.quizDetails', $question->quiz_id)->with('status', 'კითხვა წარმატებით განახლდა');
    }


    public function delete($question_id) {
        Question::find($question_id)->delete();
        return redirect()->back()->with('status', 'კითხვა წარმატებით წაიშალა');
    }
}
