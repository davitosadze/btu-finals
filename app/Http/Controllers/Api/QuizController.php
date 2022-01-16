<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\QuestionOption;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function checkAnswer(Request $req) {
        $option = QuestionOption::find($req->optionId);
        if($option->is_correct == 1) {
            return response()->json(['isCorrect'=>1], 200);   
        }
        else {
            return response()->json(['status'=>0], 200);   

        }
    }
}
