@extends('Backend.master')
@section('title',$applicant->applicant_name.' | GSP')
@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
@endpush

@section('content')
    <div class="container emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="{{asset('images/avatar.jpg')}}" alt=""/>
                        <div class="file btn btn-lg btn-primary">
                            Change Photo
                            <input type="file" name="file"/>
                        </div>
                        <h5>
                            {{ $applicant->applicant_name }}
                        </h5>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="profile-head">
                        <div class="col-md-8">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Applicant Name</label>
                                        </div>
                                        <div class="col-md-8">
                                            <p>{{ $applicant->applicant_name }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Gender</label>
                                        </div>
                                        <div class="col-md-8">
                                            <p>{{ $applicant->gender }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>NID</label>
                                        </div>
                                        <div class="col-md-8">
                                            <p>{{ $applicant->nid }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-8">
                                            <p>{{ $applicant->email }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Phone</label>
                                        </div>
                                        <div class="col-md-8">
                                            <p>{{ $applicant->primary_mobile }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Religion</label>
                                        </div>
                                        <div class="col-md-8">
                                            <p>{{ $applicant->religion }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Blood Group</label>
                                        </div>
                                        <div class="col-md-8">
                                            <p>{{ $applicant->blood_group }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Institute</label>
                                        </div>
                                        <div class="col-md-8">
                                            <p>{{ $applicant->institute }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Department</label>
                                        </div>
                                        <div class="col-md-8">
                                            <p>{{ $applicant->department }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Disabilities</label>
                                        </div>
                                        <div class="col-md-8">
                                            <p>{{ $applicant->disabilities}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>School</label>
                                        </div>
                                        <div class="col-md-8">
                                            <p>{{ $applicant->school}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>College</label>
                                        </div>
                                        <div class="col-md-8">
                                            <p>{{ $applicant->college}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Monthly Income</label>
                                        </div>
                                        <div class="col-md-8">
                                            <p>{{ $applicant->monthly_income}}</p>
                                        </div>
                                    </div>

                                </div>
                        </div>
                        <div class="row">

                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
@endsection


@push('script')
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@endpush
