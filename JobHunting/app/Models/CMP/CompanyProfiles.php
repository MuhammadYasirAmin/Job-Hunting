<?php

namespace App\Models\CMP;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyProfiles extends Model
{
    use HasFactory;
    // protected $table = [];
    protected $table = 'company_profiles';

    public function jobs()
    {
        return $this->hasMany(JobPosted::class, 'CMP_ID');
    }

    public function employee()
    {
        return $this->belongsTo(Employer::class, 'EMP_ID');
    }
}
