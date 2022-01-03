<?php

namespace App\View\Components\videoteca;

use Illuminate\View\Component;

class videoteca extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct()
    {
        //test

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */

    public function render()
    {


        return view('components.videoteca.videoteca');
    }
}
