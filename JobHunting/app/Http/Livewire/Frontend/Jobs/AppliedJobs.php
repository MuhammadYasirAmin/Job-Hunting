<?php

namespace App\Http\Livewire\Frontend\Jobs;

use Livewire\Component;

class AppliedJobs extends Component
{
    public function render()
    {
        return view('livewire.frontend.jobs.applied-jobs')->layout('layouts.main');
    }
}
