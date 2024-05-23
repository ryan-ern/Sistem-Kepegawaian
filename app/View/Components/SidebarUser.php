<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SidebarUser extends Component
{
    public $title;
    public $content;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function render()
    {
        return view('components.sidebar-user');
    }
}
