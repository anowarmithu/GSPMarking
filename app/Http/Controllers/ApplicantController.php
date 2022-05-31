<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ApplicantController extends Controller {

    public function index() {
        $data = Applicant::all();
        // dd($data);
        // dd('aaaaaaaaaaaa', $item, $total_mark);
        return view('applicants', compact('data'));
    }

    public function create() {
        $data = [
            'genders'         => getGenders(),
            'religions'       => getReligions(),
            'blood_groups'    => getBloodGroups(),
            'disabilities'    => getDisabilities(),
            'zones'           => getZones(),
            'living_statuses' => getLivingStatuses(),
        ];
        return view('add_applicant', compact('data'));
    }

    public function store(Request $request) {
        $rules = [
            'applicant_name'        => ['required', 'string', 'max:190'],
            'primary_mobile'        => ['required', 'numeric'],
            'mobile_02'             => ['nullable', 'numeric'],
            'email'                 => ['nullable', 'email'],
            'gender'                => ['nullable', Rule::in(getGenders())],
            'religion'              => ['nullable', Rule::in(getReligions())],
            'blood_group'           => ['nullable', Rule::in(getBloodGroups())],
            'disabilities'          => ['nullable', Rule::in(getDisabilities())],
            'institute'             => ['nullable', 'string'],
            'zone'                  => ['required', Rule::in(getGenders())],
            'zone_code'             => ['nullable', 'numeric'],
            'father_name'           => ['required', 'string'],
            'father_living_status'  => ['required', Rule::in(getLivingStatuses())],
            'father_disability'     => ['required', Rule::in(getDisabilities())],
            'mother_name'           => ['required', 'string'],
            'mother_living_status'  => ['required', Rule::in(getLivingStatuses())],
            'mother_disability'     => ['required', Rule::in(getDisabilities())],
            'justification'         => ['nullable', 'string'],
            'other_disability'      => ['nullable', Rule::in(getDisabilities())],
            'thana_police_station'  => ['nullable', 'string'],
            'district'              => ['required', 'string'],
            'school'                => ['nullable', 'string'],
            'college'               => ['nullable', 'string'],
            'monthly_income'        => ['required', 'numeric'],
            'monthly_expense'       => ['required', 'numeric'],
            'family_asset'          => ['required', 'numeric'],
            'family_monthly_income' => ['required', 'numeric'],
            'hsc_year'              => ['nullable', 'numeric'],
            'hsc_result'            => ['required', 'numeric'],
            'ssc_result'            => ['required', 'numeric'],
            'older_age'             => ['required', 'numeric'],
            'class9to12_hifj'       => ['required', 'numeric'],
            'undergrad'             => ['required', 'numeric'],
            'class1to8'             => ['required', 'numeric'],
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect(route('applicant.create'))->withErrors($validator)->withInput();
        }

        dd($validator, $request->all());

    }

    public function show(Applicant $applicant) {
        return view('show', compact('applicant'));
    }

    public function edit(Applicant $applicant) {
        //
    }

    public function update(Request $request, Applicant $applicant) {
        //
    }

    public function destroy(Applicant $applicant) {
        //
    }
}
