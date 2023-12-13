<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class description extends Component
{
    public $titleone;
    public $titletwo;
    public $titlethree;
    public $titlefour;
    public $descriptionone;
    public $descriptiontwo;
    public $descriptionthree;
    /**
     * Create a new component instance.
     */
    public function __construct($titleone, $titletwo, $descriptionone,$descriptiontwo, $titlethree, $titlefour, $descriptionthree )
    {
        $this->titleone = $titleone;
        $this->titletwo = $titletwo;
        $this->titlethree = $titlethree;
        $this->titlefour = $titlefour;
        $this->descriptionone = $descriptionone;
        $this->descriptiontwo = $descriptiontwo;
        $this->descriptionthree = $descriptionthree;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.description');
    }
}
