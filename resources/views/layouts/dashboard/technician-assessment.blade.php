<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('pages/assets/images/favicon.png') }}">
        <title>Aiki @yield('title')</title>
        <link href="{{ asset('pages/dist/css/style.css') }}" rel="stylesheet">
        <!-- This page CSS -->
        <link href="{{ asset('pages/assets/libs/jquery-steps/jquery.steps.css') }}" rel="stylesheet">
        <link href="{{ asset('pages/assets/libs/jquery-steps/steps.css') }}" rel="stylesheet">
        <!-- This page CSS -->
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
        @stack('css')
    </head>

    <body>
        <div class="main-wrapper" id="main-wrapper">
            <!-- ============================================================== -->
            @include('layouts.dashboard.includes.preloader')
            @include('layouts.dashboard.includes.topbar')

            @include('layouts.dashboard.includes.left-sidebar')
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper scss in scaffolding.scss -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Title and breadcrumb -->
                <!-- ============================================================== -->
                <div class="page-titles">
                    <div class="d-flex align-items-center">
                        <h5 class="font-medium m-b-0">Technical Assessment</h5>
                        <div class="ml-auto custom-breadcrumb">
                            <a href="{{ route('dashboard') }}" class="breadcrumb">Home</a>
                            <a href="#!" class="breadcrumb">Technician Assessment</a>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                @yield('content')
                <!-- ============================================================== -->
                @include('layouts.dashboard.includes.footer')
            </div>
            <!-- ============================================================== -->
            <!-- Page wrapper scss in scaffolding.scss -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            @include('layouts.dashboard.includes.right-sidebar')
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- All Required js -->
        <!-- ============================================================== -->
        <script src="{{ asset('pages/assets/libs/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('pages/dist/js/materialize.min.js') }}"></script>
        <script src="{{ asset('pages/assets/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js') }}"></script>
        <!-- ============================================================== -->
        <!-- Apps -->
        <!-- ============================================================== -->
        <script src="{{ asset('pages/dist/js/app.js') }}"></script>
        <script src="{{ asset('pages/dist/js/app.init.horizontal.js') }}"></script>
        <script src="{{ asset('pages/dist/js/app-style-switcher.horizontal.js') }}"></script>
        <!-- ============================================================== -->
        <!-- Custom js -->
        <!-- ============================================================== -->
        <script src="{{ asset('pages/dist/js/custom.min.js') }}"></script>
        <!-- ============================================================== -->
        <!-- This page plugin js -->
        <!-- ============================================================== -->
        <script src="{{ asset('pages/assets/libs/jquery-steps/build/jquery.steps.min.js') }}"></script>
        <script src="{{ asset('pages/assets/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
        <script>
            //Basic Example
            $("#example-basic").steps({
                headerTag: "h3",
                bodyTag: "section",
                transitionEffect: "slideLeft",
                autoFocus: true
            });

            // Basic Example with form
            var form = $("#example-form");
            form.validate({
                errorPlacement: function errorPlacement(error, element) {
                    element.before(error);
                },
                rules: {
                    confirm: {
                        equalTo: "#password"
                    }
                }
            });
            form.children("div").steps({
                headerTag: "h3",
                bodyTag: "section",
                transitionEffect: "slideLeft",
                onStepChanging: function (event, currentIndex, newIndex) {
                    form.validate().settings.ignore = ":disabled,:hidden";
                    return form.valid();
                },
                onFinishing: function (event, currentIndex) {
                    form.validate().settings.ignore = ":disabled";
                    return form.valid();
                },
                onFinished: function (event, currentIndex) {
                    alert("Submitted!");
                }
            });

            // Advance Example

            var form = $("#example-advanced-form").show();

            form.steps({
                headerTag: "h3",
                bodyTag: "fieldset",
                transitionEffect: "slideLeft",
                onStepChanging: function (event, currentIndex, newIndex) {
                    // Allways allow previous action even if the current form is not valid!
                    if (currentIndex > newIndex) {
                        return true;
                    }
                    // Forbid next action on "Warning" step if the user is to young
                    if (newIndex === 3 && Number($("#age-2").val()) < 18) {
                        return false;
                    }
                    // Needed in some cases if the user went back (clean up)
                    if (currentIndex < newIndex) {
                        // To remove error styles
                        form.find(".body:eq(" + newIndex + ") label.error").remove();
                        form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
                    }
                    form.validate().settings.ignore = ":disabled,:hidden";
                    return form.valid();
                },
                onStepChanged: function (event, currentIndex, priorIndex) {
                    // Used to skip the "Warning" step if the user is old enough.
                    if (currentIndex === 2 && Number($("#age-2").val()) >= 18) {
                        form.steps("next");
                    }
                    // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
                    if (currentIndex === 2 && priorIndex === 3) {
                        form.steps("previous");
                    }
                },
                onFinishing: function (event, currentIndex) {
                    form.validate().settings.ignore = ":disabled";
                    return form.valid();
                },
                onFinished: function (event, currentIndex) {
                    alert("Submitted!");
                }
            }).validate({
                errorPlacement: function errorPlacement(error, element) {
                    element.before(error);
                },
                rules: {
                    confirm: {
                        equalTo: "#password-2"
                    }
                }
            });

            // Dynamic Manipulation
            $("#example-manipulation").steps({
                headerTag: "h3",
                bodyTag: "section",
                enableAllSteps: true,
                enablePagination: false
            });

            //Vertical Steps

            $("#example-vertical").steps({
                headerTag: "h3",
                bodyTag: "section",
                transitionEffect: "slideLeft",
                stepsOrientation: "vertical"
            });

            //Custom design form example
            $(".tab-wizard").steps({
                headerTag: "h6",
                bodyTag: "section",
                transitionEffect: "fade",
                titleTemplate: '<span class="step">#index#</span> #title#',
                labels: {
                    finish: "Submit"
                },
                onFinished: function (event, currentIndex) {
                    swal("Form Submitted!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");

                }
            });


            var form = $(".validation-wizard").show();

            $(".validation-wizard").steps({
                headerTag: "h6",
                bodyTag: "section",
                transitionEffect: "fade",
                titleTemplate: '<span class="step">#index#</span> #title#',
                labels: {
                    finish: "Submit"
                },
                onStepChanging: function (event, currentIndex, newIndex) {
                    return currentIndex > newIndex || !(3 === newIndex && Number($("#age-2").val()) < 18) && (currentIndex < newIndex && (form.find(".body:eq(" + newIndex + ") label.error").remove(), form.find(".body:eq(" + newIndex + ") .error").removeClass("error")), form.validate().settings.ignore = ":disabled,:hidden", form.valid())
                },
                onFinishing: function (event, currentIndex) {
                    return form.validate().settings.ignore = ":disabled", form.valid()
                },
                onFinished: function (event, currentIndex) {
                    swal("Form Submitted!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");
                }
            }), $(".validation-wizard").validate({
                ignore: "input[type=hidden]",
                errorClass: "text-danger",
                successClass: "text-success",
                highlight: function (element, errorClass) {
                    $(element).removeClass(errorClass)
                },
                unhighlight: function (element, errorClass) {
                    $(element).removeClass(errorClass)
                },
                errorPlacement: function (error, element) {
                    error.insertAfter(element)
                },
                rules: {
                    email: {
                        email: !0
                    }
                }
            })

        </script>
        @stack('js')
    </body>

</html>
