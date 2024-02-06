<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class navbar extends Component
{
    public $navbarData;

    public function __construct($navbarData)
    {
        $this->navbarData = $navbarData;
    }

    public function render(): View|Closure|string
    {
        return view('components.navbar');
    }
}
