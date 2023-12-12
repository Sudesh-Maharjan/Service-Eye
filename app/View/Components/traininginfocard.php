<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class traininginfocard extends Component
{
    public $title;
    public $date;
    /**
     * Create a new component instance.
     */
    public function __construct($title, $date)
    {
        //
        $this->title = $title;
        $this->date = $date;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.traininginfocard');
    }
}
