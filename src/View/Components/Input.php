<?php

namespace Leeuwenkasteel\Form\View\Components;

use Illuminate\View\Component;

class Input extends Component{
    public $type;
    public $name;
    public $label;
    public $value;
    public $min = null;

    public function render(){
        return view('form::components.input');
    }
}