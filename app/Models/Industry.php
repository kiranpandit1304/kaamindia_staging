<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Industry extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name', 'description',
    ];

    public function company()
    {
        return $this->belongsToMany(Company::class, 'company_industries', 'industry_id', 'company_id');
    }
}
