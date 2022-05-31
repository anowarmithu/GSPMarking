<?php

namespace App\Exports;

use App\Models\Applicant;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ApplicantExport implements FromCollection ,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Applicant::all()->except('id');
    }

    public function headings():array
    {
        return Applicant::ListKey();
        /*return [
            'Id',
            'zone',
            'zone_code',
            'email',
            'institute',
            'department',
            'applicant_name',
            'primary_mobile',
            'mobile_02',
            'gender',
            'religion',
            'blood_group',
            'nid',
            'disabilities',
            'father_name',
            'father_living_status',
            'father_disability',
            'mother_name',
            'mother_living_status',
            'mother_disability',
            'other_disability',
            'guardian_number',
            'thana_police_station',
            'district',
            'school',
            'college',
            'monthly_income',
            'monthly_expense',
            'family_asset',
            'family_monthly_income',
            'hsc_year',
            'hsc_result',
            'ssc_result',
            'older_age',
            'class1to8',
            'class9to12_hifj',
            'undergrad',
            'justification',
            'image',
            'is_processed',
            'total_mark',
            'created_at'
        ];*/
    }
}
