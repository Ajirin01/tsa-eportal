<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $table = 'vacancy_applications';

    protected $fillable = [
        "applicant_name",
        "post_applying_for",
        "applicant_present_address",
        "applicant_age",
        "applicant_gender",
        "applicant_phone",
        "status",
        "form_data"
    ];
}
