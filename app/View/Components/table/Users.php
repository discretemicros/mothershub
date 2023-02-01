<?php

namespace App\View\Components\table;

use Illuminate\View\Component;

class Users extends Component
{
    public $data;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->data = $data;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render() 
    {
        return view('components.table.users');
    }
}
