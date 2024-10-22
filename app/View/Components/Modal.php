<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    public $id;
    public $labelledby;
    public $title;
    public $content;
    public array $data;

    public function __construct($id, $labelledby, $title, $content, array $data = [])
    {
        $this->id = $id;
        $this->labelledby = $labelledby;
        $this->title = $title;
        $this->content = $content;
        $this->data = $data;
    }

    public function render()
    {
        return view('components.model');
    }
}
