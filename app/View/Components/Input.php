<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class service extends Component
{
    public $heading;
    public $description;
    public $image;
    // public $description;
    /**
     * Create a new component instance.
     */
    public function __construct($heading, $description, $image)
    {
        $this->h2 = $heading;
        $this->p = $description;
        $this->p = $image;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.service');
    }
}
