<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model {
    use HasFactory;

    public function sscResult(): Attribute {
        return new Attribute(get:fn($value) => (float) $value);
    }
    public function hscResult(): Attribute {
        return new Attribute(get:fn($value) => (float) $value);
    }
}
