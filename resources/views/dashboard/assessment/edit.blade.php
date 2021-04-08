@extends('layouts.dashboard.technician-assessment')

@section('title')
Assessment - Edit
@endsection

@section('content')
<!-- ============================================================== -->
<!-- Container fluid scss in scaffolding.scss -->
<!-- ============================================================== -->
<div class="container-fluid">
    @include('errors.list')
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h5 class="card-title">Assessment</h5>
                    <h6 class="card-subtitle"></h6>
                    <div id="example-vertical" class="m-t-40">
                        <h3>Question</h3>
                        <section>
                            <div class="col s12">
                                <form action="{{ route('assessment.update',['assessment'=>$assessment->slug]) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="row">
                                        <div class="input-field col s12 m6 l6">
                                            <select name="category">
                                                <option value="" @if( null===old('category', $assessment->category)) selected @endif>Select technician category</option>
                                                <option value="plumber" @if('plumber'===old('category', $assessment->category)) selected @endif>Plumber</option>
                                                <option value="carpenter" @if('carpenter'===old('category', $assessment->category)) selected @endif>Carpenter</option>
                                                <option value="mechanic" @if('mechanic'===old('category', $assessment->category)) selected @endif>Mechanic</option>
                                            </select>
                                            <label>Select technician category</label>
                                            @if ($errors->has('category'))
                                            <span class="red-text text-darken-2">{{ $errors->first('category') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12 m6 l6">
                                            <select name="question_type" required>
                                                <option value="" @if( null===old('question_type',$assessment->question_type)) selected @endif>Question type</option>
                                                <option value="text" @if( 'text'===old('question_type',$assessment->question_type)) selected @endif>Text</option>
                                                <option value="number" @if( 'number'===old('question_type',$assessment->question_type)) selected @endif>Numeric</option>
                                                <option value="select" @if( 'select'===old('question_type',$assessment->question_type)) selected @endif>Select</option>
                                                <option value="multiple select" @if( 'multiple select'===old('question_type',$assessment->question_type)) selected @endif>Multiple select</option>
                                            </select>
                                            <label>Select question type</label>
                                            @if ($errors->has('question_type'))
                                            <span class="red-text text-darken-2">{{ $errors->first('question_type') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="message5" name="question" class="materialize-textarea" required>{{ old('question',$assessment->question) }}</textarea>
                                            <label for="message5">Question</label>
                                            @if ($errors->has('question'))
                                            <span class="red-text text-darken-2">{{ $errors->first('question') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="score" name="score" type="text" value="{{ old('question',$assessment->score) }}">
                                            <label for="score" class="">Score</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </section>
                        <h3>Options</h3>
                        <section>
                            @livewire('assessment.assessment-option', ['assessment' => $assessment])
                        </section>
                        <h3>Answer(s)</h3>
                        <section>
                            @livewire('assessment.assessment-answer', ['assessment' => $assessment])
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@push('css')
@livewireStyles
@endpush

@push('js')
@livewireScripts
<script>
    jQuery(function () {
        $('.allowNumericWithDecimal').on("paste", function (e) {
            var text = e.originalEvent.clipboardData.getData('Text');
            if (isNumber(text)) {
                if ((text.substring(text.indexOf('.')).length > 3) && (text.indexOf('.') > -1)) {
                    e.preventDefault();
                    $(this).val(text.substring(0, text.indexOf('.') + 3));
                }
            } else {
                e.preventDefault();
            }
        });
    });

</script>
@endpush
