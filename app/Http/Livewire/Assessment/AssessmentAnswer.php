<?php

namespace App\Http\Livewire\Assessment;

use App\Models\Assessment\Assessment;
use Livewire\Component;

class AssessmentAnswer extends Component
{
    public Assessment $assessment;
    public $assessmentType;
    public $answers = [];
    public $options;

    protected $rules = [
        'answer' => 'required',
    ];


    public function mount($assessment)
    {
        $this->assessment = $assessment;
    }

    public function render()
    {
        $this->options = $this->assessment->options;
        $this->assessmentType = $this->assessment->question_type;
        return view('livewire.assessment.assessment-answer', ['options' => $this->options, 'assessmentType' => $this->assessmentType]);
    }

    public function addAnswer()
    {
        DB::beginTransaction();
        try {
            $arr = $this->answers;
            $arr = array_filter(array_map('trim', $arr), fn ($value) => !is_null($value) && $value !== '');
            if (count($arr) > 0) {
                foreach ($arr as $key => $answer) {
                    # code...
                }
            }
        } catch (\Throwable $th) {
            DB::rollback();
            session()->flash('error', $th->getMessage());
            return;
        }
        DB::commit();
    }
}
