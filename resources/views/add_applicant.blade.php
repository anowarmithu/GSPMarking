@extends('Backend.master')
@section('header_title','Create Employee')
@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush
@section('title','Application Form | GSP')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('applicant.store') }}" method="POST" accept-charset="utf-8">
                @csrf
                <div class="row">
                    <!-- applicant_name -->
                    <div class="form-group col-md-3">
                        <label for="applicant_name">Applicant Name</label>
                        <input type="text" class="form-control" id="applicant_name" name="applicant_name"
                               placeholder="applicant name" value="{{ old('applicant_name') }}">
                        @if($errors->has('applicant_name'))
                            <div class="text-danger">{{ $errors->first('applicant_name') }}</div>
                        @endif
                    </div>
                    <!-- primary_mobile -->
                    <div class="form-group col-md-3">
                        <label for="primary_mobile">Primary Mobile</label>
                        <input type="number" class="form-control" id="primary_mobile" name="primary_mobile"
                               placeholder="primary mobile" value="{{ old('primary_mobile') }}">
                        @if($errors->has('primary_mobile'))
                            <div class="text-danger">{{ $errors->first('primary_mobile') }}</div>
                        @endif
                    </div>
                    <!-- mobile_02 -->
                    <div class="form-group col-md-3">
                        <label for="mobile_02">Applicant Mobile 02</label>
                        <input type="number" class="form-control" id="mobile_02" name="mobile_02"
                               placeholder="secondery mobile" value="{{ old('mobile_02') }}">
                        @if($errors->has('mobile_02'))
                            <div class="text-danger">{{ $errors->first('mobile_02') }}</div>
                        @endif
                    </div>
                    <!-- email -->
                    <div class="form-group col-md-3">
                        <label for="email">Applicant Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="email"
                               value="{{ old('email') }}">
                        @if($errors->has('email'))
                            <div class="text-danger">{{ $errors->first('email') }}</div>
                        @endif
                    </div>
                    <!-- genders -->
                    <div class="form-group col-md-3">
                        <label for="gender">Gender</label>
                        <select id="gender" class="form-control" name="gender" value="{{ old('gender') }}">
                            <option selected>Select</option>
                            @foreach ($data['genders'] as $item)
                                <option
                                    value="{{ $item }}" {{ old('gender') === $item ? 'selected' : '' }}>{{ $item }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('gender'))
                            <div class="text-danger">{{ $errors->first('gender') }}</div>
                        @endif
                    </div>
                    <!-- religions -->
                    <div class="form-group col-md-3">
                        <label for="religion">Religion</label>
                        <select id="religion" class="form-control" name="religion" value="{{ old('religion') }}">
                            <option selected>Select</option>
                            @foreach ($data['religions'] as $item)
                                <option
                                    value="{{ $item }}" {{ old('religion') === $item ? 'selected' : '' }}>{{ $item }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('religion'))
                            <div class="text-danger">{{ $errors->first('religion') }}</div>
                        @endif
                    </div>
                    <!-- blood_groups -->
                    <div class="form-group col-md-3">
                        <label for="blood_group">Blood Group</label>
                        <select id="blood_group" class="form-control" name="blood_group"
                                value="{{ old('blood_group') }}">
                            <option selected>Select</option>
                            @foreach ($data['blood_groups'] as $item)
                                <option
                                    value="{{ $item }}" {{ old('blood_group') === $item ? 'selected' : '' }}>{{ $item }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('blood_group'))
                            <div class="text-danger">{{ $errors->first('blood_group') }}</div>
                        @endif
                    </div>
                    <!-- disabilities -->
                    <div class="form-group col-md-3">
                        <label for="disabilities">Applicant Disabilities</label>
                        <select id="disabilities" class="form-control" name="disabilities"
                                value="{{ old('disabilities') }}">
                            <option selected>Select</option>
                            @foreach ($data['disabilities'] as $item)
                                <option
                                    value="{{ $item }}" {{ old('disabilities') === $item ? 'selected' : '' }}>{{ $item }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('disabilities'))
                            <div class="text-danger">{{ $errors->first('disabilities') }}</div>
                        @endif
                    </div>
                    <!-- institute -->
                    <div class="form-group col-md-4">
                        <label for="institute">Institute Name</label>
                        <input type="text" class="form-control" id="institute" name="institute"
                               placeholder="institute name" value="{{ old('institute') }}">
                        @if($errors->has('institute'))
                            <div class="text-danger">{{ $errors->first('institute') }}</div>
                        @endif
                    </div>
                    <!-- department -->
                    <div class="form-group col-md-3">
                        <label for="department">Department</label>
                        <input type="text" class="form-control" id="department" name="department"
                               placeholder="department" value="{{ old('department') }}">
                        @if($errors->has('department'))
                            <div class="text-danger">{{ $errors->first('department') }}</div>
                        @endif
                    </div>
                    <!-- zones -->
                    <div class="form-group col-md-3">
                        <label for="zone">GSP Zone</label>
                        <select id="zone" class="form-control" name="zone" value="{{ old('zone') }}">
                            <option selected>Select</option>
                            @foreach ($data['zones'] as $item)
                                <option
                                    value="{{ $item }}" {{ old('zone') === $item ? 'selected' : '' }}>{{ $item }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('zone'))
                            <div class="text-danger">{{ $errors->first('zone') }}</div>
                        @endif
                    </div>
                    <!-- zone_code -->
                    <div class="form-group col-md-2">
                        <label for="zone_code">Zone Code</label>
                        <input type="text" class="form-control" id="zone_code" name="zone_code" placeholder="zone code"
                               value="{{ old('zone_code') }}">
                        @if($errors->has('zone_code'))
                            <div class="text-danger">{{ $errors->first('zone_code') }}</div>
                        @endif
                    </div>
                    <!-- father_name -->
                    <div class="form-group col-md-4">
                        <label for="father_name">Father Name</label>
                        <input type="text" class="form-control" id="father_name" name="father_name"
                               placeholder="father name" value="{{ old('father_name') }}">
                        @if($errors->has('father_name'))
                            <div class="text-danger">{{ $errors->first('father_name') }}</div>
                        @endif
                    </div>
                    <!-- father_living_status -->
                    <div class="form-group col-md-3">
                        <label for="father_living_status">Father Living Status</label>
                        <select id="father_living_status" class="form-control" name="father_living_status"
                                value="{{ old('father_living_status') }}">
                            <option selected>Select</option>
                            @foreach ($data['living_statuses'] as $item)
                                <option
                                    value="{{ $item }}" {{ old('father_living_status') === $item ? 'selected' : '' }}>{{ $item }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('father_living_status'))
                            <div class="text-danger">{{ $errors->first('father_living_status') }}</div>
                        @endif
                    </div>
                    <!-- father_disability -->
                    <div class="form-group col-md-3">
                        <label for="father_disability">Father Disability</label>
                        <select id="father_disability" class="form-control" name="father_disability"
                                value="{{ old('father_disability') }}">
                            <option selected>Select</option>
                            @foreach ($data['disabilities'] as $item)
                                <option
                                    value="{{ $item }}" {{ old('father_disability') === $item ? 'selected' : '' }}>{{ $item }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('father_disability'))
                            <div class="text-danger">{{ $errors->first('father_disability') }}</div>
                        @endif
                    </div>
                    <!-- nid -->
                    <div class="form-group col-md-2">
                        <label for="nid">Applicant NID</label>
                        <input type="text" class="form-control" id="nid" name="nid"
                               placeholder="nid" value="{{ old('nid') }}">
                        @if($errors->has('nid'))
                            <div class="text-danger">{{ $errors->first('nid') }}</div>
                        @endif
                    </div>
                    <!-- mother_name -->
                    <div class="form-group col-md-4">
                        <label for="mother_name">Mother Name</label>
                        <input type="text" class="form-control" id="mother_name" name="mother_name"
                               placeholder="mother name" value="{{ old('mother_name') }}">
                        @if($errors->has('mother_name'))
                            <div class="text-danger">{{ $errors->first('mother_name') }}</div>
                        @endif
                    </div>
                    <!-- mother_living_status -->
                    <div class="form-group col-md-3">
                        <label for="mother_living_status">Mother Living Status</label>
                        <select id="mother_living_status" class="form-control" name="mother_living_status"
                                value="{{ old('mother_living_status') }}">
                            <option selected>Select</option>
                            @foreach ($data['living_statuses'] as $item)
                                <option
                                    value="{{ $item }}" {{ old('mother_living_status') === $item ? 'selected' : '' }}>{{ $item }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('mother_living_status'))
                            <div class="text-danger">{{ $errors->first('mother_living_status') }}</div>
                        @endif
                    </div>
                    <!-- mother_disability -->
                    <div class="form-group col-md-3">
                        <label for="mother_disability">Mother Disability</label>
                        <select id="mother_disability" class="form-control" name="mother_disability"
                                value="{{ old('mother_disability') }}">
                            <option selected>Select</option>
                            @foreach ($data['disabilities'] as $item)
                                <option
                                    value="{{ $item }}" {{ old('mother_disability') === $item ? 'selected' : '' }}>{{ $item }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('mother_disability'))
                            <div class="text-danger">{{ $errors->first('mother_disability') }}</div>
                        @endif
                    </div>
                    <!-- guardian_number -->
                    <div class="form-group col-md-2">
                        <label for="guardian_number">Guardian Mobile Number</label>
                        <input type="text" class="form-control" id="guardian_number" name="guardian_number"
                               placeholder="0" value="{{ old('guardian_number') }}">
                        @if($errors->has('guardian_number'))
                            <div class="text-danger">{{ $errors->first('guardian_number') }}</div>
                        @endif
                    </div>
                    <!-- Justification -->
                    <div class="form-group col-md-6">
                        <label for="justification">Justification</label>
                        <textarea class="form-control" id="justification" name="justification" placeholder="type here.."
                                  value="{{ old('justification') }}"></textarea>
                        @if($errors->has('justification'))
                            <div class="text-danger">{{ $errors->first('justification') }}</div>
                        @endif
                    </div>
                    <!-- other_disability -->
                    <div class="form-group col-md-3">
                        <label for="other_disability"># of Other Disability</label>
                        <input type="name" class="form-control" id="other_disability" name="other_disability"
                               placeholder="0" value="{{ old('other_disability') }}">
                        @if($errors->has('other_disability'))
                            <div class="text-danger">{{ $errors->first('other_disability') }}</div>
                        @endif
                    </div>
                    <!-- thana_police_station -->
                    <div class="form-group col-md-3">
                        <label for="thana_police_station">Thana</label>
                        <input type="name" class="form-control" id="thana_police_station" name="thana_police_station"
                               placeholder="Applicant Thana or Upazilla" value="{{ old('thana_police_station') }}">
                        @if($errors->has('thana_police_station'))
                            <div class="text-danger">{{ $errors->first('thana_police_station') }}</div>
                        @endif
                    </div>
                    <!-- district -->
                    <div class="form-group col-md-3">
                        <label for="district">Applicant Home District</label>
                        <input type="name" class="form-control" id="district" name="district" placeholder="district"
                               value="{{ old('district') }}">
                        @if($errors->has('district'))
                            <div class="text-danger">{{ $errors->first('district') }}</div>
                        @endif
                    </div>
                    <!-- school -->
                    <div class="form-group col-md-3">
                        <label for="school">School Name</label>
                        <input type="name" class="form-control" id="school" name="school" placeholder="School"
                               value="{{ old('school') }}">
                        @if($errors->has('school'))
                            <div class="text-danger">{{ $errors->first('school') }}</div>
                        @endif
                    </div>
                    <!-- college -->
                    <div class="form-group col-md-3">
                        <label for="college">College Name</label>
                        <input type="name" class="form-control" id="college" name="college" placeholder="College"
                               value="{{ old('college') }}">
                        @if($errors->has('college'))
                            <div class="text-danger">{{ $errors->first('college') }}</div>
                        @endif
                    </div>
                    <!-- monthly_income -->
                    <div class="form-group col-md-3">
                        <label for="monthly_income">Monthly Income</label>
                        <input type="name" class="form-control" id="monthly_income" name="monthly_income"
                               placeholder="0" value="{{ old('monthly_income') }}">
                        @if($errors->has('monthly_income'))
                            <div class="text-danger">{{ $errors->first('monthly_income') }}</div>
                        @endif
                    </div>
                    <!-- monthly_expense -->
                    <div class="form-group col-md-3">
                        <label for="monthly_expense">Monthly Expense</label>
                        <input type="name" class="form-control" id="monthly_expense" name="monthly_expense"
                               placeholder="0" value="{{ old('monthly_expense') }}">
                        @if($errors->has('monthly_expense'))
                            <div class="text-danger">{{ $errors->first('monthly_expense') }}</div>
                        @endif
                    </div>
                    <!-- family_asset -->
                    <div class="form-group col-md-3">
                        <label for="family_asset">Family Asset</label>
                        <input type="name" class="form-control" id="family_asset" name="family_asset"
                               placeholder="0" value="{{ old('family_asset') }}">
                        @if($errors->has('family_asset'))
                            <div class="text-danger">{{ $errors->first('family_asset') }}</div>
                        @endif
                    </div>
                    <!-- family_monthly_income -->
                    <div class="form-group col-md-3">
                        <label for="family_monthly_income">Family Monthly Income</label>
                        <input type="name" class="form-control" id="family_monthly_income" name="family_monthly_income"
                               placeholder="0" value="{{ old('family_monthly_income') }}">
                        @if($errors->has('family_monthly_income'))
                            <div class="text-danger">{{ $errors->first('family_monthly_income') }}</div>
                        @endif
                    </div>
                    <!-- hsc_year -->
                    <div class="form-group col-md-3">
                        <label for="hsc_year">HSC Year</label>
                        <input type="name" class="form-control" id="hsc_year" name="hsc_year" placeholder="2020"
                               value="{{ old('hsc_year') }}">
                        @if($errors->has('hsc_year'))
                            <div class="text-danger">{{ $errors->first('hsc_year') }}</div>
                        @endif
                    </div>
                    <!-- hsc_result -->
                    <div class="form-group col-md-3">
                        <label for="hsc_result">HSC Result</label>
                        <input type="name" class="form-control" id="hsc_result" name="hsc_result"
                               placeholder="5.00" value="{{ old('hsc_result') }}">
                        @if($errors->has('hsc_result'))
                            <div class="text-danger">{{ $errors->first('hsc_result') }}</div>
                        @endif
                    </div>
                    <!-- ssc_result -->
                    <div class="form-group col-md-3">
                        <label for="ssc_result">SSC Result</label>
                        <input type="name" class="form-control" id="ssc_result" name="ssc_result"
                               placeholder="5.00" value="{{ old('ssc_result') }}">
                        @if($errors->has('ssc_result'))
                            <div class="text-danger">{{ $errors->first('ssc_result') }}</div>
                        @endif
                    </div>
                    <!-- older_age -->
                    <div class="form-group col-md-3">
                        <label for="older_age"># of member 65+</label>
                        <input type="name" class="form-control" id="older_age" name="older_age" placeholder="0"
                               value="{{ old('older_age') }}">
                        @if($errors->has('older_age'))
                            <div class="text-danger">{{ $errors->first('older_age') }}</div>
                        @endif
                    </div>
                    <!-- class1to8 -->
                    <div class="form-group col-md-3">
                        <label for="class1to8"># of member Class I-VIII</label>
                        <input type="name" class="form-control" id="class1to8" name="class1to8" placeholder="0"
                               value="{{ old('class1to8') }}">
                        @if($errors->has('class1to8'))
                            <div class="text-danger">{{ $errors->first('class1to8') }}</div>
                        @endif
                    </div>
                    <!-- class9to12_hifj -->
                    <div class="form-group col-md-3">
                        <label for="class9to12_hifj"># of member Class IX-XII, Hifj, Diploma</label>
                        <input type="name" class="form-control" id="class9to12_hifj" name="class9to12_hifj"
                               placeholder="0" value="{{ old('class9to12_hifj') }}">
                        @if($errors->has('class9to12_hifj'))
                            <div class="text-danger">{{ $errors->first('class9to12_hifj') }}</div>
                        @endif
                    </div>
                    <!-- undergrad -->
                    <div class="form-group col-md-3">
                        <label for="undergrad"># of member undergrad</label>
                        <input type="name" class="form-control" id="undergrad" name="undergrad" placeholder="0"
                               value="{{ old('undergrad') }}">
                        @if($errors->has('undergrad'))
                            <div class="text-danger">{{ $errors->first('undergrad') }}</div>
                        @endif
                    </div>
                </div>
                <br>
                <hr>
                <button type="submit" class="btn btn-primary">Submit Application</button>
            </form>
        </div>
    </div>
@endsection


@push('script')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr("#due_date", {enableTime: true, dateFormat: "Y-m-d H:i",});
        flatpickr("#duration", {
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            minTime: "00:00",
            time_24hr: true
        });
    </script>
@endpush
