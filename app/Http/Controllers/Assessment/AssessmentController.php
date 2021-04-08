<?php

namespace App\Http\Controllers\Assessment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Assessment\AssessmentRequest;
use App\Models\Assessment\Assessment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AssessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.assessment.index', ['questions' => Assessment::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.assessment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Assessment\AssessmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AssessmentRequest $request)
    {
        try {
            DB::beginTransaction();
            $request->validated();
            $assessment = Assessment::create([
                'category' => $request->category,
                'question_type' => $request->question_type,
                'question' => $request->question,
                'score' => $request->score
            ]);
        } catch (\Throwable $th) {
            DB::rollback();
            session()->flash('error', $th->getMessage());
            return back();
        }
        DB::commit();
        session()->flash('success', 'Assessment question was added successfully');
        return redirect()->route('assessment.edit', ['assessment' => $assessment]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Assessment\Assessment  $assessment
     * @return \Illuminate\Http\Response
     */
    public function show(Assessment $assessment)
    {
        return view('dashboard.assessment.show', compact('assessment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Assessment\Assessment  $assessment
     * @return \Illuminate\Http\Response
     */
    public function edit(Assessment $assessment)
    {
        return view('dashboard.assessment.edit', ['assessment' => $assessment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Assessment\AssessmentRequest  $request
     * @param  \App\Models\Assessment\Assessment  $assessment
     * @return \Illuminate\Http\Response
     */
    public function update(AssessmentRequest $request, Assessment $assessment)
    {
        try {
            DB::beginTransaction();
            $request->validated();
            $assessment->update([
                'category' => $request->category,
                'question_type' => $request->question_type,
                'question' => $request->question,
                'score' => $request->score
            ]);
        } catch (\Throwable $th) {
            DB::rollback();
            session()->flash('error', $th->getMessage());
            return back();
        }
        DB::commit();
        session()->flash('success', 'Assessment question was updated successfully');
        return redirect()->route('assessment.edit', ['assessment' => $assessment]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Assessment\Assessment  $assessment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assessment $assessment)
    {
        try {
            DB::beginTransaction();
            $assessment->delete();
        } catch (\Throwable $th) {
            DB::rollback();
            session()->flash('error', $th->getMessage());
            return back();
        }
        DB::commit();
        session()->flash('success', 'Assessment question was deleted successfully');
        return redirect()->route('assessment.index');
    }
}
