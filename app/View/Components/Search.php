<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Search extends Component
{
    /**
     * Create a new component instance.
     */
    public $url;
    public $placeholder;
    public $fields;
    public function __construct($url, $placeholder, $fields)
    {
        $this->url = $url;
        $this->placeholder = $placeholder;
        $this->fields = $fields;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.search');
    }
}
