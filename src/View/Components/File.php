<?php

namespace Leeuwenkasteel\Form\View\Components;

use Illuminate\View\Component;

class Input extends Component{
    public $name;
    public $label;
    public $min = null;

    public function render(){
        return view('form::components.file');
    }
}