@extends('layouts.dashboard.technician-assessment')

@section('title')
- New
@endsection

@section('content')
<!-- ============================================================== -->
<!-- Container fluid scss in scaffolding.scss -->
<!-- ============================================================== -->
<div class="container-fluid">
    <div class="row">
        <div class="col s12">
            <div class="card">
                @foreach ($errors->all() as $error)
                <div>
                    <span class="red-text text-darken-2">{{ $error }}</span>
                </div>
                @endforeach
                <div class="card-content">
                    <form action="{{ route('assessment.store') }}" method="POST">
                        <div class="row">
                            @csrf
                            <div class="input-field col s12 m6 l6">
                                <select name="category" required>
                                    <option value="" @if( null===old('category')) selected @endif>Select technician category</option>
                                    <option value="plumber" @if('plumber'===old('category')) selected @endif>Plumber</option>
                                    <option value="carpenter" @if('carpenter'===old('category')) selected @endif>Carpenter</option>
                                    <option value="mechanic" @if('mechanic'===old('category')) selected @endif>Mechanic</option>
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
                                    <option value="" @if( null===old('question_type')) selected @endif>Select question type</option>
                                    <option value="text" @if( 'text'===old('question_type')) selected @endif>Text</option>
                                    <option value="number" @if( 'number'===old('question_type')) selected @endif>Numeric</option>
                                    <option value="select" @if( 'select'===old('question_type')) selected @endif>Select</option>
                                    <option value="multiple select" @if( 'multiple select'===old('question_type')) selected @endif>Multiple select</option>
                                </select>
                                <label>Select question type</label>
                                @if ($errors->has('question_type'))
                                <span class="red-text text-darken-2">{{ $errors->first('question_type') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="message5" name="question" class="materialize-textarea" required>{{ old('question') }}</textarea>
                                <label for="message5">Question</label>
                                @if ($errors->has('question'))
                                <span class="red-text text-darken-2">{{ $errors->first('question') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="score" name="score" type="text" required>
                                <label for="score" class="">Score</label>
                                @if ($errors->has('score'))
                                <span class="red-text text-darken-2">{{ $errors->first('score') }}</span>
                                @endif
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
            </div>
        </div>
    </div>
</div>
@endsection
