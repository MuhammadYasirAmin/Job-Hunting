<?php

namespace App\Http\Livewire\Backend\Views\Company;

use Livewire\Component;

class CompanyDashboard extends Component
{
    public function render()
    {
        return view('livewire.backend.views.company.company-dashboard')->layout('layouts.admin-dash');
    }
}
