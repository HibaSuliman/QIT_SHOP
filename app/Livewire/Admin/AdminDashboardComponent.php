<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;

class AdminDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-dashboard-component')->layout("livewire.layouts.base");
    }
}
