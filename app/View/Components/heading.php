<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class heading extends Component
{
    public $heading;
    /**
     * Create a new component instance.
     */
    public function __construct($heading)
    {
        $this->heading = $heading;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.heading');
    }
}
