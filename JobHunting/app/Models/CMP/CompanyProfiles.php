<?php

namespace App\Models\CMP;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Auth\Employer;


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
    /**
     * Get all of the job_questions for the JobPosted
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function job_questions()
    {
        return $this->hasMany(JobQuestions::class, 'JOB_ID');
    }
}
