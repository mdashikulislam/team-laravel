@extends('frontend.auth.auth')
@section('title')
    <title>{{getenv('APP_NAME')}} - {{ __('Register') }} </title>
@endsection
@section('content')
    <div class="col-xl-12">
        <div class="auth-form">
            <h4 class="text-center mb-4">Register your account</h4>
            <form action="#" id="step-form-horizontal" class="step-form-horizontal">
                <div>
                    <h4>Personal Info</h4>
                    <section>
                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <div class="form-group">
                                    <label class="text-label">Club Name : </label>
                                    <input type="text" name="club_name" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-4">
                                <div class="form-group">
                                    <label class="text-label">Locality : </label>
                                    <input type="text" name="locality" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </section>
                    <h4>Company Info</h4>
                    <section>
                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <div class="form-group">
                                    <label class="text-label">Team Name :</label>
                                    <input type="text" name="team_name" class="form-control" placeholder="Team Name" required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-4">
                                <div class="form-group">
                                    <label class="text-label">Current Age Gap : </label>
                                    <select required name="current_age_gap" class="form-control">
                                        <option value="">Select Age Gap</option>
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-lg-12 mb-4">
                                <div class="form-group">
                                    <label class="text-label">Group Gender : </label>
                                    <select required name="group_gender" class="form-control">
                                        {!! getGenderDropdown() !!}
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-4">
                                <div class="form-group">
                                    <label class="text-label">Home Kit Color :</label>
                                    <input type="text" name="home_kit" class="form-control" placeholder="Home Kit Color" required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-4">
                                <div class="form-group">
                                    <label class="text-label">Away Kit Color :</label>
                                    <input  type="text" name="away_kit" class="form-control" placeholder="Away Kit Color" required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-4">
                                <div class="form-group">
                                    <label class="text-label">Training Kit Color :</label>
                                    <input type="text" name="training_kit" class="form-control" placeholder="Training Kit Color" required>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </form>
            <div class="new-account mt-3">
                <p>Already have an account? <a class="text-primary" href="{{route('login')}}">Sign in</a></p>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{asset('js/step.js')}}"></script>
    <script src="{{asset('js/validate.js')}}"></script>
    <script>
        var form = $("#step-form-horizontal");
        form.children('div').steps({
            headerTag: "h4",
            bodyTag: "section",
            transitionEffect: "fade",
            titleTemplate: '<span class="number">#index#</span>',
            onStepChanging: function (event, currentIndex, newIndex)
            {
                form.validate().settings.ignore = ":disabled,:hidden";
                return form.valid();
            },
            onFinishing: function (event, currentIndex)
            {
                form.validate().settings.ignore = ":disabled";
                return form.valid();
            },
            onFinished:function (event,currentIndex){
                $('#step-form-horizontal').submit();
            }
        });
    </script>
@endpush
@push('css')
    <link href="{{asset('vendor/jquery-steps/css/jquery.steps.css')}}" rel="stylesheet">
@endpush
