@extends('layouts.dashboard.assessment.index')

@section('title')
- Questions
@endsection
@section('content')
<!-- ============================================================== -->
<!-- Container fluid scss in scafholding.scss -->
<!-- ============================================================== -->
<div class="container-fluid">
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <div style="margin-bottom:20px;">
                        <a href="{{ route('assessment.create') }}" class="waves-effect waves-light btn green right">
                            <i class="material-icons left">add</i><span>New Assessment Question</span>
                        </a>
                    </div>
                    <table id="zero_config" class="responsive-table display" style="width:100%">
                        <thead>
                            <tr>
                                <th class="center-align">#</th>
                                <th class="center-align">Category</th>
                                <th class="center-align">Type</th>
                                <th class="center-align">Question</th>
                                <th class="center-align">Options</th>
                                <th class="center-align">Answer</th>
                                <th class="center-align">Score</th>
                                <th class="center-align" colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($questions as $question)
                            <tr>
                                <td class="center-align">{{ $loop->iteration }}</td>
                                <td class="center-align">{{ ucwords($question->category) }}</td>
                                <td class="center-align">{{ ucwords($question->question_type) }}</td>
                                <td>{{ $question->question }}</td>
                                <td>
                                    <ol style="list-style-type: upper-alpha;">
                                        @foreach($question->options as $item)
                                        <li>{{ $item->option }}</li>
                                        @endforeach
                                    </ol>
                                </td>
                                <td>
                                    <ul>
                                        @foreach($question->answers as $item)
                                        <li>{{ $item->answer }}</li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td class="center-align">{{ $question->score }}</td>
                                <td class="center-align">
                                    <a href="{{ route('assessment.edit',['assessment' => $question->slug]) }}" class="waves-effect waves-light btn indigo">
                                        <i class="material-icons left">edit</i><span>Edit</span>
                                    </a>
                                </td>
                                <td class="center-align">
                                    <a href="/assessment/delete" class="waves-effect waves-light btn red" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">
                                        <i class="material-icons left">close</i><span>Delete</span>
                                    </a>
                                    <form id="delete-form" action="{{ route('assessment.delete',['assessment'=>$question->slug]) }}" method="POST" style="display: none;">
                                        @method('DELETE')
                                        @csrf
                                    </form>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- ============================================================== -->
<!-- Container fluid scss in scafholding.scss -->
<!-- ============================================================== -->
@endsection
