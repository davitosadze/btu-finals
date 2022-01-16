<?php

namespace App\Http\Controllers\QuizCrud;

use App\Http\Controllers\Controller;
use App\Models\Quiz;
use App\Models\User;
use Illuminate\Http\Request;
use Session;

class QuizController extends Controller
{
    public function index() {
        $quizzes = Quiz::where('author_id', $this->userId())->orderBy('id', 'desc')->get();

        return view("user.quizzes.index", compact('quizzes'));
    }

    public function add() {
        return view("user.quizzes.add");
    }

    public function edit($quiz_id) {
        $quiz = Quiz::find($quiz_id);
        return view("user.quizzes.edit", compact('quiz'));
    }

    public function insert(Request $req) {
        $quiz = Quiz::create([
            'title' => $req->quiz_name,
            'description' => $req->description,
            'image' => $req->image,
            'author_id' => $this->userId()
        ]);

        return redirect('/user/quizzes')->with('status', 'ქვიზი წარმატებით დაემატა');
    }

    public function update(Request $req, $quiz_id) {
        $quiz = Quiz::find($quiz_id);
        $quiz->fill($req->all())->save();

        return redirect()->route('user.quizzes')->with('status', 'ქვიზი წარმატებით განახლდა');
    }

    public function delete($quiz_id) {
        Quiz::find($quiz_id)->delete();
        return redirect()->back()->with('status', 'ქვიზი წარმატებით წაიშალა');
    }

    public function userId() {
        $userId = Session::get('userId');
        return $userId;
    }
}
