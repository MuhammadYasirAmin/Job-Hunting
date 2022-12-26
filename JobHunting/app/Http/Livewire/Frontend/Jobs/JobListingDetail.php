<?php

namespace App\Http\Livewire\Frontend\Jobs;

use Livewire\Component;
use Illuminate\Http\Request;

use App\Models\CMP\CompanyProfiles;

class JobListingDetail extends Component
{
    public function render(Request $request)
    {
        $EMP_ID = $request->id;
        $JobsList = CompanyProfiles::with(["jobs", "job_questions", "requirements", "responsibilites"])->where('id', $EMP_ID)->first();
        // dd($JobsList->toArray());
        // $JobsList = $Jobs->toArray();

        return view('livewire.frontend.jobs.job-listing-detail', compact('JobsList'))->layout('layouts.main');
    }
}
