<?php

namespace App\View\Components\servicios;

use Illuminate\View\Component;

class bannermaintransporte extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.servicios.bannermaintransporte');
    }
}