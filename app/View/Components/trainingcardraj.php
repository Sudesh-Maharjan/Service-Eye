<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class trainingcardraj extends Component
{
    public $coursename;
    public $coursedescription;
    public $months;
    public $image;
   

    /**
     * Create a new component instance.
     */
    public function __construct($coursename,$coursedescription,$months,$image)

    {
        $this->image=$image;
        $this->coursename=$coursename;
        $this->coursedescription=$coursedescription;
        $this->months=$months;



    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.trainingcardraj');
    }
}
