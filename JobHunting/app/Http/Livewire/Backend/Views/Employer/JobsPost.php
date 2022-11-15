<?php

namespace App\Http\Livewire\Backend\Views\Employer;

use Livewire\Component;

class JobsPost extends Component
{
    public function render()
    {
        return view('livewire.backend.views.employer.jobs-post')->layout('layouts.employer');
    }
}
