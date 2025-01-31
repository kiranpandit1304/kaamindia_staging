<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyIndustry extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_id', 'industry_id',
    ];
}
