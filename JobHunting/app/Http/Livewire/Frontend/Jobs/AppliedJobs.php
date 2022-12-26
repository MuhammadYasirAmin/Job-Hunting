<?php

namespace App\Http\Livewire\Frontend\Jobs;

use Livewire\Component;

use Illuminate\Http\Request;

use App\Models\CMP\JobPosted;

class AppliedJobs extends Component
{
    public function render(Request $request)
    {
        $JOB_ID = $request->JOB_ID;
        $JobsList = JobPosted::with(["job_questions", "subjective"])->where('id', $JOB_ID)->first();
        // dd($JobsList);
        return view('livewire.frontend.jobs.applied-jobs', compact('JobsList'))->layout('layouts.main');
    }
}
