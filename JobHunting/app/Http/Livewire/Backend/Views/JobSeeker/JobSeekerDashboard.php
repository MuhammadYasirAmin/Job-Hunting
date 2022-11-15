<?php

namespace App\Http\Livewire\Backend\Views\JobSeeker;

use Livewire\Component;

class JobSeekerDashboard extends Component
{
    public function render()
    {
        return view('livewire.backend.views.job-seeker.job-seeker-dashboard')->layout('layouts.job-seeker');
    }
}
