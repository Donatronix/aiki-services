<?php

namespace App\Http\Livewire\Assessment;

use App\Http\Controllers\Assessment\AssessmentResponseController;
use App\Models\Assessment\Assessment;
use App\Models\Assessment\AssessmentResponse;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AssessmentTechnicianResponse extends Component
{
    public $answers = [];
    public $response;
    public Assessment $assessment;
    public User $user;

    protected $listeners = [
        'render',
    ];

    public function mount($assessment, $user)
    {
        $this->assessment = $assessment;
        $this->user = $user;


        $ctrl = new AssessmentResponseController;
        $this->response = $ctrl->getResponse($assessment);
    }

    public function render()
    {
        return view('livewire.assessment.assessment-technician-response');
    }

    public function addResponse()
    {
        DB::beginTransaction();
        try {
            $arr = $this->answers;
            $arr = array_filter(array_map('trim', $arr), fn ($value) => !is_null($value) && $value !== '');
            if (count($arr) > 0) {
                foreach ($arr as $answer) {
                    if (\is_numeric($answer)) {
                        AssessmentResponse::updateOrCreate([
                            //Add unique field combo to match here
                            //For example, perhaps you only want one entry per user:
                            'user_id' => $this->user->id,
                            'assessment_id' => $this->assessment->id,
                        ], [
                            'assessment_option_id' => $answer,
                        ]);
                    } else {
                        AssessmentResponse::updateOrCreate([
                            //Add unique field combo to match here
                            //For example, perhaps you only want one entry per user:
                            'user_id' => $this->user->id,
                            'assessment_id' => $this->assessment->id,
                        ], [
                            'answer' => $answer,
                        ]);
                    }
                    $this->response = $answer;
                }
            }
        } catch (\Throwable $th) {
            DB::rollback();
            session()->flash('error', $th->getMessage());
            return;
        }
        DB::commit();
        // $this->emitSelf('render');
    }
}
