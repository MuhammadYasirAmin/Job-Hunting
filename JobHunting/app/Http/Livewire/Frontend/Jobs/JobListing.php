<?php

namespace App\Http\Livewire\Frontend\Jobs;

use Livewire\Component;
use App\Models\CMP\CompanyProfiles;

class JobListing extends Component
{
    public function render()
    {
        $Jobs = CompanyProfiles::with("jobs", "job_questions")->get();
        $JobsList = $Jobs->toArray();
        // dd($JobsList->toArray());

        return view('livewire.frontend.jobs.job-listing', compact('JobsList'))->layout('layouts.main');
    }
}
