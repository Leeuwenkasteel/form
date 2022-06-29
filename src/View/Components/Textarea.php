<?php

namespace Leeuwenkasteel\Form\View\Components;

use Illuminate\View\Component;

class Textarea extends Component{
    public $name;
    public $label;

    public function render(){
        return view('form::components.textarea');
    }
}