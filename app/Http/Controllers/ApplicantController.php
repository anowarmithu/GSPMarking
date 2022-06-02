<?php

namespace App\Http\Controllers;

use App\Exports\ApplicantExport;
use App\Imports\ApplicantImport;
use App\Models\Applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Facades\Excel;

class ApplicantController extends Controller
{

    public function index()
    {
        $data = Applicant::all();
        return view('applicants', compact('data'));
    }

    public function store(Request $request)
    {
        $rules = [
            'applicant_name' => ['required', 'string', 'max:190'],
            'primary_mobile' => ['required', 'numeric'],
            'mobile_02' => ['nullable', 'numeric'],
            'email' => ['nullable', 'email'],
            'gender' => ['required', Rule::in(getGenders())],
            'religion' => ['required', Rule::in(getReligions())],
            'blood_group' => ['required', Rule::in(getBloodGroups())],
            'disabilities' => ['required', Rule::in(getDisabilities())],
            'institute' => ['required', 'string'],
            'department' => ['required', 'string'],
            'zone' => ['required', Rule::in(getZones())],
            'zone_code' => ['required', 'numeric'],
            'father_name' => ['required', 'string'],
            'father_living_status' => ['required', Rule::in(getLivingStatuses())],
            'father_disability' => ['required', Rule::in(getDisabilities())],
            'mother_name' => ['required', 'string'],
            'mother_living_status' => ['required', Rule::in(getLivingStatuses())],
            'mother_disability' => ['required', Rule::in(getDisabilities())],
            'justification' => ['nullable', 'string'],
            'other_disability' => ['required', 'numeric'],
            'thana_police_station' => ['required', 'string'],
            'district' => ['required', 'string'],
            'nid' => ['nullable', 'string'],
            'guardian_number' => ['nullable', 'string'],
            'school' => ['nullable', 'string'],
            'college' => ['nullable', 'string'],
            'monthly_income' => ['required', 'numeric'],
            'monthly_expense' => ['required', 'numeric'],
            'family_asset' => ['required', 'numeric'],
            'family_monthly_income' => ['required', 'numeric'],
            'hsc_year' => ['required', 'numeric'],
            'hsc_result' => ['required', 'numeric'],
            'ssc_result' => ['required', 'numeric'],
            'older_age' => ['required', 'numeric'],
            'class9to12_hifj' => ['required', 'numeric'],
            'undergrad' => ['required', 'numeric'],
            'class1to8' => ['required', 'numeric'],
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect(route('applicant.create'))->withErrors($validator)->withInput();
        }

        dd(Applicant::create($validator->validated()));
    }

    public function create()
    {
        $data = [
            'genders' => getGenders(),
            'religions' => getReligions(),
            'blood_groups' => getBloodGroups(),
            'disabilities' => getDisabilities(),
            'zones' => getZones(),
            'living_statuses' => getLivingStatuses(),
        ];
        return view('add_applicant', compact('data'));
    }
    public function importApplicant(Request $request)
    {
        $request->validate([
            'file'=> 'required','mimes:csv'
        ]);
        $file = $request->file('file');

       try {
            $import=new ApplicantImport;
            $import->import($file);
        }
        catch(\Exception $e){
            return back()->withErrors($e->getMessage());
        }

        return back()->withStatus('Excel File imported successfully');
    }

    public function exportApplicant()
    {
//        $file= 'gsp_'.Carbon::now();
       return Excel::download(new ApplicantExport,  'gsp.xlsx');

    }
    public function show(Applicant $applicant)
    {
        return view('show', compact('applicant'));
    }

    public function edit(Applicant $applicant)
    {
        //
    }

    public function update(Request $request, Applicant $applicant)
    {
        //
    }
    public function deleteAll(){
        $data = Applicant::query()->delete();
        return back()->withStatus('All applicant delete successfully');
    }
    public function destroy(Applicant $applicant)
    {
        //
    }
}
