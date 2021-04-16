<?php

namespace App\Http\Controllers\Assessment;

use App\Http\Controllers\Controller;
use App\Models\Assessment\Assessment;
use App\Models\Assessment\AssessmentParticipant;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class AssessmentParticipantController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $technician
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, User $technician)
    {
        DB::beginTransaction();
        try {
            if ($request->has('category')) {
                $category = $request->category;
                if (!$technician->hasRole($category)) { //Assigning role to user
                    $role = Role::whereName($category)->first();
                    $technician->assignRole($role);
                }
            }
            $category = $technician->getRoleNames()->first();

            $participant = AssessmentParticipant::firstOrCreate([
                'user_id' => $technician->id,
                'status' => 'in progress',
                'completed_by' => Carbon::now()->addHour()
            ]);
        } catch (\Throwable $th) {
            DB::rollback();
            session()->flash('error', $th->getMessage());
            return back();
        }
        DB::commit();
        return view('dashboard.assessment.technician-assessment', [
            'technician' => $technician,
            'assessments' => Assessment::whereCategory($category)->get(),
            'deadline' => $participant->completed_by,
        ]);
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
     * @param  \App\Models\User  $technician
     * @return \Illuminate\Http\Response
     */
    public function show(User $technician)
    {
        $score = 0;
        // $participant = $technician->participant;
        $this->evaluateScore($technician);

        return view('dashboard.assessment-complete', ['score' => $score]);
    }

    public function evaluateScore($technician)
    {
        $score = 0;
        if ($technician) {
            //evaluate score
            $responses = $technician->responses;
            foreach ($responses as $response) {
                foreach ($response->assessment->answers as $item) {
                    $answer = $item->answer ?? $item->assessment_option_id;
                    if ($answer == ($response->response ?? $response->assessment_option_id)) {
                        $score += (int) $response->assessment->score;
                    }
                    // dd($score);
                }
            }
        }
        return $score;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Assessment\AssessmentParticipant  $assessmentParticipant
     * @return \Illuminate\Http\Response
     */
    public function edit(AssessmentParticipant $assessmentParticipant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Assessment\AssessmentParticipant  $assessmentParticipant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AssessmentParticipant $assessmentParticipant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Assessment\AssessmentParticipant  $assessmentParticipant
     * @return \Illuminate\Http\Response
     */
    public function destroy(AssessmentParticipant $assessmentParticipant)
    {
        //
    }
}
