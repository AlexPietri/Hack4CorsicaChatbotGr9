<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Question;
use App\Answer;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Add new truc muche
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        $request->validate([
            'question' => 'required|string',
            'reponse' => 'required|string',
            'categorie' => 'required|string',
        ]);

        $question = $request->input('question');
        $reponse = $request->input('reponse');
        $categorie = $request->input('categorie');

        $question = new Question();
        $question->text = $question;
        $question->categorie_id = $categorie;
        $question->save();

        $question = DB::table('questions')->orderBy('id', 'desc')->first();

        $answer = new Answer();
        $answer->text = $reponse;
        $answer->question_id = $question->id;
        $answer->save();
    }
}
