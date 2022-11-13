<?php

namespace App\Http\Livewire\Backend\Views\Admin;

use Livewire\Component;

class AdminDashboard extends Component
{
    public function render()
    {
        return view('livewire.backend.views.admin.admin-dashboard')->layout('layouts.admin-dash');
    }
}
