<?php

namespace App\Http\Controllers;

use App\Http\Resources\TestResource;
use App\Models\Result;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Test::paginate(10);
        $questionsResource = TestResource::collection($questions);
        return view('exam.index', ['questions' => $questionsResource]);
    }

    public function startExam()
    {
        return view('exam.start-exam');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $userInputs = $request->all();
        $points = 0;
        $totalQuestion = 50;

        foreach ($userInputs as $key => $value) {
            if (is_numeric($key)) {
                $question = Test::find($key);

                if ($question->correct_answer == $value) {
                    $points++;
                }
            }
        }

        $percentage = ($points / $totalQuestion) * 100;

        Result::create([
            'user_id' => Auth::id(),
            'score' => $percentage
        ]);

        return Redirect::route('dashboard')->with('examSubmitted', 'test submitted sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        //
    }
}
