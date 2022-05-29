<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{

    public function index()
    {
        $data = Applicant::all();
        // dd($data);
        // dd('aaaaaaaaaaaa', $item, $total_mark);
        return view('applicants', compact('data'));
    }

    public function create()
    {
        return view('add_applicant');
    }


    public function store(Request $request)
    {
        //
    }

    public function show(Applicant $applicant)
    {
        //
    }

    public function edit(Applicant $applicant)
    {
        //
    }

    public function update(Request $request, Applicant $applicant)
    {
        //
    }

    public function destroy(Applicant $applicant)
    {
        //
    }
}
