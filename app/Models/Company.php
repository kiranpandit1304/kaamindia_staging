<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'name',
        'about',
        'email',
        'email_verified_at',
        'phone_number',
        'landline_number',
        'website',
        'social_links',
        'established_at',
        'company_size',
        'gst_number',
        'verification_document',
        'logo',
        'gallery',
        'status',
    ];

    public function companyAddress()
    {
        return $this->hasMany(CompanyAddress::class, 'company_id');
    }

    public function industries()
    {
        return $this->belongsToMany(Industry::class, 'company_industries', 'company_id', 'industry_id');
    }

    public function jobs()
    {
        return $this->belongsTo(Job::class);
    }
}
