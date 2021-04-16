<?php

namespace App\Http\Controllers\Assessment;

use App\Models\Assessment\Assessment;
use App\Models\Assessment\AssessmentResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AssessmentResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Assessment\AssessmentResponse  $assessmentResponse
     * @return \Illuminate\Http\Response
     */
    public function show(AssessmentResponse $assessmentResponse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Assessment\AssessmentResponse  $assessmentResponse
     * @return \Illuminate\Http\Response
     */
    public function edit(AssessmentResponse $assessmentResponse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Assessment\AssessmentResponse  $assessmentResponse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AssessmentResponse $assessmentResponse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Assessment\AssessmentResponse  $assessmentResponse
     * @return \Illuminate\Http\Response
     */
    public function destroy(AssessmentResponse $assessmentResponse)
    {
        //
    }


    public function getResponse(Assessment $assessment)
    {
        $user = auth()->user();
        $response = $user->responses->where('assessment_id', $assessment->id)->first();
        if ($response) {
            if (($response->assessment->question_type == 'select') || ($response->assessment->question_type == 'text') || ($response->assessment->question_type == 'number')) {
                if ($response) {
                    return $response->response ?? $response->assessment_option_id;
                }
            }
        }
        return null;
    }
}
