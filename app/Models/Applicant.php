<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model {
    use HasFactory;

    protected $guarded = [''];

    static function ListKey():array
    {
        return ['zone','zone_code','email','institute','department','applicant_name','primary_mobile', 'mobile_02','gender','religion',
            'blood_group', 'nid','disabilities','father_name','father_living_status','father_disability','mother_name','mother_living_status','mother_disability',
            'other_disability','guardian_number', 'thana_police_station','district', 'school','college','monthly_income','monthly_expense',
            'family_asset','family_monthly_income','hsc_year','hsc_result','ssc_result','older_age','class1to8','class9to12_hifj',
            'undergrad','justification','image','is_processed','total_mark','created_at'];
    }
    public  function checkIfExist(){

    }
    public function sscResult(): Attribute {
        return new Attribute(get:fn($value) => (float) $value);
    }
    public function hscResult(): Attribute {
        return new Attribute(get:fn($value) => (float) $value);
    }
}
