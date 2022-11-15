<?php

namespace App\Http\Livewire\Backend\Views\Employer;

use Livewire\Component;

class ManageJobs extends Component
{
    public function render()
    {
        return view('livewire.backend.views.employer.manage-jobs')->layout('layouts.employer');
    }
}
