<?php

namespace App\View\Components\BackEnd;
use App\Models\Service;
use Illuminate\View\Component;
class serviceList extends Component
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
        $list =  Service::all();
        return view('components.back-end.service-list', compact('list'));
    }
}
