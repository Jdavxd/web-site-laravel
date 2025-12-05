<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7\Query;
use Illuminate\Http\Request;
use App\Models\Question;   

class PageController extends Controller
{
    public function index()
    {
        $questions = Question::with('category', 'user')->latest()->get();

        return view('pages.home', [
            'questions' => $questions,
        ]);
    }    
}

