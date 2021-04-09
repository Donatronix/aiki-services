@extends('layouts.dashboard.technician-assessment')
@section('title')
Technician assessment
@endsection
@section('content')
<!-- ============================================================== -->
<!-- Container fluid scss in scaffolding.scss -->
<!-- ============================================================== -->
<div class="container-fluid">
    <div class="row">

        <!-- ============================================================== -->
        <!-- Example -->
        <!-- ============================================================== -->
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h5 class="card-title"></h5>
                    <h6 class="card-subtitle"></h6>
                    <div id="example-vertical" class="m-t-40">
                        @foreach ($assessments as $assessment)
                        <h3>Question {{ $loop->iteration }}</h3>
                        @livewire('assessment.assessment-technician-response', ['assessment'=>$assessment,'questionNumber'=>$loop->iteration,'user' => auth()->user()], key($assessment->id))
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Example -->
        <!-- ============================================================== -->
    </div>
</div>
<!-- ============================================================== -->
<!-- Container fluid scss in scaffolding.scss -->
<!-- ============================================================== -->
@endsection


@push('css')
@livewireStyles
@endpush

@push('js')
@livewireScripts
<script>
    jQuery(function () {
        //check if user clicked finish
        $(document).on("keypress keyup blur", 'a[href="#finish"]', function (event) {
            window.location.href = "{{ route('technician.assessment.show.score',['technician'=>auth()->user()->slug]) }}";
        });

        $(document).on("keypress keyup blur", ".allowNumericWithDecimal", function (event) {
            //this.value = this.value.replace(/[^0-9\.]/g,'');
            $(this).val($(this).val().replace(/[^0-9\.]/g, ""));
            if (
                (event.which !== 46 || $(this).val().indexOf(".") !== -1) && (event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
        });

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
