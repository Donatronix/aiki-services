<?php

namespace App\Http\Livewire\Assessment;

use App\Models\Assessment\Assessment;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AssessmentOption extends Component
{
    public Assessment $assessment;
    public $option;
    public $options;

    protected $listeners = [
        'render',
    ];

    protected $rules = [
        'option' => 'required',
    ];


    public function mount($assessment)
    {
        $this->assessment = $assessment;
    }

    public function render()
    {
        $this->options = $this->assessment->options;
        return view('livewire.assessment.assessment-option', ['options' => $this->options]);
    }

    /**
     * Add new option to assessment
     *
     * @return void
     */
    public function addOption()
    {
        try {
            $this->validate();
            DB::beginTransaction();
            if ($this->option !== "") {
                $this->assessment->options()->create([
                    'option' => $this->option,
                ]);
            }
            $this->option = "";
        } catch (\Throwable $th) {
            DB::rollback();
            session()->flash('error', $th->getMessage());
        }
        DB::commit();
        $this->emitSelf('render');
    }

    /**
     * Remove assessment option
     *
     * @param string $slug
     *
     * @return void
     */
    public function removeOption(string $slug)
    {
        try {
            DB::beginTransaction();
            $this->assessment->options()->whereSlug($slug)->first()->delete();
        } catch (\Throwable $th) {
            DB::rollback();
            session()->flash('error', $th->getMessage());
        }
        DB::commit();
        $this->emit('render');
    }
}
