<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Test extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public $users;
    public function __construct(
        $name,$users
    )
    {
        $this->name = $name;
        $this->users = $users;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.test');
    }
}
