@php
$errors = session()->get('error');
$success= $messages = session()->get('success');
$info = session()->get('info');
$warnings = session()->get('warning');
$status = session()->get('status');
@endphp

@if ($errors)
<div class="row text-center">
    @if (is_array($errors) && count($errors) > 0)
    @foreach($errors->all() as $value)
    <div class="col-md-12">
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button class="close" type="button" data-dismiss="alert">×</button>
            <strong>Error!</strong> <br /> {!! $value !!}
        </div>
    </div>
    @endforeach
    @else
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button class="close" type="button" data-dismiss="alert">×</button>
        <strong>Error!</strong> <br /> {!! $errors !!}
    </div>
    @endif
    @endif

    @if ($messages)
    @if (is_array($messages) && count($messages) > 0)
    @foreach($messages as $value)
    <div class="alert alert-success alert-dismissible" role="alert">
        <button class="close" type="button" data-dismiss="alert">×</button>
        <strong>Success!</strong> <br /> {!! $value !!}
    </div>
    @endforeach
    @else
    <div class="alert alert-success alert-dismissible" role="alert">
        <button class="close" type="button" data-dismiss="alert">×</button>
        <strong>Success!</strong> <br /> {!! $messages !!}
    </div>
    @endif
    @endif

    @if ($status)
    @if (is_array($status) && count($status) > 0)
    @foreach($status as $value)
    <div class="alert alert-success alert-dismissible" role="alert">
        <button class="close" type="button" data-dismiss="alert">×</button>
        <strong>Success!</strong> <br /> {!! $value !!}
    </div>
    @endforeach
    @else
    <div class="alert alert-success alert-dismissible" role="alert">
        <button class="close" type="button" data-dismiss="alert">×</button>
        <strong>Success!</strong> <br /> {!! $status !!}
    </div>
    @endif
    @endif

    @if ($info)
    @if (is_array($info) && count($info) > 0)
    @foreach($info as $value)
    <div class="alert alert-info alert-dismissible" role="alert">
        <button class="close" type="button" data-dismiss="alert">×</button>
        <strong>Info!</strong> <br /> {!! $value !!}
    </div>
    @endforeach
    @else
    <div class="alert alert-info alert-dismissible" role="alert">
        <button class="close" type="button" data-dismiss="alert">×</button>
        <strong>Info!</strong> <br /> {!! $info !!}
    </div>
    @endif
    @endif

    @if ($warnings)
    @if (is_array($warnings) && count($warnings) > 0)
    @foreach($warnings as $value)
    <div class="alert alert-warning alert-dismissible" role="alert">
        <button class="close" type="button" data-dismiss="alert">×</button>
        <strong>Warning!</strong> <br /> {!! $value !!}
    </div>
    @endforeach
    @else
    <div class="alert alert-warning alert-dismissible" role="alert">
        <button class="close" type="button" data-dismiss="alert">×</button>
        <strong>Warning!</strong> <br /> {!! $warnings !!}
    </div>
    @endif
</div>
@endif




@push('css')
<link rel="stylesheet" href="{{ asset('frontend/css/jquery.sweet-modal.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/toastr.min.css') }}">
@endpush

@push('js')
<script type="text/javascript" src="{{ asset('backend/js/plugins/bootstrap-notify.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jquery.sweet-modal.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/toastr.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/helper.js') }}"></script>
@endpush
