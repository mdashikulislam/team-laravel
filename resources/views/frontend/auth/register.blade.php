@extends('frontend.auth.auth')
@section('title')
    <title>{{getenv('APP_NAME')}} - {{ __('Register') }} </title>
@endsection
@section('content')
    <div class="col-xl-12">
        <div class="auth-form">
            <h4 class="text-center mb-4">Register your account</h4>
            <form action="{{route('register')}}" id="step-form-horizontal" method="post" class="step-form-horizontal">
                @csrf
                <div>
                    <h4>Club Info</h4>
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
                    <h4>Team Info</h4>
                    <section>
                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <div class="form-group">
                                    <label class="text-label">Team Name :</label>
                                    <input type="text" name="team_name" class="form-control"  required>
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
                                    <input type="text" name="home_kit" class="form-control"  required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-4">
                                <div class="form-group">
                                    <label class="text-label">Away Kit Color :</label>
                                    <input  type="text" name="away_kit" class="form-control"  required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-4">
                                <div class="form-group">
                                    <label class="text-label">Training Kit Color :</label>
                                    <input type="text" name="training_kit" class="form-control"  required>
                                </div>
                            </div>
                        </div>
                    </section>
                    <h4>Your Info</h4>
                    <section>
                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <div class="form-group">
                                    <label class="text-label">Your Name :</label>
                                    <input type="text" name="your_name" class="form-control"  required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-4">
                                <div class="form-group">
                                    <label class="text-label">Your Address :</label>
                                    <textarea  name="address" class="form-control"  required></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-4">
                                <div class="form-group">
                                    <label class="text-label">Town :</label>
                                    <input type="text" name="town" class="form-control"  required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-4">
                                <div class="form-group">
                                    <label class="text-label">Post Code :</label>
                                    <input type="text" name="post_code" class="form-control"  required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-4">
                                <div class="form-group">
                                    <label class="text-label">Home Mobile :</label>
                                    <input type="text" name="home_mobile" class="form-control"  required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-4">
                                <div class="form-group">
                                    <label class="text-label">Present Contact :</label>
                                    <input type="text" name="present_contact" class="form-control"  required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-4">
                                <div class="form-group">
                                    <label class="text-label">Email :</label>
                                    <input type="email" name="email" class="form-control"  required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-4">
                                <div class="form-group">
                                    <label class="text-label">Passeword :</label>
                                    <input type="password" name="password" class="form-control"  required>
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
                // return true;
            },
            onFinishing: function (event, currentIndex)
            {
                form.validate().settings.ignore = ":disabled";
                return form.valid();
                // return true;
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
