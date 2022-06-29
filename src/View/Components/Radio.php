<?php

namespace Leeuwenkasteel\Form\View\Components;

use Illuminate\View\Component;

class Radio extends Component{
    public $name;
    public $label = null;
    public $options;

    public function render(){
        return view('form::components.radio');
    }
}