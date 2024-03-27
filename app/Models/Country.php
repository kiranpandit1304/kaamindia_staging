<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name', 'abbreviation', 'dial_code', 'flag',
    ];

    public function companyAddress()
    {
        return $this->belongsTo(CompanyAddress::class, 'id');
    }
}
