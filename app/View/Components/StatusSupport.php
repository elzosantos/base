<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StatusSupport extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        protected string $status
    )
    {
        //
    }

  
    public function render(): View|Closure|string
    { 
        $class = 'blue';
        $class = $this->status === 'C' ? 'gray' : $class;
        $class = $this->status === 'P' ? 'red' : $class;
        $textStatus = getStatusSupport($this->status);
        return view('components.status-support', compact('textStatus', 'class'));
    }
}
