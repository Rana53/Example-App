<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class messangerBanner extends Component
{
    public $msg;
    public $class;

    public function __construct($_msg, $_class)
    {
        $this->msg = $_msg;
        $this->class = $_class;
        
    } 

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.messanger-banner');
    }
}
