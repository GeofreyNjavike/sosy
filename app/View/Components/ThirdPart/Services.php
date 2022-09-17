<?php

namespace App\View\Components\ThirdPart;

use Illuminate\View\Component;
use App\Models\Service;

class Services extends Component
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
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $services = Service::first()->get();

        return view('components.third-part.services', compact('services'));
    }
}
