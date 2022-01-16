<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionOption extends Model
{
    protected $table = "question_options";
    protected $fillable = ["is_correct", "option_title", "question_id"];
    use HasFactory;
}
