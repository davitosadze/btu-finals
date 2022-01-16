<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\QuestionOption;
use Illuminate\Http\Request;

class QuestionOptionController extends Controller
{
    public function index($question_id) {
        $question = Question::where('id', $question_id)->with('options')->first();

        return view("admin.quiz.questions.options.index", compact('question'));
    }

    public function add($question_id) {
        return view("admin.quiz.questions.options.add", compact('question_id'));

    }

    public function insert(Request $req, $question_id) {
        $option = QuestionOption::create([
            'question_id' => $question_id,
            'option_title' => $req->option_title,
            'is_correct' => $req->is_correct
        ]);
        
        return redirect()->route('admin.quizzes.questions.options', $question_id)->with('status', 'პასუხი წარმატებით დაემატა');
    }

    public function edit($option_id) {
        $option = QuestionOption::find($option_id);
        return view("admin.quiz.questions.options.edit", compact('option'));
    }

    public function update(Request $req, $option_id) {
        $option = QuestionOption::find($option_id);
        if(!$req->is_correct) {
            $req["is_correct"] = 0;
        }
        $option->fill($req->all())->save();

        return redirect()->route('admin.quizzes.questions.options', $option->question_id)->with('status', 'პასუხი წარმატებით განახლდა');

    } 

    public function delete($option_id) {
        QuestionOption::find($option_id)->delete();
        
        return redirect()->back()->with('status', 'პასუხი წარმატებით დაემატა');
    }
}
