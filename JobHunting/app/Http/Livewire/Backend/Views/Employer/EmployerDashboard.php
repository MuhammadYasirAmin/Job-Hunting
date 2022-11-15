<?php

namespace App\Http\Livewire\Backend\Views\Employer;

use Livewire\Component;

class EmployerDashboard extends Component
{
    public function render()
    {
        return view('livewire.backend.views.employer.employer-dashboard')->layout('layouts.employer');
    }
}
