<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'company_id',
        'title',
        'description',
        'role',
        'openings',
        'job_type',
        'salary',
        'job_working_type',
        'locations',
        'incentive',
        'interview_type',
        'perks',
        'skills',
        'min_qualification',
        'gender',
        'experience',
        'security',
        'job_expiry_date',
        'status',
    ];

    protected $casts = [
        'job_type' => 'array',
        'salary' => 'object',
        'locations' => 'object',
        'incentive' => 'object',
        'perks' => 'array',
        'skills' => 'array',
        'experience' => 'object',
        'security' => 'object',
    ];

    /**
     * role
     *
     * @return void
     */
    public function role()
    {
        return $this->belongsTo(JobRole::class);
    }

    /**
     * @company
     *
     * @return void
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
