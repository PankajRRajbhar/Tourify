<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{

    private $userName;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($userName)
    {
        $this->userName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header');
    }
}
