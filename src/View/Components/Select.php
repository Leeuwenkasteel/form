<?php

namespace Leeuwenkasteel\Form\View\Components;

use Illuminate\View\Component;

class Select extends Component{
    public $options;
    public $name;
    public $label;
    public $other = null;
    public $id;
    public $select = null;

    public function render(){
        return view('form::components.select');
    }
}