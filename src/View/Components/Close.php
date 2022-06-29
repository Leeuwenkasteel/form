<?php

namespace Leeuwenkasteel\Form\View\Components;

use Illuminate\View\Component;

class Close extends Component{
    public $class = null;
    
    public function render(){
        return view('form::components.close');
    }
}