<?php

namespace App\Http\Livewire\Frontend\Jobs;

use Livewire\Component;
use App\Models\CMP\CompanyProfiles;

class JobListing extends Component
{
    public function render()
    {
        $JobsList = CompanyProfiles::with("jobs", "job_questions")->get();
        // dd($JobsList);

        return view('livewire.frontend.jobs.job-listing')->layout('layouts.main')->with(['JobsList' => $JobsList]);
    }
}
