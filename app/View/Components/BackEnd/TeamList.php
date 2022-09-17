<?php

namespace App\View\Components\BackEnd;

use App\Models\Team;
use Illuminate\View\Component;

class TeamList extends Component
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
        $teams = Team::all();
        return view('components.back-end.team-list', compact('teams'));
    }
}
