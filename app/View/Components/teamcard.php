<?php
namespace App\View\Components;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
class teamcard extends Component
{
    /**
     * Create a new component instance.
     */
    public $name;
    public $position;
    public $qoute;
    public $timg;
    public $jobdes;
    public $interest;
    public $url;
    public function __construct($name, $position, $qoute, $timg, $jobdes, $interest, $url)
    {
        $this->name = $name;
        $this->position = $position;
        $this->qoute = $qoute;
        $this->timg = $timg;
        $this->jobdes = $jobdes;
        $this->interest = $interest;
        $this->url = $url;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.teamcard');
    }
}