<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class bloginside extends Component
{
    public $blogtitle;
    public $image;
    public $blogdescription;
    public $update;
   

 
    public function __construct($blogtitle,$image,$blogdescription,$update)
    {
        $this->blogtitle=$blogtitle;
        $this->image=$image;
        $this->blogdescription=$blogdescription;
        $this->update=$update;

    }


    public function render(): View|Closure|string
    {
        return view('components.bloginside');
    }
}
