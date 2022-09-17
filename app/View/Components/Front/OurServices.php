<?php

namespace App\View\Components\Front;

use App\Models\Service;
use Illuminate\View\Component;

class OurServices extends Component
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
        $services = Service::paginate(3);

        return view('components.front.our-services', compact('services'));
    }
}
