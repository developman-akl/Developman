<?php

namespace App\Http\Livewire\Sections;

use Livewire\Component;

class Projects extends Component
{
    public $allProjects;

    public function mount()
    {
        // $this->allProjects = NewsModel::with('media')->aktiv()->orderByDesc('created_at')->get();
    }

    public function render()
    {
        return view('livewire.sections.projects');
    }
}