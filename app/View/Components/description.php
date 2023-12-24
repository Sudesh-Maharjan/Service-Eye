<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class description extends Component
{
    public $titleone;
    public $titletwo;
   
    /**
     * Create a new component instance.
     */
    public function __construct($titleone, $titletwo )
    {
        $this->titleone = $titleone;
        $this->titletwo = $titletwo;
      
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.description');
    }
}
