<?php

namespace Leeuwenkasteel\Form\View\Components;

use Illuminate\View\Component;

class Open extends Component{
    public $action;
    public $method;
    public $id = null;
    public $label = null;

    public function render(){
        return view('form::components.open');
    }
}