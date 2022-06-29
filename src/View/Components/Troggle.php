<?php

namespace Leeuwenkasteel\Form\View\Components;

use Illuminate\View\Component;

class Troggle extends Component{
    public $name;
    public $label = null;
    public $helper = null;
    public $checked = null;
    public $id = null;

    public function render(){
        return view('form::components.troggle');
    }
}