<?php

namespace App\Http\Livewire\Frontend\Jobs;

use Livewire\Component;

use Illuminate\Http\Request;

use App\Models\CMP\JobPosted;

class AppliedJobs extends Component
{
    public function render(Request $request)
    {
        $EMP_ID = $request->JOB_ID;
        $JobsList = JobPosted::with(["job_questions"])->where('id', $EMP_ID)->first();
        // dd($JobsList);
        return view('livewire.frontend.jobs.applied-jobs', compact('JobsList'))->layout('layouts.main');
    }
}
