<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class project extends Component
{
    public $projectimages;
    /**
     * Create a new component instance.
     */
    public function __construct($projectimages)
    {
        $this->projectimages = $projectimages;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.project');
    }
}
