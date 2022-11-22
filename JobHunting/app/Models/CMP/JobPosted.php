<?php

namespace App\Models\CMP;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPosted extends Model
{
    use HasFactory;
    // protected $table = [];
    protected $table = 'job_posteds';

    public function company()
    {
        return $this->belongsTo(CompanyProfiles::class,);
    }

    public function employee()
    {
        return $this->belongsTo(Employer::class, 'EMP_ID');
    }
}
