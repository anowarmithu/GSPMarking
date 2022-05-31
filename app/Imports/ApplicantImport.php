<?php

namespace App\Imports;

use App\Models\Applicant;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ApplicantImport implements ToModel,WithHeadingRow,SkipsOnError
{
    use Importable,SkipsErrors;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Applicant([
            //
            'zone' =>$row['zone'],
            'zone_code' =>$row['zone_code'],
            'email' =>$row['email'] ?: null,
            'institute' =>$row['institute'],
            'department' =>$row['department'],
            'applicant_name' =>$row['applicant_name'],
            'primary_mobile' =>$row['primary_mobile'],
            'mobile_02' =>$row['mobile_02'] ?: null,
            'gender' =>$row['gender'],
            'religion' =>$row['religion'],
            'blood_group' =>$row['blood_group'],
            'nid' =>$row['nid'] ?: null,
            'disabilities' =>$row['disabilities'],
            'father_name' =>$row['father_name'],
            'father_living_status' =>$row['father_living_status'] ?: 'Alive',
            'father_disability' =>$row['father_disability'],
            'mother_name' =>$row['mother_name'],
            'mother_living_status' =>$row['mother_living_status'] ?: 'Alive',
            'mother_disability' =>$row['mother_disability'],
            'other_disability' =>$row['other_disability'] ?: 0,
            'guardian_number' =>$row['guardian_number'] ?: null,
            'thana_police_station' =>$row['thana_police_station'],
            'district' =>$row['district'],
            'school' =>$row['school'] ?: null,
            'college' =>$row['college'] ?: null,
            'monthly_income' =>$row['monthly_income'],
            'monthly_expense' =>$row['monthly_expense'],
            'family_asset' =>$row['family_asset'],
            'family_monthly_income' =>$row['family_monthly_income'],
            'hsc_year' =>$row['hsc_year'],
            'hsc_result' =>$row['hsc_result'],
            'ssc_result' =>$row['ssc_result'],
            'older_age' =>$row['older_age'],
            'class1to8' =>$row['class1to8'],
            'class9to12_hifj' =>$row['class9to12_hifj'],
            'undergrad' =>$row['undergrad'],
            'justification' =>$row['justification'] ?: null,
            'image' =>$row['image'] ?: null,
            'is_processed' =>0,
            'total_mark' =>$row['total_mark'],
            'created_at'=>Carbon::now()
        ]);
    }
}
