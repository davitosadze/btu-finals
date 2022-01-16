<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index() {
        $quizzes = Quiz::with('author')->get();
        return view("admin.index", compact('quizzes'));
    }

    public function quizDetails($quiz_id) {
        $quiz = Quiz::where('id', $quiz_id)
        ->with('questions', function($query) {
            return $query->with('options');
        })
        ->first();    
        
        return view("admin.quiz.index", compact('quiz'));
    }

    public function approveQuiz($quiz_id) {
        $quiz = Quiz::find($quiz_id);
        if($quiz->is_approved) {
            $quiz->is_approved = 0;
        }
        else{
            $quiz->is_approved = 1;
        }
        $quiz->save();

        return redirect()->back()->with('status', 'ოპერაცია წარმატებით დასრულდა');
    }

    public function update(Request $req, $quiz_id) {
        $quiz = Quiz::find($quiz_id);
        $quiz->fill($req->all())->save();

        return redirect()->route('admin.index')->with('status', 'ქვიზი წარმატებით განახლდა');
    }

    public function delete($quiz_id) {
        Quiz::find($quiz_id)->delete();
        return redirect()->back()->with('status', 'ქვიზი წარმატებით წაიშალა');
    }


}
