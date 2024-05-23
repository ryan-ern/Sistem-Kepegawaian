<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SidebarAdmin extends Component
{
    public $content;

    

    public function render()
    {
        return view('components.sidebar-admin');
    }
}
